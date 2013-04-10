<?php

namespace Aki\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller {

    public function indexAction() {
        return $this->render('MainBundle:Default:index.html.twig');
    }

    public function DiscographieAction() {
        return $this->render('DiscographieBundle:Default:Discographie.html.twig');
    }

}
