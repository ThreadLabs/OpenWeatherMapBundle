<?php

namespace ThreadLabs\OpenWeatherMapBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ThreadLabsOpenWeatherMapBundle:Default:index.html.twig');
    }
}
