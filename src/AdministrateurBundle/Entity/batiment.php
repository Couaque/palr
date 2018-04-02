<?php

namespace AdministrateurBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * batiment
 *
 * @ORM\Table(name="batiment")
 * @ORM\Entity(repositoryClass="AdministrateurBundle\Repository\batimentRepository")
 */
class batiment
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
     * @ORM\Column(name="codeBat", type="string", length=255)
     */
    private $codeBat;

    /**
     * @var string
     *
     * @ORM\Column(name="nomBat", type="string", length=255)
     */
    private $nomBat;



    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255, nullable=true)
     */
    private $adresse;



    /**
    *@ORM\ManyToMany(targetEntity="AdministrateurBundle\Entity\ServicePALR", cascade={"persist"})
    */
    private $servicePALR;


    /**
    *@ORM\OneToMany(targetEntity="AdministrateurBundle\Entity\Localisation", cascade={"persist"}, mappedBy="batiment")
    */
    private $Localisations;


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
     * Set nomBat
     *
     * @param string $nomBat
     *
     * @return batiment
     */
    public function setNomBat($nomBat)
    {
        $this->nomBat = $nomBat;

        return $this;
    }

    /**
     * Get nomBat
     *
     * @return string
     */
    public function getNomBat()
    {
        return $this->nomBat;
    }

    /**
     * Add organisation
     *
     * @param \AdministrateurBundle\Entity\organisation $organisations
     *
     * @return batiment
     */
    public function addOrganisation(\AdministrateurBundle\Entity\ServicePALR $servicePALR)
    {
        $this->servicePALR[] = $servicePALR;

        return $this;
    }

    /**
     * Remove organisation
     *
     * @param \AdministrateurBundle\Entity\organisation $organisation
     */
    public function removeOrganisation(\AdministrateurBundle\Entity\ServicePALR $servicePALR)
    {
        $this->servicePALR->removeElement($servicePALR);
    }

    /**
     * Get organisations
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getOrganisations()
    {
        return $this->servicePALR;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->servicePALR = new \Doctrine\Common\Collections\ArrayCollection();
        $this->Localisations = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add servicePALR
     *
     * @param \AdministrateurBundle\Entity\ServicePALR $servicePALR
     *
     * @return batiment
     */
    public function addServicePALR(\AdministrateurBundle\Entity\ServicePALR $servicePALR)
    {
        $this->servicePALR[] = $servicePALR;

        return $this;
    }

    /**
     * Remove servicePALR
     *
     * @param \AdministrateurBundle\Entity\ServicePALR $servicePALR
     */
    public function removeServicePALR(\AdministrateurBundle\Entity\ServicePALR $servicePALR)
    {
        $this->servicePALR->removeElement($servicePALR);
    }

    /**
     * Get servicePALR
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getServicePALR()
    {
        return $this->servicePALR;
    }

    /**
     * Add localisation
     *
     * @param \AdministrateurBundle\Entity\Localisation $localisation
     *
     * @return batiment
     */
    public function addLocalisation(\AdministrateurBundle\Entity\Localisation $localisation)
    {
        $this->Localisations[] = $localisation;

        return $this;
    }

    /**
     * Remove localisation
     *
     * @param \AdministrateurBundle\Entity\Localisation $localisation
     */
    public function removeLocalisation(\AdministrateurBundle\Entity\Localisation $localisation)
    {
        $this->Localisations->removeElement($localisation);
    }

    /**
     * Get localisations
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLocalisations()
    {
        return $this->Localisations;
    }
}
