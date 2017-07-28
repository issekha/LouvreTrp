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
	
	public function step1Action()
	{
		$ticket = new TicketModel();
        $ticket->setDate(new \DateTime());
        $form = $this->get('form.factory')->create(TicketType::class, $ticket);
        if ($request->isMethod('POST')) {
            $form->handleRequest($request);
            if ($form->isValid()) {
                $session = $request->getSession();
                $data = $form->getData();
                $session->set('Ticket', $data);
                return $this->redirectToRoute('louvre_trp_step2', array());
           }
        }
        return $this->render('LouvreTrpBundle:Plateform:step1.html.twig', array(
            'form' => $form->createView(),
        ));
	}
	
}
