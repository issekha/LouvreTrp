<?php

namespace Louvre\TrpBundle\Model;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;
use Louvre\TrpBundle\Validator as AcmeAssert;


class TicketModel
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $tdate;

    /**
     * @var \boolean
     */
    private $ttype;
	
	/**
     * @var int
     */
    private $tnbrs;

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setTdate(\Datetime $tdate)
    {
        $this->tdate = $tdate;

        return $this;
    }

    public function getTdate()
    {
        return $this->tdate;
    }

    public function setTtype($ttype)
    {
        $this->ttype = $ttype;

        return $this;
    }

    public function getTtype()
    {
        return $this->ttype;
    }

    public function setTnbrs($tnbrs)
    {
        $this->tnbrs = $tnbrs;

        return $this;
    }

    public function getTnbrs()
    {
        return $this->tnbrs;
    }

}
