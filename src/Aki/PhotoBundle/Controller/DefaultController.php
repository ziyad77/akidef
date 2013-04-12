<?php

namespace Aki\PhotoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function PhotosAction()
    {
        return $this->render('PhotoBundle:Default:Photos.html.twig');
    }
}
