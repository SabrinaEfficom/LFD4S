<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'lfd4s_platform_first' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'LFD4S\\PlatformBundle\\Controller\\AdvertController::firstAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'lfd4s_platform_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'LFD4S\\PlatformBundle\\Controller\\AdvertController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/first',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'lfd4s_platform_sign' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'LFD4S\\PlatformBundle\\Controller\\AdvertController::signAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/signup',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'lfd4s_platform_log' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'LFD4S\\PlatformBundle\\Controller\\AdvertController::logAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/log',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'lfd4s_platform_acount' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'LFD4S\\PlatformBundle\\Controller\\AdvertController::accountAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/account',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'lfd4s_platform_grower' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'LFD4S\\PlatformBundle\\Controller\\AdvertController::growerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/grower',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'lfd4s_platform_cart' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'LFD4S\\PlatformBundle\\Controller\\AdvertController::cartAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/cart',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'lfd4s_platform_admin' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'LFD4S\\PlatformBundle\\Controller\\AdvertController::adminAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'lfd4s_platform_view' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'LFD4S\\PlatformBundle\\Controller\\AdvertController::viewAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/view',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'lfd4s_platform_second' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'LFD4S\\PlatformBundle\\Controller\\AdvertController::secondAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/second',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'LFD4S\\UserBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login_check' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'logout' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
