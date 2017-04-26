<?php

namespace SoftUniBlogBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use SoftUniBlogBundle\Entity\Article;
use SoftUniBlogBundle\Entity\Category;
use SoftUniBlogBundle\Entity\Pages;
use SoftUniBlogBundle\Entity\User;
use SoftUniBlogBundle\Form\ArticleType;
use SoftUniBlogBundle\Form\MessageType;
use SoftUniBlogBundle\Form\PagesType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use SoftUniBlogBundle\Entity\Message;

class PagesController extends Controller
{
    /**
     * @Route("/pages/create", name="page_create")
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function pageCreate(Request $request)
    {
        $page = new Pages();
        $form = $this->createForm(PagesType::class, $page);

        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $user = $this->getDoctrine()->getRepository(User::class)->find($this->getUser());
            $srcName = str_replace(' ', '_', strtolower($page->getName()));
            $page->setSrc($srcName);
            $page->setUserId($user->getId());
            $em = $this->getDoctrine()->getManager();
            $em->persist($page);
            $em->flush();

            return $this->redirect($this->generateUrl('profile_edit'));
        }

        return $this->render('user/pages/create.html.twig',
            array('form' => $form->createView()));
    }

    /**
     * @Route("/pages/{id}-{src}", name="page_view")
     * @param $id
     * @param $src
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function pageAction($id, $src)
    {
        $pageContent = $this->getDoctrine()->getRepository(Pages::class)->findBy(array('src' => $src, 'userId' => $id));
        $user = $this->getDoctrine()->getRepository(User::class)->find($id);

        if($user->getStatus() != 'ban' && $pageContent[0]->getColor() == 'light') {

            $articles = $this->getDoctrine()->getRepository(Article::class)->findBy(['authorId' => $id], ['id' => 'DESC']);
            $pages = $this->getDoctrine()->getRepository(Pages::class)->findBy(['userId' => $user->getId()], ['id' => 'DESC']);
            $categories = $this->getDoctrine()->getRepository(Category::class)->findAll();

            if($pageContent[0]->getElements() == 'explore') {
                return $this->render("user/pages/explore2.html.twig", array('user' => $user, 'articles' => $articles, 'categories' => $categories, 'pages' => $pages, 'page' => $pageContent));
            }

            if($pageContent[0]->getElements() == 'profileInfo') {
                return $this->render("user/pages/info2.html.twig", array('user' => $user, 'articles' => $articles, 'categories' => $categories, 'pages' => $pages, 'page' => $pageContent));
            }
            }

        if($user->getStatus() != 'ban' && $pageContent[0]->getColor() == 'dark') {

            $articles = $this->getDoctrine()->getRepository(Article::class)->findBy(['authorId' => $id], ['id' => 'DESC']);
            $pages = $this->getDoctrine()->getRepository(Pages::class)->findBy(['userId' => $user->getId()], ['id' => 'DESC']);
            $categories = $this->getDoctrine()->getRepository(Category::class)->findAll();

            if($pageContent[0]->getElements() == 'explore') {
                return $this->render("user/pages/explore1.html.twig", array('user' => $user, 'articles' => $articles, 'categories' => $categories, 'pages' => $pages, 'page' => $pageContent));
            }

            if($pageContent[0]->getElements() == 'profileInfo') {
                return $this->render("user/pages/info1.html.twig", array('user' => $user, 'articles' => $articles, 'categories' => $categories, 'pages' => $pages, 'page' => $pageContent));
            }
        }

        if($user->getStatus() == 'ban'){
            $this->redirectToRoute('blog_index');
        }

        return $this->redirectToRoute("blog_index");
    }
}
