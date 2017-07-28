<?php

namespace Louvre\TrpBundle\Model;

use Louvre\TrpBundle\Model\VisitorModel;

class VisitorTicketModel
{
    /**
     * @var \string
     */
    public $visitor;

    //public function __construct(array $visitor)
    public function __construct($nbrVisitor)
    {
        //$this->visitor = $visitor;
        $tabVisitor = array();
        for($nbr=1; $nbr <= $nbrVisitor; $nbr++)
        {
            $tabVisitor[] = new VisitorModel();
        }
        $this->visitor = $tabVisitor;
    }

    public function addVisitor(ClientModel $client)
    {
        $this->visitor[] = $client;
    }

    public function removeVisitor(VisitorModel $visitor)
    {
        $this->visitor->removeElement($visitor);
    }

    public function getVisitor()
    {
        return $this->visitor;
    }
}
