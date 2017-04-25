<?php

namespace SoftUniBlogBundle\Controller;

use Doctrine\ORM\Mapping\Cache;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use SoftUniBlogBundle\Entity\Article;
use SoftUniBlogBundle\Entity\Message;
use SoftUniBlogBundle\Entity\User;
use SoftUniBlogBundle\Form\MessageType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\BrowserKit\Request;
use Doctrine\DBAL\Types\TextType;

class HomeController extends Controller
{
    /**
     * @Route("/", name="blog_index")
     * @Method("GET")
     */
    public function indexAction()
    {

        $articles = $this->getDoctrine()->getRepository(Article::class)->findBy([], ['id' => 'DESC']);

        $users = $this->getDoctrine()->getRepository(User::class)->findBy([], ['id' => 'DESC']);

        return $this->render('blog/index.html.twig', array('articles' => $articles, 'users' => $users));
    }
}
