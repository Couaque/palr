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


class PerceptionController extends Controller
{

  /**
  * @Route("/perception", name="perception")
  */
  public function PerceptionAction()
  {
    return $this->render('AdministrateurBundle:Perception:perception.html.twig');
  }


  /**
  * @Route("/perception/modifierPerception", name="modifierPerception")
  */
  public function modifierPerceptionAction()
  {
    return $this->render('AdministrateurBundle:Perception:modifierPerception.html.twig');
  }


  /**
  * @Route("/perception/ajouterPerception", name="ajouterPerception")
  */
  public function ajouterPerceptionAction()
  {
    return $this->render('AdministrateurBundle:Perception:ajouterPerception.html.twig');
  }

  /**
  * @Route("/perception/ajouterPerception/numPorte", name="numPorte")
  */
  public function ajouterPerceptionNumPorteAction()
  {
    return $this->render('AdministrateurBundle:Perception:ajouterPerceptionNumPorte.html.twig');
  }

  /**
  * @Route("/perception/ajouterPerception/localisation", name="localisation")
  */
  public function ajouterPerceptionLocalisationAction()
  {
    return $this->render('AdministrateurBundle:Perception:ajouterPerceptionLocalisation.html.twig');
  }

  /**
  * @Route("/perception/ajouterPerception/numCle", name="numCle")
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
    }

    return $this->render('AdministrateurBundle:Perception:ajouterPerceptionNumCle.html.twig', array(
      'form' => $form->createView(),
    ));
  }

  /**
  * @Route("/perception/lister", name="lister")
  */
  public function listerPerceptionsAction()
  {
    return $this->render('AdministrateurBundle:Perception:listerPerception.html.twig');
  }

}
