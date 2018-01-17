<?php

namespace AdministrateurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AdministrateurBundle\Entity\Perception;
use AdministrateurBundle\Entity\Percepteur;
use AdministrateurBundle\Form\PerceptionType;
use AdministrateurBundle\Form\PerceptionType2;
use AdministrateurBundle\Form\PerceptionType3;
use AdministrateurBundle\Form\PerceptionType4;

use AdministrateurBundle\Form\ModifierPerceptionType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\JsonResponse;


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
    $form = $this->createForm(ModifierPerceptionType::class, $perception);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
      $PerceptionInsert = $form->getData();

      $em = $this->getDoctrine()->getManager();
      $em->persist($PerceptionInsert);
      $em->flush();
      $this->addFlash("success", "Vous avez bien modifié la Perception");
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
  * @Route("/perception/ajouterPerception/localisation", name="localisation")
  */
  public function ajouterPerceptionLocalisationAction()
  {
    return $this->render('AdministrateurBundle:Perception:ajouterPerceptionLocalisation.html.twig');
  }

  /**
  * @Route("/perception/ajouterPerception/numCle/Choix", name="numCle")
  */
  public function ajouterPerceptionNumCleChoixAction()
  {
    return $this->render('AdministrateurBundle:Perception:ajouterPerceptionNumCleChoix.html.twig');
  }


   /**
  * @Route("/perception/ajouterPerception/numPorte", name="numPorte")
  */
  public function ajouterPerceptionNumPorteAction()
  {
    return $this->render('AdministrateurBundle:Perception:ajouterPerceptionNumPorte.html.twig');
  }

  /**
  * @Route("/perception/ajouterPerception/numPorte/Choix", name="numPorte")
  */
  public function ajouterPerceptionNumPorteChoixAction()
  {
    return $this->render('AdministrateurBundle:Perception:ajouterPerceptionNumPorteChoix.html.twig');
  }

  /**
  * @Route("/perception/ajouterPerception/numPorte/nouveauPercepteur", name="numPorteNouveauPercepteur")
  */
  public function ajouterPerceptionNumPorteNouveauPercepteurAction(Request $request)
  {
    $perception = new Perception();
    $perception->setDateFin(null);
    $perception->setPassPartiel1(null);
    $perception->setPassPartiel3(null);
    $perception->setPassPartiel2(null);
    $percepteur = new Percepteur();
    $percepteur->setService(null);
    //$perception->getPercepteur()->add($percepteur);


    $form = $this->createForm(PerceptionType3::class, $perception);


    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
      $PerceptionInsert = $form->getData();
      if($perception->getTypePerception() == "Permanente"){
        $perception->setDateFin(null);
      }
      $perception->setEtatPerception("En cours");
      $perception->setChoixPerception("Clé");

      $em = $this->getDoctrine()->getManager();
      $em->persist($PerceptionInsert);
      $em->flush();
      $this->addFlash("success", "Vous avez bien inséré la perception");
    }
    $repository=$this->getDoctrine()->getManager()->getRepository('AdministrateurBundle:Equipement');
    $listeEquipements = $repository->findAll();

    return $this->render('AdministrateurBundle:Perception:ajouterPerceptionNumPorteNouveauPercepteur.html.twig', array(
      'equipements' => $listeEquipements,
      'form' => $form->createView(),
    ));
  }

  /**
  * @Route("/perception/ajouterPerception/numPorte/PercepteurConnu", name="numPortePercepteurConnu")
  */
  public function ajouterPerceptionNumPortePercepteurConnuAction(Request $request)
  {
    $perception = new Perception();
    $perception->setDateFin(null);
    $perception->setPassPartiel1(null);
    $perception->setPassPartiel3(null);
    $perception->setPassPartiel2(null);
    $percepteur = new Percepteur();
    $percepteur->setService(null);



    $form = $this->createForm(PerceptionType4::class, $perception);


    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
      $PerceptionInsert = $form->getData();
      if($perception->getTypePerception() == "Permanente"){
        $perception->setDateFin(null);
      }
      $perception->setEtatPerception("En cours");
      $em = $this->getDoctrine()->getManager();
      $em->persist($PerceptionInsert);
      $em->flush();
      $this->addFlash("success", "Vous avez bien inséré la perception");
    }
    $repository=$this->getDoctrine()->getManager()->getRepository('AdministrateurBundle:Equipement');
    $listeEquipements = $repository->findAll();
    return $this->render('AdministrateurBundle:Perception:ajouterPerceptionNumPortePercepteurConnu.html.twig', array(
      'equipements' => $listeEquipements,
      'form' => $form->createView(),
   
    ));
  }

  /**
  * @Route("/perception/ajouterPerception/numCle/nouveauPercepteur", name="numCleNouveauPercepteur")
  */
  public function ajouterPerceptionNumCleNouveauPercepteurAction(Request $request)
  {
    $perception = new Perception();
    $perception->setDateFin(null);
    $perception->setPassPartiel1(null);
    $perception->setPassPartiel3(null);
    $perception->setPassPartiel2(null);
    $percepteur = new Percepteur();
    $percepteur->setService(null);



    $form = $this->createForm(PerceptionType::class, $perception);


    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
      $PerceptionInsert = $form->getData();
      if($perception->getTypePerception() == "Permanente"){
        $perception->setDateFin(null);
      }
      $perception->setEtatPerception("En cours");
      $em = $this->getDoctrine()->getManager();
      $em->persist($PerceptionInsert);
      $em->flush();
      $this->addFlash("success", "Vous avez bien inséré la perception");
    }
    return $this->render('AdministrateurBundle:Perception:ajouterPerceptionNumCleNouveauPercepteur.html.twig', array(
      'form' => $form->createView(),
   
    ));
  }


