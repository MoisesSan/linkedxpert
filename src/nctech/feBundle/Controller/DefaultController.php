<?php

namespace nctech\feBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('feBundle:Default:index.html.twig');
    }
}
