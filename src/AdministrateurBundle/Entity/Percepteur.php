<?php

namespace AdministrateurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


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
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=255, nullable=true)
     */
    private $telephone;

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
     *
     * @ORM\ManyToOne(targetEntity="AdministrateurBundle\Entity\ServicePALR", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
     private $service;

     /**
    *@ORM\OneToMany(targetEntity="AdministrateurBundle\Entity\Perception", cascade={"persist"}, mappedBy="percepteur")
    */
    private $Perceptions;

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
     * Set organisation
     *
     * @param string $organisation
     *
     * @return Percepteur
     */
    public function setOrganisation($organisation)
    {
        $this->organisation = $organisation;

        return $this;
    }

    /**
     * Get organisation
     *
     * @return string
     */
    public function getOrganisation()
    {
        return $this->organisation;
    }

    /**
     * Set service
     *
     * @param integer $service
     *
     * @return Percepteur
     */
    public function setService($service)
    {
        $this->service = $service;

        return $this;
    }

    /**
     * Get service
     *
     * @return integer
     */
    public function getService()
    {
        return $this->service;
    }

    public function __toString(){
        return ' ' . $this->nomPercepteur . ' ' . $this->prenomPercepteur . ' <' . $this->email . '> ' . $this->telephone;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     *
     * @return Percepteur
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Perceptions = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add perception
     *
     * @param \AdministrateurBundle\Entity\Perception $perception
     *
     * @return Percepteur
     */
    public function addPerception(\AdministrateurBundle\Entity\Perception $perception)
    {
        $this->Perceptions[] = $perception;

        return $this;
    }

    /**
     * Remove perception
     *
     * @param \AdministrateurBundle\Entity\Perception $perception
     */
    public function removePerception(\AdministrateurBundle\Entity\Perception $perception)
    {
        $this->Perceptions->removeElement($perception);
    }

    /**
     * Get perceptions
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPerceptions()
    {
        return $this->Perceptions;
    }


    /**
     * Get perceptions
     *
     * @return array
     */
    public function getPerceptionsId()
    {
        $res = array();
        foreach ($this->Perceptions as $perception ) {
            $res = $perception->getId();

        }
        return $res;
    }

}
