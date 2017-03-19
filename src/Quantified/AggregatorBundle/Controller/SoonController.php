<?php

namespace Quantified\AggregatorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SoonController extends Controller
{
    public function soonAction()
    {
        return $this->render('AggregatorBundle:Soon:soon.html.twig');
    }
}
