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
     * @ORM\Column(name="nomPercepteur", type="string", length=255)
     */
    private $nomPercepteur;

    /**
     * @var string
     *
     * @ORM\Column(name="prenomPercepteur", type="string", length=255)
     */
    private $prenomPercepteur;

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
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nomPercepteur
     *
     * @param string $nomPercepteur
     *
     * @return Percepteur
     */
    public function setNomPercepteur($nomPercepteur)
    {
        $this->nomPercepteur = $nomPercepteur;

        return $this;
    }

    /**
     * Get nomPercepteur
     *
     * @return string
     */
    public function getNomPercepteur()
    {
        return $this->nomPercepteur;
    }

    /**
     * Set prenomPercepteur
     *
     * @param string $prenomPercepteur
     *
     * @return Percepteur
     */
    public function setPrenomPercepteur($prenomPercepteur)
    {
        $this->prenomPercepteur = $prenomPercepteur;

        return $this;
    }

    /**
     * Get prenomPercepteur
     *
     * @return string
     */
    public function getPrenomPercepteur()
    {
        return $this->prenomPercepteur;
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

