<?php

namespace AdministrateurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class BdController extends Controller
{
	 /**
     * @Route("/bd/CreerVariure", name="CreerVariure")
     */
    public function CreerVariureAction()
    {
        return $this->render('AdministrateurBundle:BdController:creer_variure.html.twig', array(
            // ...
        ));
    }



    /**
     * @Route("/bd", name="bd")
     */
    public function BdAction()
    {
        return $this->render('AdministrateurBundle:BdController:bd.html.twig', array(
        ));
    }

}
