<?php

namespace Aki\VideosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function VideosAction()
    {
        return $this->render('VideoBundle:Default:Videos.html.twig');
    }
}