/**
  * @Route("/perception/ajouterPerception/numCle/PercepteurConnu", name="numClePercepteurConnu")
  */
  public function ajouterPerceptionNumClePercepteurConnuAction(Request $request)
  {
    $perception = new Perception();
    $perception->setDateFin(null);
    $perception->setPassPartiel1(null);
    $perception->setPassPartiel3(null);
    $perception->setPassPartiel2(null);
    $percepteur = new Percepteur();
    $percepteur->setService(null);
    //$perception->getPercepteur()->add($percepteur);


    $form = $this->createForm(PerceptionType2::class, $perception);


    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
      $PerceptionInsert = $form->getData();
      if($perception->getTypePerception() == "Permanente"){
        $perception->setDateFin(null);
      }
      $perception->setEtatPerception("En cours");
      $em = $this->getDoctrine()->getManager();
      $em->persist($PerceptionInsert);
      $em->flush();
      $this->addFlash("success", "Vous avez bien inséré la perception");
    }
    $repository1=$this->getDoctrine()->getManager()->getRepository('AdministrateurBundle:PassPartiel1');
    $repository2=$this->getDoctrine()->getManager()->getRepository('AdministrateurBundle:PassPartiel2');
    $repository3=$this->getDoctrine()->getManager()->getRepository('AdministrateurBundle:PassPartiel3');
      $pp1 = $repository1->findAll();
      $pp2 = $repository2->findAll();
      $pp3 = $repository3->findAll();


    return $this->render('AdministrateurBundle:Perception:ajouterPerceptionNumClePercepteurConnu.html.twig', array(
      'form' => $form->createView(),
      'pp1' => $pp1,
      'pp2' => $pp2,
      'pp3' => $pp3,
    ));
  }

  /**
  * @Route("/perception/filtrerPerception", name="filtrerPerception")
  */
  public function filtrerPerceptionAction(Request $req) {
    if($req->isXMLHttpRequest()) {
      $options['nom']=$req->get('nom');
      $options['organisation']=$req->get('organisation');
      $options['numeroCle']=$req->get('numeroCle');
      $options['Pass1']=$req->get('Pass1');
      $options['Pass2']=$req->get('Pass2');
      $options['Pass3']=$req->get('Pass3');
      $repository = $this->getDoctrine()->getManager()->getRepository('AdministrateurBundle:Perception');
      $perceptions = $repository->recherche($options);

      $data = $this->get('jms_serializer')->serialize($perceptions, 'json');
      $response = new Response($data);
      $response->headers->set('Content-Type', 'application/json');

      return $response;
    }
    return new Response("Erreur : Ce n'est pas une requete Ajax",400);
    }

  }
