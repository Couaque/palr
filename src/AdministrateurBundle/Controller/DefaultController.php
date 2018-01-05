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
     * @Route("/perceptions/creer", name="creer")
     */
    public function creerAction()
    {
        return $this->render('AdministrateurBundle:Default:creer.html.twig');
    }
    /**
     * @Route("/perceptions/ajouterPerception", name="ajouterPerception")
     */
    public function ajouterPerceptionAction()
    {
        return $this->render('AdministrateurBundle:Default:ajouterPerception.html.twig');
    }
    /**
     * @Route("/perceptions/ajouterPerception/numPorte", name="numPorte")
     */
    public function ajouterPerceptionNumPorteAction()
    {
        return $this->render('AdministrateurBundle:Default:ajouterPerceptionNumPorte.html.twig');
    }

    /**
     * @Route("/perceptions/ajouterPerception/localisation", name="localisation")
     */
    public function ajouterPerceptionLocalisationAction()
    {
        return $this->render('AdministrateurBundle:Default:ajouterPerceptionLocalisation.html.twig');
    }

    /**
     * @Route("/perceptions/ajouterPerception/numCle", name="numCle")
     */
    public function ajouterPerceptionNumCleAction()
    {
        return $this->render('AdministrateurBundle:Default:ajouterPerceptionNumCle.html.twig');
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

      /**
       * @Route("/lister", name="lister")
       */
      public function ListerAction()
      {
          return $this->render('AdministrateurBundle:Default:Lister.html.twig');
      }
}
