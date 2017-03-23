<?php

namespace Quantified\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class DefaultController
 * @package Quantified\CoreBundle\Controller
 */
class DefaultController extends Controller
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function soonAction()
    {
        return $this->render('CoreBundle:Default:soon.html.twig');
    }
}
