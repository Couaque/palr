<?php

namespace AdministrateurBundle\Entity;

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
}

