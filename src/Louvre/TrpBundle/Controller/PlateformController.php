<?php

namespace Louvre\TrpBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Louvre\TrpBundle\Model\TicketModel;
use Louvre\TrpBundle\Model\VisitorTicketModel;
use Louvre\TrpBundle\Form\TicketType;
use Louvre\TrpBundle\Form\Step2Type;
use Symfony\Component\HttpFoundation\Request;

class PlateformController extends Controller
{
    public function indexAction()
    {
        return $this->render('LouvreTrpBundle:Plateform:index.html.twig');
    }
	
	public function step1Action(Request $request)
	{
		$ticket = new TicketModel();
        $ticket->setTdate(new \DateTime());
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
	
	public function step2Action(Request $request)
	{
		$session = $request->getSession();
        $ticket = $request->getSession()->get('Ticket');
		$tticket = $request->getSession()->get('Ticket')->getTtype();
		$tdate = explode($request->getSession()->get('Ticket')->getTdate());
		if ($tticket=='true')&&($tdate[0]>=14){
				return $this->redirectToRoute('louvre_trp_step1');
			}
        if ($ticket==null) {
            return $this->redirectToRoute('louvre_trp_homepage');
        }
		$visitor = new VisitorTicketModel($ticket->getTnbrs());
		
		$form = $this->get('form.factory')->create(Step2Type::class, $visitor);
		if ($request->isMethod('POST')) {
            $form->handleRequest($request);

            if ($form->isValid()) {
                $data = $form->getData();
                $session->set('Step2', $data);
            }
			

            return $this->redirectToRoute('louvre_trp_step3');
        }
        return $this->render('LouvreTrpBundle:Plateform:step2.html.twig', array(
            'visitorTicket' => $visitor,
            'form' => $form->createView(),
		));
	}
	
	
}
