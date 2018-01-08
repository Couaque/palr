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
     * @Route("/perceptions/ajouterPerception", name="ajouterPerception")
     */
    public function ajouterPerceptionAction()
    {
        return $this->render('AdministrateurBundle:Default:ajouterPerception.html.twig');
    }

    /**
     * @Route("/perceptions/modifierPerception", name="modifierPerception")
     */
    public function modifierPerceptionAction()
    {
        return $this->render('AdministrateurBundle:Default:modifierPerception.html.twig');
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
    public function ajouterPerceptionNumCleAction(Request $request)
    {
        $perception = new Perception();

        $form = $this->createFormBuilder($perception)
        ->add('percepteur', EntityType::class, array(
          'class' => 'AdministrateurBundle:Percepteur',
          'choice_label' => 'nomPrenomPercepteur',  
          'label' => 'Percepteur :',

        ))
        ->add('dateDebut', DateType::class, array('label' => 'Date de début : ', 'format'=>'dd/MM/yyyy'))
        ->add('dateFin', DateType::class, array('label' => 'Date de fin (non obligatoire) : ', 'format'=>'dd/MM/yyyy'))
        ->add('save', SubmitType::class, array('label' => 'Ajouter Perception'))
        ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
        $PerceptionInsert = $form->getData();

        $em = $this->getDoctrine()->getManager();
        $em->persist($PerceptionInsert);
        $em->flush();
        /*$this->addFlash("success", "Vous avez bien inséré une perception pour : " . $PerceptionInsert->getNomPercepteur());
*/
    }/*else{
      if ($form->isSubmitted() && !($form->isValid())) {
        $validator = $this->get('validator');
        $errors = $validator->validate($membre);
        $errorsString = (string) $errors;
        return $this->render('AdministrateurBundle:Default:ajouterPerceptionNumCle.html.twig', array(
          'form' => $form->createView(),
          'errors' => $errors
        ));
      }
    }*/
        return $this->render('AdministrateurBundle:Default:ajouterPerceptionNumCle.html.twig', array(
          'form' => $form->createView(),
        ));
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
       * @Route("/perceptions/lister", name="lister")
       */
      public function listerPerceptionsAction()
      {
          return $this->render('AdministrateurBundle:Default:Lister.html.twig');
      }
}
