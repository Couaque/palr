<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use SecuriteBundle\Form\UtilisateurType;
use SecuriteBundle\Entity\Utilisateur;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="panel")
     */
    public function indexAction()
    {
        return $this->render('AdminBundle:Default:panel.html.twig');
    }

    /**
     * @Route("/creerUtilisateur", name="creerUtilisateur")
     */
    public function creerUtilisateurAction()
    {
        $utilisateur = new Utilisateur();
        //var_dump($utilisateur);
        $form = $this->createForm(UtilisateurType::class, $utilisateur);
        return $this->render('AdminBundle:Default:creerUtilisateur.html.twig', array(
          'form' => $form->createView()
        ));
    }

    /**
     * @Route("/desactiverUtilisateur", name="desactiverUtilisateur")
     */
    public function desactiverUtilisateurAction()
    {
        return $this->render('AdminBundle:Default:desactiverUtilisateur.html.twig');
    }

    /**
     * @Route("/enrichirBD", name="enrichirBD")
     */
    public function enrichirBDAction()
    {
        return $this->render('AdminBundle:Default:enrichirBD.html.twig');
    }
}
