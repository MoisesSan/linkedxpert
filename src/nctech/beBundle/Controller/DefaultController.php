<?php

namespace nctech\beBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('beBundle:Default:index.html.twig', array('name' => $name));
    }
}
