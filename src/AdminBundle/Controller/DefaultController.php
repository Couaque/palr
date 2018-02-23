<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/panel", name="panel")
     */
    public function indexAction()
    {
        return $this->render('AdminBundle:Default:panel.html.twig');
    }
}
