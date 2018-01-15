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
     * @ORM\Column(name="nomVariure", type="string", length=255, nullable=true)
     */
    private $nomVariure;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=255, nullable=true)
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

    /**
     * Set passPartiel2
     *
     * @param \AdministrateurBundle\Entity\PassPartiel2 $passPartiel2
     *
     * @return Variure
     */
    public function setPassPartiel2(\AdministrateurBundle\Entity\PassPartiel2 $passPartiel2 = null)
    {
        $this->passPartiel2 = $passPartiel2;

        return $this;
    }

    /**
     * Get passPartiel2
     *
     * @return \AdministrateurBundle\Entity\PassPartiel2
     */
    public function getPassPartiel2()
    {
        return $this->passPartiel2;
    }

    /**
     * Set passPartiel3
     *
     * @param \AdministrateurBundle\Entity\PassPartiel3 $passPartiel3
     *
     * @return Variure
     */
    public function setPassPartiel3(\AdministrateurBundle\Entity\PassPartiel3 $passPartiel3 = null)
    {
        $this->passPartiel3 = $passPartiel3;

        return $this;
    }

    /**
     * Get passPartiel3
     *
     * @return \AdministrateurBundle\Entity\PassPartiel3
     */
    public function getPassPartiel3()
    {
        return $this->passPartiel3;
    }
}
