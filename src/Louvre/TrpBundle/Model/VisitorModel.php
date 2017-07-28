<?php
	
namespace Louvre\TrpBundle\Model;

use Symfony\Component\Validator\Constraints as Assert;


class VisitorModel
{
    /**
     * @var \string
     * @Assert\Length(
     *     min=2,
     *     max=50,
     *     minMessage = "Votre nom doit comporter au moins {{ limit }} caractères",
     *     maxMessage = "Votre nom ne doit pas comporter plus de {{ limit }} caractères."
     * )
     */
    public $name;

    /**
     * @var \string
     */
    public $fName;

    /**
     * @var \string
     * * @Assert\Country()
     */
    public $pays;

    /**
     * @var \DateTime
     * @Assert\Date()
     * @Assert\LessThan(
     *     "today",
     *     message = "merci de vérifier la date de naissance"
     * )
     */
    public $bDate;

    /**
     * @var \integer
     */
    public $tarifreduit;

    /**
     * @var \string
     */
    public $rate;

    /**
     * @var \integer
     */
    public $codetarif;

    /**
     * @var \integer
     */
    public $prix;

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setFName($fName)
    {
        $this->fName = $fName;

        return $this;
    }

    public function getFName()
    {
        return $this->fName;
    }

    public function setPays($pays)
    {
        $this->pays = $pays;

        return $this;
    }

    public function getPays()
    {
        return $this->pays;
    }

    public function setBDate(\Datetime $bDate)
    {
        $this->bDate = $bDate;

        return $this;
    }

    public function getBDate()
    {
        return $this->bDate;
    }

    public function setTarifreduit($tarifreduit)
    {
        $this->tarifreduit = $tarifreduit;

        return $this;
    }

    public function getTarifreduit()
    {
        return $this->tarifreduit;
    }

    public function setTarif($tarif)
    {
        $this->tarif = $tarif;

        return $this;
    }

    public function getTarif()
    {
        return $this->tarif;
    }

    public function setCodeTarif($codetarif)
    {
        $this->codetarif = $codetarif;

        return $this;
    }

    public function getCodeTarif()
    {
        return $this->codetarif;
    }

    public function setRate($tarifreduit)
    {
        $this->tarifreduit = $tarifreduit;

        return $this;
    }

    public function getRate()
    {
        return $this->tarifreduit;
    }
}
