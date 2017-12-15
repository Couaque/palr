<?php

namespace AdministrateurBundle\Controller;

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
        return $this->render('AdministrateurBundle:Default:login.html.twig');
    }

    /**
     * @Route("/perceptions", name="Perceptions")
     */
    public function PerceptionsAction()
    {
        return $this->render('AdministrateurBundle:Default:Perceptions.html.twig');
    }

    /**
     * @Route("/aide", name="aide")
     */
    public function aideAction()
    {
        return $this->render('AdministrateurBundle:Default:aide.html.twig');
    }

      /**
       * @Route("/accueil", name="accueil")
       */
      public function accueilAction()
      {
          return $this->render('AdministrateurBundle:Default:accueil.html.twig');
      }

      /**
       * @Route("/bd", name="bd")
       */
      public function bdAction()
      {
          return $this->render('AdministrateurBundle:Default:bd.html.twig');
      }

      /**
       * @Route("/Inventaire", name="Inventaire")
       */
      public function InventaireAction()
      {
          return $this->render('AdministrateurBundle:Default:Inventaire.html.twig');
      }
}
