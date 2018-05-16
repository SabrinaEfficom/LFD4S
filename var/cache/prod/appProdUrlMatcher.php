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

        // lfd4s_platform_first
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'lfd4s_platform_first');
            }

            return array (  '_controller' => 'LFD4S\\PlatformBundle\\Controller\\AdvertController::firstAction',  '_route' => 'lfd4s_platform_first',);
        }

        // lfd4s_platform_home
        if ($pathinfo === '/first') {
            return array (  '_controller' => 'LFD4S\\PlatformBundle\\Controller\\AdvertController::indexAction',  '_route' => 'lfd4s_platform_home',);
        }

        // lfd4s_platform_sign
        if ($pathinfo === '/signup') {
            return array (  '_controller' => 'LFD4S\\PlatformBundle\\Controller\\AdvertController::signAction',  '_route' => 'lfd4s_platform_sign',);
        }

        // lfd4s_platform_log
        if ($pathinfo === '/log') {
            return array (  '_controller' => 'LFD4S\\PlatformBundle\\Controller\\AdvertController::logAction',  '_route' => 'lfd4s_platform_log',);
        }

        // lfd4s_platform_acount
        if ($pathinfo === '/account') {
            return array (  '_controller' => 'LFD4S\\PlatformBundle\\Controller\\AdvertController::accountAction',  '_route' => 'lfd4s_platform_acount',);
        }

        // lfd4s_platform_grower
        if ($pathinfo === '/grower') {
            return array (  '_controller' => 'LFD4S\\PlatformBundle\\Controller\\AdvertController::growerAction',  '_route' => 'lfd4s_platform_grower',);
        }

        // lfd4s_platform_cart
        if ($pathinfo === '/cart') {
            return array (  '_controller' => 'LFD4S\\PlatformBundle\\Controller\\AdvertController::cartAction',  '_route' => 'lfd4s_platform_cart',);
        }

        // lfd4s_platform_admin
        if ($pathinfo === '/admin') {
            return array (  '_controller' => 'LFD4S\\PlatformBundle\\Controller\\AdvertController::adminAction',  '_route' => 'lfd4s_platform_admin',);
        }

        // lfd4s_platform_view
        if ($pathinfo === '/view') {
            return array (  '_controller' => 'LFD4S\\PlatformBundle\\Controller\\AdvertController::viewAction',  '_route' => 'lfd4s_platform_view',);
        }

        // lfd4s_platform_second
        if ($pathinfo === '/second') {
            return array (  '_controller' => 'LFD4S\\PlatformBundle\\Controller\\AdvertController::secondAction',  '_route' => 'lfd4s_platform_second',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'LFD4S\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
                }

                // login_check
                if ($pathinfo === '/login_check') {
                    return array('_route' => 'login_check');
                }

            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
