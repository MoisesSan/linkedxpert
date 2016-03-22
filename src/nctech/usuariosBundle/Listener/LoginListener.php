<?php
namespace nctech\usuariosBundle\Listener;

use Symfony\Component\EventDispatcher\Event;
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\Routing\Router;
use Symfony\Component\HttpFoundation\RedirectResponse;

class LoginListener{
	
	private $contexto, $router, $usuario;
	
	public function __construct(SecurityContext $context, Router $router){
		$this->contexto=$context;
		$this->router=$router;		
	}
	
	public function onSecurityInteractiveLogin(InteractiveLoginEvent $event){
		$this->usuario=$event->getAuthenticationToken();
	}
			
	public function onKernelResponse(FilterResponseEvent $event){
		$liga=$this->router->generate('fe_homepage',array('usuario'=>$this->usuario));
		$event->setResponse(new RedirectResponse($liga));
		$event->stopPropagation();
	}
	
}