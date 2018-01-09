<?php

namespace AdministrateurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class InventaireController extends Controller
{

  /**
   * @Route("/Inventaire", name="Inventaire")
   */
  public function InventaireAction()
  {
      return $this->render('AdministrateurBundle:Inventaire:Inventaire.html.twig');
  }

}
