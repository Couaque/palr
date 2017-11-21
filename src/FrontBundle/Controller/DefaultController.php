<?php

namespace FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->redirectToRoute("login");
    }

    /**
     * @Route("/login", name="login")
     */
    public function loginAction()
    {
        return $this->render('FrontBundle:Default:login.html.twig');
    }

    /**
     * @Route("/perceptions", name="listerPerceptions")
     */
    public function listerPerceptionsAction()
    {
        return $this->render('FrontBundle:Default:listerPerceptions.html.twig');
    }
}
