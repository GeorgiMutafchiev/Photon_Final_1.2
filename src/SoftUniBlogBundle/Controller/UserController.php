<?php

namespace SoftUniBlogBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use SoftUniBlogBundle\Entity\Role;
use SoftUniBlogBundle\Entity\User;
use SoftUniBlogBundle\Entity\Category;
use SoftUniBlogBundle\Entity\Article;
use SoftUniBlogBundle\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;

class UserController extends Controller
{
    /**
     * @Route("/register", name="user_register")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function registerAction(Request $request)
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            /**
             * @var UploadedFile $file
             */
            $file = $user->getPhoto();

            // Generate a unique name for the file before saving it
            $fileName = md5(uniqid()).'.'.$file->guessExtension();

            // Move the file to the directory where brochures are stored
            $file->move(
                $this->getParameter('photos_dir'),
                $fileName);

            $user->setPhoto($fileName);
            $user->setDescription("no");
            $user->setFacebook("no");
            $user->setInstagram("no");
            $user->setTwitter("no");
            $user->setProfiletype("new");
            $user->setStatus("ok");

            $password = $this->get('security.password_encoder')
                ->encodePassword($user, $user->getPassword());
            $user->setPassword($password);

            $roleRepository = $this->getDoctrine()->getRepository(Role::class);
            $userRole = $roleRepository->findOneBy(['name' => 'ROLE_USER']);

