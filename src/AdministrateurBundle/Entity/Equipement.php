<?php

namespace AdministrateurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Equipement
 *
 * @ORM\Table(name="equipement")
 * @ORM\Entity(repositoryClass="AdministrateurBundle\Repository\EquipementRepository")
 */
class Equipement
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
     * @ORM\Column(name="nomEquipement", type="string", length=255)
     */
    private $nomEquipement;

    /**
    *@ORM\ManyToOne(targetEntity="AdministrateurBundle\Entity\batiment", cascade={"persist"})
    */
    private $batiment;

    /**
    *@ORM\ManyToOne(targetEntity="AdministrateurBundle\Entity\OutilFermeture", cascade={"persist"}, inversedBy="Equipements")
    */
    private $outilFermeture;

    /**
    *@ORM\ManyToOne(targetEntity="Localisation", cascade={"persist"}, inversedBy="Equipements")
    */
     private $localisation;


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
     * Set nomEquipement
     *
     * @param string $nomEquipement
     *
     * @return Equipement
     */
    public function setNomEquipement($nomEquipement)
    {
        $this->nomEquipement = $nomEquipement;

        return $this;
    }

    /**
     * Get nomEquipement
     *
     * @return string
     */
    public function getNomEquipement()
    {
        return $this->nomEquipement;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Variures = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set batiment
     *
     * @param \AdministrateurBundle\Entity\batiment $batiment
     *
     * @return Equipement
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


    /**
     * Set outilFermeture
     *
     * @param \AdministrateurBundle\Entity\OutilFermeture $outilFermeture
     *
     * @return Equipement
     */
    public function setOutilFermeture(\AdministrateurBundle\Entity\OutilFermeture $outilFermeture = null)
    {
        $this->outilFermeture = $outilFermeture;

        return $this;
    }

    /**
     * Get outilFermeture
     *
     * @return \AdministrateurBundle\Entity\OutilFermeture
     */
    public function getOutilFermeture()
    {
        return $this->outilFermeture;
    }

    /**
     * Set localisation
     *
     * @param \AdministrateurBundle\Entity\Localisation $localisation
     *
     * @return Equipement
     */
    public function setLocalisation(\AdministrateurBundle\Entity\Localisation $localisation = null)
    {
        $this->localisation = $localisation;

        return $this;
    }

    /**
     * Get localisation
     *
     * @return \AdministrateurBundle\Entity\Localisation
     */
    public function getLocalisation()
    {
        return $this->localisation;
    }
}
