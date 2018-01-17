<?php

namespace AdministrateurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AdministrateurBundle\Entity\Perception;
use AdministrateurBundle\Entity\Percepteur;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->redirectToRoute("accueil");
    }

    /**
     * @Route("/login", name="login")
     */
    public function loginAction()
    {
        return $this->render('AdministrateurBundle:Default:login.html.twig');
    }

      /**
       * @Route("/accueil", name="accueil")
       */
      public function accueilAction()
      {
          return $this->render('AdministrateurBundle:Default:accueil.html.twig');
      }

}
