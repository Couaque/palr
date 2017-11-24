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

    /**
     * @Route("/aide", name="aide")
     */
    public function aideAction()
    {
        return $this->render('FrontBundle:Default:aide.html.twig');
    }

      /**
       * @Route("/accueil", name="accueil")
       */
      public function accueilAction()
      {
          return $this->render('FrontBundle:Default:accueil.html.twig');
      }

      /**
       * @Route("/bd", name="bd")
       */
      public function bdAction()
      {
          return $this->render('FrontBundle:Default:bd.html.twig');
      }

      /**
       * @Route("/stock", name="stock")
       */
      public function stockAction()
      {
          return $this->render('FrontBundle:Default:stock.html.twig');
      }
}
