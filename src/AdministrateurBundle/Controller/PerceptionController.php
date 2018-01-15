<?php

namespace AdministrateurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AdministrateurBundle\Entity\Perception;
use AdministrateurBundle\Entity\Percepteur;
use AdministrateurBundle\Form\PerceptionType;
use AdministrateurBundle\Form\PerceptionType2;
use AdministrateurBundle\Form\ModifierPerceptionType;
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
    $form = $this->createForm(ModifierPerceptionType::class, $perception);
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
  * @Route("/perception/ajouterPerception/numCle/Choix", name="numCle")
  */
  public function ajouterPerceptionNumCleAction()
  {
    return $this->render('AdministrateurBundle:Perception:ajouterPerceptionNumCleChoix.html.twig');
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
    //$perception->getPercepteur()->add($percepteur);


    $form = $this->createForm(PerceptionType::class, $perception);


    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
      $PerceptionInsert = $form->getData();
      if($perception->getTypePerception() == "Permanente"){
        $perception->setDateFin(null);
      }
      $em = $this->getDoctrine()->getManager();
      $em->persist($PerceptionInsert);
      $em->flush();
      $this->addFlash("success", "Vous avez bien inséré la perception");
    }
    $repository=$this->getDoctrine()->getManager()->getRepository('AdministrateurBundle:Variure');
    $repository2=$this->getDoctrine()->getManager()->getRepository('AdministrateurBundle:PassPartiel2');
      $listeVariures = $repository->findAll();
      $PP2DAF01 = $repository->PP2DAF01();
      $PP2DAF02 = $repository->PP2DAF02();
      $PP2DAF03 = $repository->PP2DAF03();
      $PP2DAF04 = $repository->PP2DAF04();
      $PP2DAF05 = $repository->PP2DAF05();
      $PP2DAF06 = $repository->PP2DAF06();
      $PP2DAF07 = $repository->PP2DAF07();
      $PP2DAF08 = $repository->PP2DAF08();
      $PP2DG01 = $repository->PP2DG01();
      $PP2DG02 = $repository->PP2DG02();
      $PP2DG03 = $repository->PP2DG03();
      $PP2DG04 = $repository->PP2DG04();
      $PP2DG05 = $repository->PP2DG05();
      $PP2DOP01 = $repository->PP2DOP01();
      $PP2DOP02 = $repository->PP2DOP02();
      $PP2DOP03 = $repository->PP2DOP03();
      $PP2DOP04 = $repository->PP2DOP04();
      $PP2DOP05 = $repository->PP2DOP05();
      $PP2DOP06 = $repository->PP2DOP06();
      $PP2DOP07 = $repository->PP2DOP07();
      $PP2SUR01 = $repository->PP2SUR01();
      $PP2SUR02 = $repository->PP2SUR02();
      $PP2SUR03 = $repository->PP2SUR03();
      $PP2SUR04 = $repository->PP2SUR04();
      $PP2SUR05 = $repository->PP2SUR05();
      $pp2 = $repository2->findAll();


    return $this->render('AdministrateurBundle:Perception:ajouterPerceptionNumCleNouveauPercepteur.html.twig', array(
      'variures' => $listeVariures,
      'form' => $form->createView(),
         'PP2DAF01' => $PP2DAF01,
      'PP2DAF02' => $PP2DAF02,
      'PP2DAF03' => $PP2DAF03,
      'PP2DAF04' => $PP2DAF04,
      'PP2DAF05' => $PP2DAF05,
      'PP2DAF06' => $PP2DAF06,
      'PP2DAF07' => $PP2DAF07,
      'PP2DAF08' => $PP2DAF08,
      'PP2DG01'=> $PP2DG01,
      'PP2DG02'=> $PP2DG02,
      'PP2DG03'=> $PP2DG03,
      'PP2DG04'=> $PP2DG04,
      'PP2DG05'=> $PP2DG05,
      'PP2DOP01' => $PP2DOP01,
      'PP2DOP02' => $PP2DOP02,
      'PP2DOP03' => $PP2DOP03,
      'PP2DOP04' => $PP2DOP04,
      'PP2DOP05' => $PP2DOP05,
      'PP2DOP06' => $PP2DOP06,
      'PP2DOP07' => $PP2DOP07,
      'PP2SUR01' => $PP2SUR01,
      'PP2SUR02' => $PP2SUR02,
      'PP2SUR03' => $PP2SUR03,
      'PP2SUR04' => $PP2SUR04,
      'PP2SUR05' => $PP2SUR05,
      'pp2' => $pp2,
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
      $em = $this->getDoctrine()->getManager();
      $em->persist($PerceptionInsert);
      $em->flush();
      $this->addFlash("success", "Vous avez bien inséré la perception");
    }
    $repository=$this->getDoctrine()->getManager()->getRepository('AdministrateurBundle:Variure');
    $repository2=$this->getDoctrine()->getManager()->getRepository('AdministrateurBundle:PassPartiel2');
      $listeVariures = $repository->findAll();
      $PP2DAF01 = $repository->PP2DAF01();
      $PP2DAF02 = $repository->PP2DAF02();
      $PP2DAF03 = $repository->PP2DAF03();
      $PP2DAF04 = $repository->PP2DAF04();
      $PP2DAF05 = $repository->PP2DAF05();
      $PP2DAF06 = $repository->PP2DAF06();
      $PP2DAF07 = $repository->PP2DAF07();
      $PP2DAF08 = $repository->PP2DAF08();
      $PP2DG01 = $repository->PP2DG01();
      $PP2DG02 = $repository->PP2DG02();
      $PP2DG03 = $repository->PP2DG03();
      $PP2DG04 = $repository->PP2DG04();
      $PP2DG05 = $repository->PP2DG05();
      $PP2DOP01 = $repository->PP2DOP01();
      $PP2DOP02 = $repository->PP2DOP02();
      $PP2DOP03 = $repository->PP2DOP03();
      $PP2DOP04 = $repository->PP2DOP04();
      $PP2DOP05 = $repository->PP2DOP05();
      $PP2DOP06 = $repository->PP2DOP06();
      $PP2DOP07 = $repository->PP2DOP07();
      $PP2SUR01 = $repository->PP2SUR01();
      $PP2SUR02 = $repository->PP2SUR02();
      $PP2SUR03 = $repository->PP2SUR03();
      $PP2SUR04 = $repository->PP2SUR04();
      $PP2SUR05 = $repository->PP2SUR05();
      $pp2 = $repository2->findAll();


    return $this->render('AdministrateurBundle:Perception:ajouterPerceptionNumClePercepteurConnu.html.twig', array(
      'variures' => $listeVariures,
      'form' => $form->createView(),
         'PP2DAF01' => $PP2DAF01,
      'PP2DAF02' => $PP2DAF02,
      'PP2DAF03' => $PP2DAF03,
      'PP2DAF04' => $PP2DAF04,
      'PP2DAF05' => $PP2DAF05,
      'PP2DAF06' => $PP2DAF06,
      'PP2DAF07' => $PP2DAF07,
      'PP2DAF08' => $PP2DAF08,
      'PP2DG01'=> $PP2DG01,
      'PP2DG02'=> $PP2DG02,
      'PP2DG03'=> $PP2DG03,
      'PP2DG04'=> $PP2DG04,
      'PP2DG05'=> $PP2DG05,
      'PP2DOP01' => $PP2DOP01,
      'PP2DOP02' => $PP2DOP02,
      'PP2DOP03' => $PP2DOP03,
      'PP2DOP04' => $PP2DOP04,
      'PP2DOP05' => $PP2DOP05,
      'PP2DOP06' => $PP2DOP06,
      'PP2DOP07' => $PP2DOP07,
      'PP2SUR01' => $PP2SUR01,
      'PP2SUR02' => $PP2SUR02,
      'PP2SUR03' => $PP2SUR03,
      'PP2SUR04' => $PP2SUR04,
      'PP2SUR05' => $PP2SUR05,
      'pp2' => $pp2,
    ));
  }
  /**
  * @Route("/perception/filtrerPerception", name="filtrerPerception")
  */
//  public function filtrerPerceptionAction(Request $req)
  //{
    //if($req->isXMLHttpRequest()) {
      //$options['nom']=$req->get('nom');
      //$options['organisation']=$req->get('organisation');
      //$options['numeroCle']=$req->get('numeroCle');
      //$options['Pass1']=$req->get('Pass1');
      //$options['Pass2']=$req->get('Pass2');
      //$options['Pass3']=$req->get('Pass3');
      //$repository=$this->getDoctrine()->getManager()->getRepository('AdministrateurBundle:Percepteur');
      //$base = $repository->rechercher($options);
      //return new JsonResponse(array('data'=>json_encode($base)));
    //}
    //return new Response("Erreur : Ce n'est pas une requete Ajax",400);
  //w}

  /**
  * @Route("/perception/listePerceptions", name="listePerceptions")
  */
  public function listePerceptionsActions()
  {
    $repository=$this->getDoctrine()->getManager()->getRepository('AdministrateurBundle:Perception');
    $listePerceptions = $repository->findAll();
    return $this->render('AdministrateurBundle:Perception:listePerceptions.html.twig', array(
      'listePerceptions' => $listePerceptions,
    ));
  }

}
