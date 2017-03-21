<?php

namespace Quantified\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function soonAction()
    {
        return $this->render('CoreBundle:Default:soon.html.twig');
    }
}
