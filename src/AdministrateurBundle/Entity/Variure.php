<?php

namespace AdministrateurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Variure
 *
 * @ORM\Table(name="variure")
 * @ORM\Entity(repositoryClass="AdministrateurBundle\Repository\VariureRepository")
 */
class Variure
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
     * @var string
     *
     * @ORM\Column(name="nomVariure", type="string", length=255)
     */
    private $nomVariure;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=255)
     */
    private $etat;

     /**
    *@ORM\ManyToOne(targetEntity="AdministrateurBundle\Entity\PassPartiel2", cascade={"persist"})
    */
     private $passPartiel2;

     /**
    *@ORM\ManyToOne(targetEntity="AdministrateurBundle\Entity\PassPartiel3", cascade={"persist"})
    */
     private $passPartiel3;
    
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
     * Set nomVariure
     *
     * @param string $nomVariure
     *
     * @return Variure
     */
    public function setNomVariure($nomVariure)
    {
        $this->nomVariure = $nomVariure;

        return $this;
    }

    /**
     * Get nomVariure
     *
     * @return string
     */
    public function getNomVariure()
    {
        return $this->nomVariure;
    }

    /**
     * Set etat
     *
     * @param string $etat
     *
     * @return Variure
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return string
     */
    public function getEtat()
    {
        return $this->etat;
    }
}

