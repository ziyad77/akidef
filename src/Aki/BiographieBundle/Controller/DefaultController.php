<?php

namespace Aki\BiographieBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function BiographieAction()
    {
        return $this->render('BiographieBundle:Default:Biographie.html.twig');
    }
}
