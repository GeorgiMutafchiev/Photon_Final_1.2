<?php

namespace SoftUniBlogBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use SoftUniBlogBundle\Entity\Article;
use SoftUniBlogBundle\Entity\Category;
use SoftUniBlogBundle\Entity\User;
use SoftUniBlogBundle\Form\ArticleType;
use SoftUniBlogBundle\Form\MessageType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use SoftUniBlogBundle\Entity\Message;

class ArticleController extends Controller
{
    /**
     * @param Request $request
     *
     * @Route("/article/create", name="article_create")
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     *
     */
    public function create(Request $request)
    {
        $article = new Article();
        $form = $this->createForm(ArticleType::class, $article);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /**
             * @var UploadedFile $file
             */
            $file = $article->getPhoto();

            // Generate a unique name for the file before saving it
            $fileName = md5(uniqid()).'.'.$file->guessExtension();

            // Move the file to the directory where brochures are stored
            $file->move(
                $this->getParameter('photos_dir'),
                $fileName);

            $article->setPhoto($fileName);
            $article->setAuthor($this->getUser());
            $em = $this->getDoctrine()->getManager();
            $em->persist($article);
            $em->flush();

            return $this->redirect($this->generateUrl('blog_index'));
        }

        $categories = $this->getDoctrine()->getRepository(Category::class)->findAll();

        return $this->render('article/create.html.twig',
            array('form' => $form->createView(), 'categories' => $categories));
    }

    /**
     * @Route("/explore", name="explore_posts")
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function explorePosts()
    {
        $articles = $this->getDoctrine()->getRepository(Article::class)->findAll();
        return $this->render('article/explore.html.twig', ['articles' => $articles]);
    }

    /**
     * @Route("/article/{id}", name="article_view")
     *
     * @param $id
     * @param Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function viewArticle($id, Request $request)
    {
        $article = $this->getDoctrine()->getRepository(Article::class)->find($id);
        $allarticles = $this->getDoctrine()->getRepository(Article::class)->findAll();
        $user = $this->getDoctrine()->getRepository(User::class)->find($article->getAuthorId());
        $comments = $this->getDoctrine()->getRepository(Message::class)->findBy(['postId' => $id], ['id' => 'DESC']);

        $message = new Message();

        if($article === null){
            return $this->redirectToRoute("blog_index");
        }

        $form = $this->createForm(MessageType::class, $message);

        $form->handleRequest($request);

        if ($form->isSubmitted())
        {
            $message->setPostId($id);
            $em = $this->getDoctrine()->getManager();
            $em->persist($message);
            $em->flush();

            return $this->redirectToRoute('article_view', array('id' => $article->getId()));
        }

        return $this->render('article/article.html.twig',
            array('article' => $article, 'allarticles' => $allarticles, 'author' => $user, 'comments' => $comments,
                'form' => $form->createView()));
}



    /**
     * @Route("/article/edit/{id}", name="article_edit")
     * @Security("is_granted('IS_AUTHENTICATED_REMEMBERED')")
     *
     * @param $id
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function editArticle($id, Request $request)
    {
        $article = $this->getDoctrine()->getRepository(Article::class)->find($id);

        if($article === null){
            return $this->redirectToRoute("blog_index");
        }

        $currentUser = $this->getUser();

        if(!$currentUser->isAuthor($article) && !$currentUser->isAdmin())
        {
            return $this->redirectToRoute("blog_index");
        }

        $form = $this->createForm(ArticleType::class, $article);

        $form->handleRequest($request);

        if ($form->isSubmitted())
        {

            $em = $this->getDoctrine()->getManager();
            $em->persist($article);
            $em->flush();

            return $this->redirectToRoute('list_articles', array('id' => $article->getId()));
        }

        return $this->render('article/edit.html.twig',
            array('article' => $article,
                'form' => $form->createView()));
    }

    /**
     * @Route("/article/delete/{id}", name="article_delete")
     * @Security("is_granted('IS_AUTHENTICATED_REMEMBERED')")
     *
     * @param $id
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function delete($id, Request $request)
    {
        $article = $this->getDoctrine()->getRepository(Article::class)->find($id);

        if($article === null){
            return $this->redirectToRoute("blog_index");
        }

        $currentUser = $this->getUser();
        if(!$currentUser->isAuthor($article) && !$currentUser->isAdmin())
        {
            return $this->redirectToRoute("blog_index");
        }

        $form = $this->createForm(ArticleType::class, $article);

        $form->handleRequest($request);

        if ($form->isSubmitted())
        {
            $em = $this->getDoctrine()->getManager();
            $em->remove($article);
            $em->flush();

            return $this->redirectToRoute('list_articles');
        }

        return $this->render('article/delete.html.twig', array('article' => $article, 'form' => $form->createView()));
    }

    /**
     * @Route("/admin/articles", name="admin_articles")
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function adminArticlesAction()
    {
        $articles = $this->getDoctrine()->getRepository(Article::class)->findAll();
        if($this->getUser()->isAdmin()) {
            return $this->render('admin/articles/listarticles.html.twig',
                array('articles' => $articles));
        }
        return $this->redirectToRoute("blog_index");
    }
}



