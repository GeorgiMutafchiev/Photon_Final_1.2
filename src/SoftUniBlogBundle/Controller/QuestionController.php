<?php

namespace SoftUniBlogBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use SoftUniBlogBundle\Entity\Answer;
use SoftUniBlogBundle\Entity\Article;
use SoftUniBlogBundle\Entity\Category;
use SoftUniBlogBundle\Entity\Question;
use SoftUniBlogBundle\Entity\User;
use SoftUniBlogBundle\Form\AnswerType;
use SoftUniBlogBundle\Form\ArticleType;
use SoftUniBlogBundle\Form\MessageType;
use SoftUniBlogBundle\Form\QuestionType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use SoftUniBlogBundle\Entity\Message;

class QuestionController extends Controller
{
    /**
     * @param Request $request
     *
     * @Route("/question/create", name="question_create")
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     *
     * @return \Symfony\Component\HttpFoundation\Response
     *
     */
    public function create(Request $request)
    {
        $question = new Question();
        $form = $this->createForm(QuestionType::class, $question);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $question->setDate(new \DateTime('now'));
            $question->setUserId($this->getUser()->getId());
            $em = $this->getDoctrine()->getManager();
            $em->persist($question);
            $em->flush();

            return $this->redirect($this->generateUrl('profile_edit'));
        }

        return $this->render('question/create.html.twig',
            array('form' => $form->createView()));
    }

    /**
     * @Route("/question/{id}", name="question_view")
     *
     * @param $id
     * @param Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function viewArticle($id, Request $request)
    {
        $question = $this->getDoctrine()->getRepository(Question::class)->find($id);
        $user = $this->getDoctrine()->getRepository(User::class)->find($question->getUserId());
        $answers = $this->getDoctrine()->getRepository(Answer::class)->findBy(['postId' => $id], ['id' => 'DESC']);

        $answer = new Answer();

        if($question === null){
            return $this->redirectToRoute("blog_index");
        }

        $form = $this->createForm(AnswerType::class, $answer);

        $form->handleRequest($request);

        if ($form->isSubmitted())
        {
            $answer->setPostId($id);
            $em = $this->getDoctrine()->getManager();
            $em->persist($answer);
            $em->flush();

            return $this->redirectToRoute('question_view', array('id' => $question->getId()));
        }

        return $this->render('question/view.html.twig',
            array('answers' => $answers, 'question' => $question, 'author' => $user,
                'form' => $form->createView()));
    }
}
