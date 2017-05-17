<?php

namespace CompetenceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CompetenceBundle:Default:index.html.twig');
    }
}
