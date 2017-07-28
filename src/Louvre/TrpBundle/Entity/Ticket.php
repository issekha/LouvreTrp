<?php

namespace Louvre\TrpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ticket
 *
 * @ORM\Table(name="ticket")
 * @ORM\Entity(repositoryClass="Louvre\TrpBundle\Repository\TicketRepository")
 */
class Ticket
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="trate", type="integer")
     */
    private $trate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tdate", type="datetime")
     */
    private $tdate;

    /**
     * @var bool
     *
     * @ORM\Column(name="ttype", type="boolean")
     */
    private $ttype;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set trate
     *
     * @param integer $trate
     *
     * @return Ticket
     */
    public function setTrate($trate)
    {
        $this->trate = $trate;

        return $this;
    }

    /**
     * Get trate
     *
     * @return int
     */
    public function getTrate()
    {
        return $this->trate;
    }

    /**
     * Set tdate
     *
     * @param \DateTime $tdate
     *
     * @return Ticket
     */
    public function setTdate($tdate)
    {
        $this->tdate = $tdate;

        return $this;
    }

    /**
     * Get tdate
     *
     * @return \DateTime
     */
    public function getTdate()
    {
        return $this->tdate;
    }

    /**
     * Set ttype
     *
     * @param boolean $ttype
     *
     * @return Ticket
     */
    public function setTtype($ttype)
    {
        $this->ttype = $ttype;

        return $this;
    }

    /**
     * Get ttype
     *
     * @return bool
     */
    public function getTtype()
    {
        return $this->ttype;
    }
}

