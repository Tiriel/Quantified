<?php

namespace Quantified\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class SecurityController extends Controller
{
    public function loginAction(Request $request)
    {
        $authUtils    = $this->get('security.authentication_utils');
        $error        = $authUtils->getLastAuthenticationError();
        $lastUsername = $authUtils->getLastUsername();

        return $this->render('CoreBundle:Security:login.html.twig', array(
            'error'        => $error,
            'lastUsername' => $lastUsername,
        ));
    }
}
