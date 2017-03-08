<?php

namespace Quantified\AgregatorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AgregatorBundle:Default:index.html.twig');
    }
}
