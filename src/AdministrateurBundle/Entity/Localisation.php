<?php

namespace AdministrateurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Localisation
 *
 * @ORM\Table(name="localisation")
 * @ORM\Entity(repositoryClass="AdministrateurBundle\Repository\LocalisationRepository")
 */
class Localisation
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
     * @ORM\Column(name="nomLocalisation", type="string", length=255)
     */
    private $nomLocalisation;

    /**
    *@ORM\OneToMany(targetEntity="AdministrateurBundle\Entity\Equipement", cascade={"persist"}, mappedBy="localisation")
    */
    private $Equipements;

    /**
    *@ORM\ManyToOne(targetEntity="batiment", cascade={"persist"}, inversedBy="Localisations")
    */
     private $batiment;


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
     * Set nomLocalisation
     *
     * @param string $nomLocalisation
     *
     * @return Localisation
     */
    public function setNomLocalisation($nomLocalisation)
    {
        $this->nomLocalisation = $nomLocalisation;

        return $this;
    }

    /**
     * Get nomLocalisation
     *
     * @return string
     */
    public function getNomLocalisation()
    {
        return $this->nomLocalisation;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Equipements = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add equipement
     *
     * @param \AdministrateurBundle\Entity\Equipement $equipement
     *
     * @return Localisation
     */
    public function addEquipement(\AdministrateurBundle\Entity\Equipement $equipement)
    {
        $this->Equipements[] = $equipement;

        return $this;
    }

    /**
     * Remove equipement
     *
     * @param \AdministrateurBundle\Entity\Equipement $equipement
     */
    public function removeEquipement(\AdministrateurBundle\Entity\Equipement $equipement)
    {
        $this->Equipements->removeElement($equipement);
    }

    /**
     * Get equipements
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEquipements()
    {
        return $this->Equipements;
    }

    /**
     * Set batiment
     *
     * @param \AdministrateurBundle\Entity\batiment $batiment
     *
     * @return Localisation
     */
    public function setBatiment(\AdministrateurBundle\Entity\batiment $batiment = null)
    {
        $this->batiment = $batiment;

        return $this;
    }

    /**
     * Get batiment
     *
     * @return \AdministrateurBundle\Entity\batiment
     */
    public function getBatiment()
    {
        return $this->batiment;
    }
}
