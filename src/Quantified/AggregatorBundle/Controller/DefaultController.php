<?php

namespace Quantified\AggregatorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AggregatorBundle:Default:index.html.twig');
    }
}
