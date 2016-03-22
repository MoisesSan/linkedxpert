<?php

namespace nctech\usuariosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;

class DefaultController extends Controller
{
   /* public function indexAction()
    {
        return $this->render('usuariosBundle:Default:index.html.twig');
    }*/
    
    public function indexAction(Request $peticion){
		$sesion = $peticion->getSession();
		
		// obtener, si existe, el error producido en el ultimo intento de login
		if ($peticion->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
			$error = $peticion->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
		}else{
			$error = $sesion->get(SecurityContext::AUTHENTICATION_ERROR); 
			$sesion->remove(SecurityContext::AUTHENTICATION_ERROR);
		}
		return $this->render('usuariosBundle:Default:index.html.twig', array(
              'last_username' => $sesion->get(SecurityContext::LAST_USERNAME),
              'error'         => $error)); 
    }
    
}
