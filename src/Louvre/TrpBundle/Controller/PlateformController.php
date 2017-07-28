<?php

namespace Louvre\TrpBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class PlateformController extends Controller
{
    public function indexAction()
    {
        return $this->render('LouvreTrpBundle:Plateform:index.html.twig');
    }
}
