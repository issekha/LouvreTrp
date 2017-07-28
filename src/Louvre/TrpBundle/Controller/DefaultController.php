<?php

namespace Louvre\TrpBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('LouvreTrpBundle:Default:index.html.twig');
    }
}
