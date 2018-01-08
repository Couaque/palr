<?php

namespace AdministrateurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Percepteur
 *
 * @ORM\Table(name="percepteur")
 * @ORM\Entity(repositoryClass="AdministrateurBundle\Repository\PercepteurRepository")
 */
class Percepteur
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
     * @ORM\Column(name="nomPrenomPercepteur", type="string", length=255)
     */
    private $nomPrenomPercepteur;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="typePercepteur", type="string", length=255)
     */
    private $typePercepteur;


    /**
     * @var string
     *
     * @ORM\Column(name="organisation", type="string", length=255)
     */
    private $organisation;

    /**
     * @var int
     *
     * @ORM\Column(name="servicePALR", type="integer", nullable=true) 
     * @ORM\ManyToOne(targetEntity="AdministrateurBundle\Entity\ServicePALR", cascade={"persist"})
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
     * Set nomPrenomPercepteur
     *
     * @param string $nomPrenomPercepteur
     *
     * @return Percepteur
     */
    public function setNomPrenomPercepteur($nomPrenomPercepteur)
    {
        $this->nomPrenomPercepteur = $nomPrenomPercepteur;

        return $this;
    }

    /**
     * Get nomPrenomPercepteur
     *
     * @return string
     */
    public function getNomPrenomPercepteur()
    {
        return $this->nomPrenomPercepteur;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Percepteur
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set typePercepteur
     *
     * @param string $typePercepteur
     *
     * @return Percepteur
     */
    public function setTypePercepteur($typePercepteur)
    {
        $this->typePercepteur = $typePercepteur;

        return $this;
    }

    /**
     * Get typePercepteur
     *
     * @return string
     */
    public function getTypePercepteur()
    {
        return $this->typePercepteur;
    }
}

