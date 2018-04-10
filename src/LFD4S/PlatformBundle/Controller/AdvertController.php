<?php

// src/LFD4S/PlatformBundle/Controller/AdvertController.php

namespace LFD4S\PlatformBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\HttpFoundation\Request;

class AdvertController extends Controller
{
    public function indexAction()
    {
        return $this->render('LFD4SPlatformBundle:Advert:index.html.twig');
    }
    public function signAction()
    {
        return $this->render('LFD4SPlatformBundle:Advert:Sign.html.twig');
    }
    public function logAction()
    {
        return $this->render('LFD4SPlatformBundle:Advert:log.html.twig');
    }
    public function accountAction()
    {
        return $this->render('LFD4SPlatformBundle:Advert:account.html.twig');
    }
    public function growerAction()
    {
        return $this->render('LFD4SPlatformBundle:Advert:grower.html.twig');
    }
    public function cartAction()
    {
        return $this->render('LFD4SPlatformBundle:Advert:cart.html.twig');
    }
    public function adminAction()
    {
        return $this->render('LFD4SPlatformBundle:Advert:admin.html.twig');
    }
    public function firstAction()
    {
        return $this->render('LFD4SPlatformBundle:Advert:first.html.twig');
    }
    public function secondAction()
    {
        return $this->render('LFD4SPlatformBundle:Advert:second.html.twig');
    }
}

