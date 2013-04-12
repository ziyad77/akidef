<?php

namespace Aki\DiscographieBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function DiscographieAction()
    {
        return $this->render('DiscographieBundle:Default:discographie.html.twig');
    }
}
