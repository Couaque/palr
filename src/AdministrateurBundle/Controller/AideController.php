<?php

namespace AdministrateurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AideController extends Controller
{

  /**
   * @Route("/aide", name="aide")
   */
  public function aideAction()
  {
      return $this->render('AdministrateurBundle:Aide:aide.html.twig');
  }

}