            $user->addRole($userRole);

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute('security_login');
        }

        return $this->render(
            'user/register.html.twig',
            array('form' => $form->createView())
        );
    }



    /**
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     * @Route("/profile", name="user_profile")
     */
    public function profileAction()
{
    $user = $this->getUser();
    if($user->getProfiletype() == 'new')
    {
        return $this->render("user/newprofile.html.twig", ['user'=>$user]);
    } else {
        if($user->getProfiletype() == 'first' && $user->getStatus() != 'ban') {
            $articles = $this->getDoctrine()->getRepository(Article::class)->findBy(['author' => $this->getUser()], ['id' => 'DESC']);
            $categories = $this->getDoctrine()->getRepository(Category::class)->findAll();
            return $this->render("user/profile1.html.twig", array('user' => $user, 'articles' => $articles, 'categories' => $categories));
        } elseif($user->getProfiletype() == 'second' && $user->getStatus() != 'ban') {
            $articles = $this->getDoctrine()->getRepository(Article::class)->findBy(['author' => $this->getUser()], ['id' => 'DESC']);
            $categories = $this->getDoctrine()->getRepository(Category::class)->findAll();
            return $this->render("user/profile2.html.twig", array('user' => $user, 'articles' => $articles, 'categories' => $categories));
        }
        if($user->getStatus() == 'ban'){
            $this->redirectToRoute('blog_index');
        }
    }
}

    /**
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     * @Route("/list", name="list_articles")
     */
    public function listArticlesAction()
    {
        $user = $this->getUser();
        $articles = $this->getDoctrine()->getRepository(Article::class)->findBy(['author' => $this->getUser()], ['id' => 'DESC']);
        if($user->getStatus() != 'ban') {
            return $this->render("article/list.html.twig", array('user' => $user, 'articles' => $articles));
        }
    }

    /**
     * @Route("/profile/{id}", name="profile_see")
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function profileViewAction($id)
    {
        $user = $this->getDoctrine()->getRepository(User::class)->find($id);
        if($user->getProfiletype() == 'new' && $user->getStatus() == 'ban')
        {
            return $this->redirectToRoute('blog_index');
        } else {
            if($user->getProfiletype() == 'first') {
                $articles = $this->getDoctrine()->getRepository(Article::class)->findBy(['authorId' => $id], ['id' => 'DESC']);
                $categories = $this->getDoctrine()->getRepository(Category::class)->findAll();
                return $this->render("user/profile1.html.twig", array('user' => $user, 'articles' => $articles, 'categories' => $categories));
            } elseif($user->getProfiletype() == 'second') {
                $articles = $this->getDoctrine()->getRepository(Article::class)->findBy(['authorId' => $id], ['id' => 'DESC']);
                $categories = $this->getDoctrine()->getRepository(Category::class)->findAll();
                return $this->render("user/profile2.html.twig", array('user' => $user, 'articles' => $articles, 'categories' => $categories));
            }

        }
    }

    /**
     * @Route("/profile/", name="newuser_edit")
     * @Security("is_granted('IS_AUTHENTICATED_REMEMBERED')")
     *
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function editArticle(Request $request)
    {
        $user = $this->getDoctrine()->getRepository(User::class)->find($this->getUser());

        if($user === null){
            return $this->redirectToRoute("blog_index");
        }

        $form = $this->createForm(UserType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted())
        {
            $user->setEmail($user->getEmail());
            $user->setFullName($user->getFullName());
            $user->setPassword($user->getPassword());
            $user->setPhoto($user->getPhoto());
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute('blog_index');
        }

        return $this->render('user/newprofile.html.twig',
            array('user' => $user,
                'form' => $form->createView()));
    }

    /**
     * @Route("/profile/edit/", name="profile_edit")
     * @Security("is_granted('IS_AUTHENTICATED_REMEMBERED')")
     *
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function editProfile(Request $request)
    {
        $user = $this->getDoctrine()->getRepository(User::class)->find($this->getUser());

        if($user === null){
            return $this->redirectToRoute("blog_index");
        }

        $currentUser = $this->getUser();

        if(!$currentUser == $this->getUser() && !$currentUser->isAdmin())
        {
            return $this->redirectToRoute("blog_index");
        }

        $form = $this->createForm(UserType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute('list_articles');
        }

        return $this->render('user/settings.html.twig',
            array('user' => $user,
                'form' => $form->createView()));
    }

    /**
     * @Route("/admin/users", name="admin_users")
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function adminUsersAction()
    {
        $users = $this->getDoctrine()->getRepository(User::class)->findAll();
        if($this->getUser()->isAdmin()) {
            return $this->render('admin/listusers.html.twig',
                array('users' => $users));
        }
        return $this->redirectToRoute("blog_index");
    }

    /**
     * @Route("/admin/edit/user/{id}", name="admin_user_edit")
     * @Security("is_granted('IS_AUTHENTICATED_REMEMBERED')")
     *
     * @param $id
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function adminUserEditAction($id, Request $request)
    {
        $user = $this->getDoctrine()->getRepository(User::class)->find($id);

        if($user === null){
            return $this->redirectToRoute("blog_index");
        }

        $currentUser = $this->getUser();

        if(!$currentUser->isAdmin())
        {
            return $this->redirectToRoute("blog_index");
        }

        $form = $this->createForm(UserType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted())
        {

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute('admin_users');
        }

        return $this->render('admin/user_edit.html.twig',
            array('user' => $user,
                'form' => $form->createView()));
    }

    /**
     * @Route("/admin/delete/user/{id}", name="admin_user_delete")
     * @Security("is_granted('IS_AUTHENTICATED_REMEMBERED')")
     *
     * @param $id
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function adminUserDeleteAction($id, Request $request)
    {
        $user = $this->getDoctrine()->getRepository(User::class)->find($id);

        if($user === null){
            return $this->redirectToRoute("blog_index");
        }

        $currentUser = $this->getUser();
        if(!$currentUser->isAdmin())
        {
            return $this->redirectToRoute("blog_index");
        }

        $form = $this->createForm(UserType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted())
        {
            $em=$this->getDoctrine()->getEntityManager();
            $em->remove($user);
            $em->flush();

            return $this->redirectToRoute('admin_users');
        }

        return $this->render('admin/user_delete.html.twig', array('user' => $user, 'form' => $form->createView()));
    }
}
