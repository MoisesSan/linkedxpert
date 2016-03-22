<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // usuarios_login
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'usuarios_login');
            }

            return array (  '_controller' => 'nctech\\usuariosBundle\\Controller\\DefaultController::indexAction',  '_route' => 'usuarios_login',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            // usuarios_login_check
            if ($pathinfo === '/login_check') {
                return array('_route' => 'usuarios_login_check');
            }

            // usuarios_logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'usuarios_logout');
            }

        }

        // be_homepage
        if (0 === strpos($pathinfo, '/be/hello') && preg_match('#^/be/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'be_homepage')), array (  '_controller' => 'nctech\\beBundle\\Controller\\DefaultController::indexAction',));
        }

        // fe_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'fe_homepage');
            }

            return array (  '_controller' => 'nctech\\feBundle\\Controller\\DefaultController::indexAction',  '_route' => 'fe_homepage',);
        }

        // home_login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'nctech\\usuariosBundle\\Controller\\DefaultController::indexAction',  '_route' => 'home_login',);
        }

        // _fe
        if ($pathinfo === '/fe') {
            return array (  '_controller' => 'nctech\\feBundle\\Controller\\DefaultController::indexAction',  '_route' => '_fe',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
