<?php

namespace Quantified\AgregatorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SoonController extends Controller
{
    public function soonAction()
    {
        return $this->render('AgregatorBundle:Soon:soon.html.twig');
    }
}
