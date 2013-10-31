<?php

namespace Royuan\BootstrapAdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('RoyuanBootstrapAdminBundle:Default:index.html.twig', array('name' => $name));
    }
}
