<?php

namespace AdministrateurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AdministrateurBundle\Entity\Perception;
use AdministrateurBundle\Entity\Percepteur;
use AdministrateurBundle\Form\PerceptionType;
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
    $repository=$this->getDoctrine()->getManager()->getRepository('AdministrateurBundle:PassPartiel1');
    $PassPartiel1 = $repository->findAll();
    $repository=$this->getDoctrine()->getManager()->getRepository('AdministrateurBundle:PassPartiel2');
    $PassPartiel2 = $repository->findAll();
    $repository=$this->getDoctrine()->getManager()->getRepository('AdministrateurBundle:PassPartiel3');
    $PassPartiel3 = $repository->findAll();
    return $this->render('AdministrateurBundle:Perception:perception.html.twig', array(
      'passPartiel1' => $PassPartiel1,'passPartiel2' => $PassPartiel2,'passPartiel3' => $PassPartiel3
    ));
  }


  /**
  * @Route("/perception/modifierPerception/{id}", name="modifierPerception")
  * @Route("/perception/modifierPerception", defaults={"id"=-1})
  */
  public function modifierPerceptionAction(Request $request, $id)
  {
    $em=$this->getDoctrine()->getManager();
    $perception = $em->getRepository('AdministrateurBundle:Perception')->find($id);
    $form = $this->createForm(ModifierPerceptionForm::class, $perception);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
      $PerceptionInsert = $form->getData();

      $em = $this->getDoctrine()->getManager();
      $em->persist($PerceptionInsert);
      $em->flush();
      $this->addFlash("success", "Vous avez bien modifier la Perception");
    }

    return $this->render('AdministrateurBundle:Perception:modifierPerception.html.twig', array(
      'form' => $form->createView(),
    ));
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

    //$perception->getPercepteur()->add($percepteur);


    $form = $this->createForm(PerceptionType::class, $perception);
    /*->add('percepteur', EntityType::class, array(
      'class' => 'AdministrateurBundle:Percepteur',
      'choice_label' => 'nomPrenomPercepteur',
      'label' => 'Percepteur :',

    ))
    ->add('dateDebut', DateType::class, array('label' => 'Date de début : ', 'format'=>'dd/MM/yyyy'))
    ->add('dateFin', DateType::class, array('label' => 'Date de fin (non obligatoire) : ', 'format'=>'dd/MM/yyyy'))
    ->add('save', SubmitType::class, array('label' => 'Ajouter Perception'))
    ->getForm();*/

    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
      $PerceptionInsert = $form->getData();

      $em = $this->getDoctrine()->getManager();
      $em->persist($PerceptionInsert);
      $em->flush();
      $this->addFlash("success", "Vous avez bien inséré la perception");
    }

    return $this->render('AdministrateurBundle:Perception:ajouterPerceptionNumCle.html.twig', array(
      'form' => $form->createView(),
    ));
  }

  /**
  * @Route("/perception/listerPerception", name="listerPerception")
  */
  public function listerPerceptionsAction()
  {
    return $this->render('AdministrateurBundle:Perception:listerPerception.html.twig');
  }

}
