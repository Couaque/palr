<?php

namespace AdministrateurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AdministrateurBundle\Entity\Perception as Perception;
use AdministrateurBundle\Form\PerceptionType;
use AdministrateurBundle\Form\PerceptionType2;
use AdministrateurBundle\Form\ModifierPerceptionType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\JsonResponse;
use \PDO;


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
      if($perception->getTypePerception() == "Permanente"){
        $perception->setDateFin(null);
      }
      $PerceptionInsert = $form->getData();
      $em = $this->getDoctrine()->getManager();
      $em->persist($PerceptionInsert);
      $em->flush();
      $this->addFlash("success", "Vous avez bien modifié la Perception");
    }
/*    $testPass= array(
      'passPartiel2' => '$form.passPartiel2',
      'passPartiel3' => '$form.passPartiel3'
    );
    $this->get('acme.js_vars')->chartData = $testPass;*/
    return $this->render('AdministrateurBundle:Perception:modifierPerception.html.twig', array(
      'form' => $form->createView(),
      'perception' => $perception
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
  * @Route("/perception/ajouterPerception/numCle/Choix", name="numCle")
  */
  public function ajouterPerceptionNumCleChoixAction()
  {
    return $this->render('AdministrateurBundle:Perception:ajouterPerceptionNumCleChoix.html.twig');
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
    if($perception->getTypePerception() == "Permanente"){
      $perception->setDateFin(null);
    }
    $perception->setPassPartiel1(null);
    $perception->setPassPartiel3(null);
    $perception->setPassPartiel2(null);

    $repository=$this->getDoctrine()->getManager()->getRepository('AdministrateurBundle:Equipement');
    $listeEquipements = $repository->findAll();
    $repository2=$this->getDoctrine()->getManager()->getRepository('AdministrateurBundle:Variure');
    $variures = $repository2->findAll();
    $repository1=$this->getDoctrine()->getManager()->getRepository('AdministrateurBundle:PassPartiel1');
    $repository3=$this->getDoctrine()->getManager()->getRepository('AdministrateurBundle:PassPartiel2');
    $repository4=$this->getDoctrine()->getManager()->getRepository('AdministrateurBundle:PassPartiel3');
    $pp1 = $repository1->findAll();
    $pp2 = $repository3->findAll();
    $pp3 = $repository4->findAll();
    $repository5=$this->getDoctrine()->getManager()->getRepository('AdministrateurBundle:batiment');
    $repository6=$this->getDoctrine()->getManager()->getRepository('AdministrateurBundle:Localisation');
    $batiments = $repository5->findAll();
    $localisations = $repository6->findAll();



    $form = $this->createForm(PerceptionType::class, $perception);


    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
      $PerceptionInsert = $form->getData();
      if($perception->getDateDebut() > $perception->getDateFin()){
        $perception->setDateFin(null);
      }
      if($perception->getPercepteur()->getTelephone()==null){
          $perception->getPercepteur()->setTelephone("Telephone non renseigné");
      }
      if($perception->getPercepteur()->getEmail()== null){
          $perception->getPercepteur()->setEmail("Email non renseigné");
      }
      $perception->setEtatPerception("enCours");
      $perception->setChoixPerception("Cle");
      $em = $this->getDoctrine()->getManager();
      $em->persist($PerceptionInsert);
      $em->flush();
      $this->addFlash("success", "Vous avez bien inséré la perception");

      $perception = new Perception();
      $form = $this->createForm(PerceptionType::class, $perception);
      return $this->render('AdministrateurBundle:Perception:ajouterPerceptionNumPorteNouveauPercepteur.html.twig', array(
        'equipements' => $listeEquipements,
        'variures' => $variures,
        'pp1' => $pp1,
        'pp2' => $pp2,
        'pp3' => $pp3,
        'batiments' => $batiments,
        'localisations' => $localisations,
        'form' => $form->createView(),
      ));
    }


    return $this->render('AdministrateurBundle:Perception:ajouterPerceptionNumPorteNouveauPercepteur.html.twig', array(
      'equipements' => $listeEquipements,
      'variures' => $variures,
      'pp1' => $pp1,
      'pp2' => $pp2,
      'pp3' => $pp3,
      'batiments' => $batiments,
      'localisations' => $localisations,
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




    $form = $this->createForm(PerceptionType2::class, $perception);


    $form->handleRequest($request);
    $repository=$this->getDoctrine()->getManager()->getRepository('AdministrateurBundle:Equipement');
    $listeEquipements = $repository->findAll();
    $repository1=$this->getDoctrine()->getManager()->getRepository('AdministrateurBundle:PassPartiel1');
    $repository2=$this->getDoctrine()->getManager()->getRepository('AdministrateurBundle:PassPartiel2');
    $repository3=$this->getDoctrine()->getManager()->getRepository('AdministrateurBundle:PassPartiel3');
    $repository4=$this->getDoctrine()->getManager()->getRepository('AdministrateurBundle:Percepteur');
    $repository5=$this->getDoctrine()->getManager()->getRepository('AdministrateurBundle:Variure');
    $repository6=$this->getDoctrine()->getManager()->getRepository('AdministrateurBundle:batiment');
    $repository7=$this->getDoctrine()->getManager()->getRepository('AdministrateurBundle:Localisation');
    $batiments = $repository6->findAll();
    $localisations = $repository7->findAll();
    $variures = $repository5->findAll();
    $pp1 = $repository1->findAll();
    $pp2 = $repository2->findAll();
    $pp3 = $repository3->findAll();
    $percepteurs = $repository4->findAll();



    $perceptions = array();
    foreach ($percepteurs as $p) {
        $perceptions[] = $p->getPerceptions();
    }

    if ($form->isSubmitted() && $form->isValid()) {
      $PerceptionInsert = $form->getData();
      if($perception->getTypePerception() == "Permanente"){
        $perception->setDateFin(null);
      }
      $perception->setEtatPerception("enCours");
      $perception->setChoixPerception("Cle");
      $em = $this->getDoctrine()->getManager();
      $em->persist($PerceptionInsert);
      $em->flush();
      $this->addFlash("success", "Vous avez bien inséré la perception");
      $perception = new Perception();
      $form = $this->createForm(PerceptionType2::class, $perception);
      return $this->render('AdministrateurBundle:Perception:ajouterPerceptionNumPortePercepteurConnu.html.twig', array(
        'equipements' => $listeEquipements,
        'form' => $form->createView(),
        'perceptions' => $perceptions,
        'percepteurs' => $percepteurs,
        'variures' => $variures,
        'batiments'=> $batiments,
        'localisations' => $localisations,
        'pp1' => $pp1,
        'pp2' => $pp2,
        'pp3' => $pp3,

      ));
    }

    return $this->render('AdministrateurBundle:Perception:ajouterPerceptionNumPortePercepteurConnu.html.twig', array(
      'equipements' => $listeEquipements,
      'form' => $form->createView(),
      'perceptions' => $perceptions,
      'percepteurs' => $percepteurs,
      'variures' => $variures,
      'batiments'=> $batiments,
      'localisations' => $localisations,
      'pp1' => $pp1,
      'pp2' => $pp2,
      'pp3' => $pp3,

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
    $repository1=$this->getDoctrine()->getManager()->getRepository('AdministrateurBundle:PassPartiel1');
    $repository2=$this->getDoctrine()->getManager()->getRepository('AdministrateurBundle:PassPartiel2');
    $repository3=$this->getDoctrine()->getManager()->getRepository('AdministrateurBundle:PassPartiel3');
    $repository4=$this->getDoctrine()->getManager()->getRepository('AdministrateurBundle:Percepteur');
    $repository5=$this->getDoctrine()->getManager()->getRepository('AdministrateurBundle:Variure');
    $repository6=$this->getDoctrine()->getManager()->getRepository('AdministrateurBundle:OutilFermeture');
    $OutilFermeture = $repository6->findAll();
    $equipements = array();
    foreach ($OutilFermeture as $of) {
      $equipements[] = $of->getEquipements();
    }
    $pp1 = $repository1->findAll();
    $pp2 = $repository2->findAll();
    $pp3 = $repository3->findAll();
    $variures = $repository5->findAll();
    $percepteurs = $repository4->findAll();


    $form = $this->createForm(PerceptionType::class, $perception);


    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
      $PerceptionInsert = $form->getData();
      if($perception->getPercepteur()->getEmail()== null){
          $perception->getPercepteur()->setEmail("Email non renseigné");
      }
      if($perception->getPercepteur()->getTelephone()==null){
          $perception->getPercepteur()->setTelephone("Telephone non renseigné");
      }
      $perception->setEtatPerception("enCours");
      $em = $this->getDoctrine()->getManager();
      $em->persist($PerceptionInsert);
      $em->flush();
      $this->addFlash("success", "Vous avez bien inséré la perception");

      $perception = new Perception();
      $form = $this->createForm(PerceptionType::class, $perception);

      return $this->render('AdministrateurBundle:Perception:ajouterPerceptionNumCleNouveauPercepteur.html.twig', array(
        'form' => $form->createView(),
        'pp1' => $pp1,
        'pp2' => $pp2,
        'pp3' => $pp3,
          'percepteurs' => $percepteurs,
          'variures' => $variures,
          'equipements' => $equipements,

      ));

    }



    return $this->render('AdministrateurBundle:Perception:ajouterPerceptionNumCleNouveauPercepteur.html.twig', array(
      'form' => $form->createView(),
      'pp1' => $pp1,
      'pp2' => $pp2,
      'pp3' => $pp3,
        'percepteurs' => $percepteurs,
        'variures' => $variures,
        'equipements' => $equipements,

    ));
  }


  /**
  * @Route("/perception/ajouterPerception/numCle/PercepteurConnu", name="numClePercepteurConnu")
  */
  public function ajouterPerceptionNumClePercepteurConnuAction(Request $request)
  {
    $perception = new Perception();

    $perception->setPassPartiel1(null);
    $perception->setPassPartiel3(null);
    $perception->setPassPartiel2(null);
    $repository1=$this->getDoctrine()->getManager()->getRepository('AdministrateurBundle:PassPartiel1');
    $repository2=$this->getDoctrine()->getManager()->getRepository('AdministrateurBundle:PassPartiel2');
    $repository3=$this->getDoctrine()->getManager()->getRepository('AdministrateurBundle:PassPartiel3');
    $repository4=$this->getDoctrine()->getManager()->getRepository('AdministrateurBundle:Percepteur');
    $repository5=$this->getDoctrine()->getManager()->getRepository('AdministrateurBundle:Variure');
    $repository6=$this->getDoctrine()->getManager()->getRepository('AdministrateurBundle:OutilFermeture');

    $pp1 = $repository1->findAll();
    $pp2 = $repository2->findAll();
    $pp3 = $repository3->findAll();
    $variures = $repository5->findAll();

    $percepteurs = $repository4->findAll();
    $OutilFermeture = $repository6->findAll();
    $perceptions = array();
    $equipements = array();
    foreach ($percepteurs as $p) {
      $perceptions[] = $p->getPerceptions();
    }
    foreach ($OutilFermeture as $of) {
      $equipements[] = $of->getEquipements();
   }


    $form = $this->createForm(PerceptionType2::class, $perception);


    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
      $PerceptionInsert = $form->getData();
      $perception->setEtatPerception("enCours");
      $em = $this->getDoctrine()->getManager();
      $em->persist($PerceptionInsert);
      $em->flush();
      $this->addFlash("success", "Vous avez bien inséré la perception");

      $perception = new Perception();
      $form = $this->createForm(PerceptionType2::class, $perception);
      return $this->render('AdministrateurBundle:Perception:ajouterPerceptionNumClePercepteurConnu.html.twig', array(
        'form' => $form->createView(),
        'perceptions' => $perceptions,
        'equipements' => $equipements,
        'percepteurs' => $percepteurs,
        'variures' => $variures,
        'pp1' => $pp1,
        'pp2' => $pp2,
        'pp3' => $pp3,
      ));
    }

    return $this->render('AdministrateurBundle:Perception:ajouterPerceptionNumClePercepteurConnu.html.twig', array(
      'form' => $form->createView(),
      'perceptions' => $perceptions,
      'equipements' => $equipements,
      'percepteurs' => $percepteurs,
      'variures' => $variures,
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
      $options['etat']=$req->get('etat');
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

  /**
  * @Route("/perception/archiveePerception/{id}", name="archiveePerception")
  */
  public function archiveePerceptionAction($id) {
    try
    {
      $bdd = new PDO('mysql:host=localhost;dbname=PALR;charset=utf8', 'root', 'mysql');
    }
    catch(Exception $e)
    {
      die('Erreur : '.$e->getMessage());
    }
    $req = $bdd->prepare('UPDATE perception SET etatPerception = :etat WHERE id = :id');
    $req->execute(array(
      'etat' => "archivee",
      'id' => $id
    ));
    return $this->redirectToRoute('perception');
  }

  /**
  * @Route("/perception/imprimer", name="imprimerPerception")
  */
  public function imprimerPerceptionAction($listeid){
    $listePerceptions = array();
    foreach($listeid as $id){
      $repo = $this->getDoctrine()->getManager()->getRepository('AdministrateurBundle:Perception');
      $listePerceptions[] = $repo->findById($id);
    }
    //var_dump($listePerceptions);
    $pdf = new \FPDF();
    //Initialisation d'une première page
    $pdf->AddPage();
    $pdf->SetFont('Arial','',15);
    $pdf->SetTextColor(0, 0, 0);
    //Ajout de l'icône
    //Ajout du titre




    $pdf->SetY(20);
    $x = $pdf->GetX();
    $y = $pdf->GetY();
    $tab = array(37, 113, 37);
    $pdf->SetFont('Arial','',15);
    $pdf->Cell($tab[0],30,'',1,0,$pdf->Image('img/Logo_PALR.jpg',12,23,32));
    $pdf->SetFont('Arial','B',22);
    foreach($listePerceptions as $liste){
      foreach($liste as $perc){
        $pdf->Multicell($tab[1],15,'DEMANDE DE PERCEPTION ' . strtoupper($perc->getTypePerception()) . ' D\'UNE CLE',1,'C',false);
      }
    }
    $pdf->SetFont('Arial','',7);
    $pdf->SetXY($x + 150, $y);

    foreach($listePerceptions as $liste){
    foreach($liste as $perc){
      //Affichage du pass donné
      if($perc->getVariure()!=null){
        if($perc->getVariure()->getPassPartiel2()!=null){
          $pdf->Multicell($tab[2],7.5,utf8_decode("Cadre réservé SAP \n N° de la clé : ". $perc->getVariure()->getNomVariure() . "\n Pass de rattachement : ". $perc->getVariure()->getPassPartiel2()->getNomPass2()),1,'C',false);
        }else if ($perc->getVariure()->getPassPartiel3()!=null){
          $pdf->Multicell($tab[2],7.5,utf8_decode("Cadre réservé SAP \n N° de la clé : ". $perc->getVariure()->getNomVariure() . "\n Pass de rattachement : ". $perc->getVariure()->getPassPartiel3()->getNomPass3()),1,'C',false);
        }
      }
      elseif ($perc->getPassPartiel3()!=null)
      $pdf->Multicell($tab[2],10,utf8_decode("Cadre réservé SAP \n N° du pass : \n". $perc->getPassPartiel3()->getNomPass3()),1,'C',false);
      elseif ($perc->getPassPartiel2()!=null)
      $pdf->Multicell($tab[2],10,utf8_decode("Cadre réservé SAP \n N° du pass : \n". $perc->getPassPartiel2()->getNomPass2()),1,'C',false);
      elseif ($perc->getPassPartiel1()!=null)
      $pdf->Multicell($tab[2],10,utf8_decode("Cadre réservé SAP \n N° du pass : \n". $perc->getPassPartiel1()->getNomPass1()),1,'C',false);
    }
  }





  //Descriptif des perceptions
  $pdf->SetY(60);

  $tab2 = array(187, 93.5, 93.5, 93.5, 93.5, 187, 93.5, 93.5);
  $pdf->SetFont('Arial','IB',13);
  $pdf->SetFillColor(192, 192, 192);
  $pdf->Cell($tab2[0],7,utf8_decode("1-PARTIE RESERVEE AU DEMANDEUR"),1,0,'C',1);
  $pdf->SetFont('Arial','',10);
  $pdf->Ln();
  $x = $pdf->GetX();
  $y = $pdf->GetY();


  $repository=$this->getDoctrine()->getManager()->getRepository('AdministrateurBundle:Equipement');
  $equipements = $repository->findAll();
  $batimentscle = array();
  foreach($listePerceptions as $liste){
    foreach($liste as $perc){
      foreach ($equipements as $id=>$eq) {
        if($perc->getVariure()!=null){
          if($perc->getVariure()->getOutilFermeture() == $eq->getOutilFermeture()){
            $batimentscle[] = $eq->getBatiment()->getNomBat();
          }
        }
      }
      if($perc->getPercepteur()->getOrganisation() == "PALR"){
          $pdf->Cell($tab2[1],10,utf8_decode("Service demandeur : " . $perc->getPercepteur()->getService()->getNomServicePALR()),1,0,'');
      }else{
          $pdf->Cell($tab2[1],10,utf8_decode("Service demandeur : " . $perc->getPercepteur()->getOrganisation()),1,0,'');
      }

      if($perc->getDateFin() !=null){
      $pdf->Multicell($tab2[2],10,utf8_decode("Date de début de la perception : " . $perc->getDateDebut()->format('d / m / Y') . "\nDate de fin de la perception : " . $perc->getDateFin()->format('d / m / Y')),1,'',false);
      $pdf->SetXY($x, $y + 10);
      if($perc->getVariure()!=null){
        $pdf->Cell($tab2[3],10,utf8_decode(' Batiment concerné : ' . $batimentscle[0]),1,0,'');
      }
      if($perc->getPassPartiel2()!=null || $perc->getPassPartiel3() !=null){
        $pdf->Cell($tab2[5],10,utf8_decode(' Batiment concerné : '),1,0,'');
      }
    }else{
      $pdf->Multicell($tab2[2],10,utf8_decode("Date de la demande : " . $perc->getDateDebut()->format('d / m / Y')),1,'',false);

      if($perc->getVariure()!=null){
        $pdf->Cell($tab2[5],10,utf8_decode(' Batiment concerné : ' . $batimentscle[0]),1,0,'');
      }
      if($perc->getPassPartiel2()!=null || $perc->getPassPartiel3() !=null){
        $pdf->Cell($tab2[5],10,utf8_decode(' Batiment concerné : '),1,0,'');
      }
      $pdf->SetXY($x, $y - 0.05);
      $pdf->Ln();
    }
    $pdf->Ln();
    if($perc->getMotivationDemande()!=null){
      $pdf->Multicell($tab2[5],7,utf8_decode("Motivation de la demande : \n" . $perc->getMotivationDemande()),1,'',false);
    }else {
      $pdf->Multicell($tab2[5],7,utf8_decode("Motivation de la demande : Aucune donnée renseignée"),1,'',false);
    }
      $pdf->Cell($tab2[6],10,utf8_decode("Nom du demandeur : " . $perc->getPercepteur()->getNomPercepteur() . " " . $perc->getPercepteur()->getPrenomPercepteur() ),1,0,'');
  }
  }




    /*$repository=$this->getDoctrine()->getManager()->getRepository('AdministrateurBundle:Equipement');
    $equipements = $repository->findAll();
    $repository1=$this->getDoctrine()->getManager()->getRepository('AdministrateurBundle:Variure');
    $variures = $repository1->findAll();
    $batimentscle = array();
    $batimentspass = array();
    foreach($listePerceptions as $liste){
      foreach($liste as $perc){
        foreach ($equipements as $id=>$eq) {
          foreach ($variures as $var) {
            if($var->getPassPartiel2()!=null && $perc->getPassPartiel2()!=null){
              if($var->getPassPartiel2()->getNomPass2() == $perc->getPassPartiel2()->getNomPass2()){
                if($var->getOutilFermeture() == $eq->getOutilFermeture()){
                  $batimentspass[] = $eq->getBatiment()->getNomBat();
                }
              }
            }
          }
          if($perc->getVariure()!=null){
            if($perc->getVariure()->getOutilFermeture() == $eq->getOutilFermeture()){
              $batimentscle[] = $eq->getBatiment()->getNomBat();
            }
          }
        }
      }
    }
    if($perc->getVariure()!=null){
      $pdf->Cell($tab2[3],10,utf8_decode(' Batiment concerné : ' . $batimentscle[0]),1,0,'');
    }
    if($perc->getPassPartiel2()!=null){
      */

    //}
    //$pdf->Cell($tab2[3],10,utf8_decode("Bâtiment concerné :"),1,0,'');
    $pdf->Cell($tab2[7],10,utf8_decode("Visa du demandeur :"),1,0,'');


    $pdf->SetY(135);

    $x = $pdf->GetX();
    $y = $pdf->GetY();
    $tab3 = array(187, 15, 78.5, 15, 78.5, 78.5, 78.5);
    $pdf->SetFont('Arial','IB',13);
    $pdf->Cell($tab3[0],7,utf8_decode("2-PERCEPTION PAR LE SALARIE"),1,0,'C',1);
    $pdf->SetFont('Arial','',10);
    $pdf->Ln();
    $pdf->SetFont('Arial','B',10);
    $pdf->SetFillColor(192, 192, 192);
    $pdf->Multicell($tab3[1],13.35,utf8_decode("Le percepteur "),1,'C',1);
    $pdf->SetFont('Arial','',10);
    $pdf->SetXY($x + 15, $y+7);
    foreach($listePerceptions as $liste){
      foreach($liste as $perc){
        $pdf->Cell($tab3[2],20,utf8_decode("Nom : " . $perc->getPercepteur()->getNomPercepteur() . " " . $perc->getPercepteur()->getPrenomPercepteur()),1,0,'');
        $pdf->SetFont('Arial','B',10);
        $pdf->SetFillColor(192, 192, 192);
        $pdf->Multicell($tab3[3],13.35,utf8_decode("            Le SAP "),1,'C',1);
        $pdf->SetXY($x + 15, $y+27);
        $pdf->SetFont('Arial','',10);
        $pdf->Cell($tab3[4],20,utf8_decode("Date et visa : " . $perc->getDateDebut()->format('d / m / Y')),1,0,'');
      }
    }




    $pdf->SetXY($x + 108.5, $y+7);
    $pdf->Cell($tab3[5],20,utf8_decode("Nom :"),1,0,'');
    $pdf->SetXY($x + 108.5, $y+27);
    $pdf->Cell($tab3[5],20,utf8_decode("Date et visa :"),1,0,'');

    $pdf->SetY(190);
    $x = $pdf->GetX();
    $y = $pdf->GetY();
    $pdf->SetFont('Arial','IB',13);
    $pdf->Cell($tab3[0],7,utf8_decode("3-RESTITUTION AU SAP"),1,0,'C',1);
    $pdf->SetFont('Arial','',10);
    $pdf->Ln();
    $pdf->SetFont('Arial','B',10);
    $pdf->Multicell($tab3[1],13.35,utf8_decode("Le percepteur "),1,'C',1);
    $pdf->SetXY($x + 15, $y+7);
    $pdf->SetFont('Arial','',10);
    foreach($listePerceptions as $liste){
      foreach($liste as $perc){
        $pdf->Cell($tab3[2],20,utf8_decode("Nom : " . $perc->getPercepteur()->getNomPercepteur() . " " . $perc->getPercepteur()->getPrenomPercepteur()),1,0,'');
        $pdf->SetFont('Arial','B',10);
        $pdf->Multicell($tab3[3],13.35,utf8_decode("            Le SAP "),1,'C',1);
        $pdf->SetFont('Arial','',10);
        $pdf->SetXY($x + 15, $y+27);
        if($perc->getDateFin()!=null){
          $pdf->Cell($tab3[4],20,utf8_decode("Date et visa : " . $perc->getDateFin()->format('d / m / Y')),1,0,'');
          $pdf->SetXY($x + 108.5, $y+7);
        }else {
          $pdf->Cell($tab3[4],20,utf8_decode("Date et visa : Date de restitution non renseignée"),1,0,'');
          $pdf->SetXY($x + 108.5, $y+7);
        }
      }
    }

    $pdf->Cell($tab3[5],20,utf8_decode("Nom :"),1,0,'');
    $pdf->SetXY($x + 108.5, $y+27);
    $pdf->Cell($tab3[5],20,utf8_decode("Date et visa :"),1,0,'');




    /*
    $pdf->SetFillColor(183, 183, 183);
    $pdf->SetFont('Arial','',11);

    if(empty($listePerceptions) && !isset($listePerceptions)){
      for($count = 0; $count<20; $count++)
      {
        $pdf->Cell($w[0],6,"test",'LR', 0, 'C', $fill);
        $pdf->Cell($w[1],6,"test",'LR', 0, 'C', $fill);
        $pdf->Cell($w[2],6," / / ",'LR', 0, 'C', $fill);
        $pdf->Cell($w[3],6," / / ",'LR', 0, 'C', $fill);
        $pdf->Cell($w[4],6," / / ",'LR', 0, 'C', $fill);
        $pdf->Ln();
        $fill = !$fill;
      }
    }else{
      $fill = false;
      foreach($listePerceptions as $liste){
      foreach($liste as $perc){
        //Affichage du pass donné
        if($perc->getVariure()!=null)
        $pdf->Cell($w[0],6,$perc->getVariure()->getNomVariure(),'LR' ,0, 'C', $fill);
        elseif ($perc->getPassPartiel3()!=null)
        $pdf->Cell($w[0],6,$perc->getPassPartiel3()->getNomPass3(),'LR' ,0, 'C', $fill);
        elseif ($perc->getPassPartiel2()!=null)
        $pdf->Cell($w[0],6,$perc->getPassPartiel2()->getNomPass2(),'LR' ,0, 'C', $fill);
        elseif ($perc->getPassPartiel1()!=null)
        $pdf->Cell($w[0],6,$perc->getPassPartiel1()->getNomPass1(),'LR' ,0, 'C', $fill);
        else
        $pdf->Cell($w[0],6,'NULL','LR' ,0, 'C', $fill);

        //Gestion de la date de début
        $pdf->Cell($w[1],6,"test",'LR' ,0, 'C', $fill);
        if($perc->getDateDebut()!=null)
        //var_dump($perc->getDateDebut()->format('Y-m-d H:i:s'));
        $pdf->Cell($w[2],6,$perc->getDateDebut()->format('Y / m / d'),'LR' ,0, 'C', $fill);
        else
        $pdf->Cell($w[2],6,'XXX','LR' ,0, 'C', $fill);

        //Gestion de la date de fin
        if($perc->getDateFin()!=null)
        //var_dump($w[2]);
        $pdf->Cell($w[2],6,$perc->getDateFin()->format('Y / m / d'),'LR' ,0, 'C', $fill);
        else
        $pdf->Cell($w[2],6,'X/X/X','LR' ,0, 'C', $fill);

        //On ajoute un champ pour noter la date réelle de rendu
        $pdf->Cell($w[4],6,"           /          /           ",'LR' , 0, 'C', $fill);
        $pdf->Ln();
        $fill = !$fill;
      }
    }
    }
    $pdf->Cell(array_sum($w),0,'','T');

    $pdf->SetY(185);
    $pdf->Multicell(300, 8, utf8_decode('Imprimé le : ' . date("d / m / y")), '', 'C', false);

    // Carré de signature
    $pdf->SetFont('Arial','',11);
    $pdf->SetY(165);
    $pdf->Multicell(60, 8, utf8_decode("Signature :"), '', 'C', false);
    $pdf->SetY(175);
    $w = array(60);
    $pdf->Cell($w[0],30,utf8_decode("           "),1,0,'C');

    */
    // Footer du PDF
    $pdf->SetY(255);
    //Disclaimer
    $pdf->SetFont('Arial','I',11);
    $pdf->Multicell(0,4,utf8_decode("(1): Ce document ne doit être établi que pour un seul N° de porte ou de Passe Partiel"), '', 'I', false);

    return new Response($pdf->Output(), 200, array('Content-Type' => 'application/pdf'));
  }

  /**
  * @Route("/perception/imprimer/{id}", name="imprimerUnePerception")
  */
  public function imprimerUnePerceptionAction($id){
    return $this->imprimerPerceptionAction(array($id));
  }
}
