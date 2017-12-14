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
     * @ORM\Column(name="nomBat", type="string", length=255)
     */
    private $nomBat;



    /**
    *@ORM\ManyToMany(targetEntity="AdministrateurBundle\Entity\organisation", cascade={"persist"})
    */
    private $organisations;

  
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
    public function addOrganisation(\AdministrateurBundle\Entity\organisation $organisations)
    {
        $this->organisations[] = $organisation;

        return $this;
    }

    /**
     * Remove organisation
     *
     * @param \AdministrateurBundle\Entity\organisation $organisation
     */
    public function removeOrganisation(\AdministrateurBundle\Entity\organisation $organisation)
    {
        $this->organisations->removeElement($organisation);
    }

    /**
     * Get organisations
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getOrganisations()
    {
        return $this->organisations;
    }
}
