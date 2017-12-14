<?php

namespace AdministrateurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * organisation
 *
 * @ORM\Table(name="organisation")
 * @ORM\Entity(repositoryClass="AdministrateurBundle\Repository\organisationRepository")
 */
class organisation
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
     * @ORM\Column(name="nomOrganisation", type="string", length=255)
     */
    private $nomOrganisation;

    /**
    *@var string
    *
    * @ORM\Column(name="service", type="string", length=255)
    */
    private $service;

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
     * Set nomOrganisation
     *
     * @param string $nomOrganisation
     *
     * @return organisation
     */
    public function setNomOrganisation($nomOrganisation)
    {
        $this->nomOrganisation = $nomOrganisation;

        return $this;
    }

    /**
     * Get nomOrganisation
     *
     * @return string
     */
    public function getNomOrganisation()
    {
        return $this->nomOrganisation;
    }
}
