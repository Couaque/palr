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
}

