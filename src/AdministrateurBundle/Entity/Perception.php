<?php

namespace AdministrateurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Perception
 *
 * @ORM\Table(name="perception")
 * @ORM\Entity(repositoryClass="AdministrateurBundle\Repository\PerceptionRepository")
 */
class Perception
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
     * @ORM\Column(name="dateDebut", type="string", length=255)
     */
    private $dateDebut;

    /**
     * @var string
     *
     * @ORM\Column(name="dateFin", type="string", length=255, nullable=true)
     */
    private $dateFin;

    /**
     * @var string
     *
     * @ORM\Column(name="typePerception", type="string", length=255)
     */
    private $typePerception;

    /**
    *@ORM\ManyToOne(targetEntity="AdministrateurBundle\Entity\Percepteur", cascade={"persist"})
    */
     private $percepteur;

    /**
    *@ORM\ManyToOne(targetEntity="AdministrateurBundle\Entity\Variure", cascade={"persist"})
    */
    private $variure;

    /**
    *@ORM\ManyToOne(targetEntity="AdministrateurBundle\Entity\PassPartiel1", cascade={"persist"})
    */
     private $passPartiel1;

    /**
    *@ORM\ManyToOne(targetEntity="AdministrateurBundle\Entity\PassPartiel2", cascade={"persist"})
    */
     private $passPartiel2;

    /**
    *@ORM\ManyToOne(targetEntity="AdministrateurBundle\Entity\PassPartiel3", cascade={"persist"})
    */
     private $passPartiel3;

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
     * Set dateDebut
     *
     * @param string $dateDebut
     *
     * @return Perception
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return string
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set dateFin
     *
     * @param string $dateFin
     *
     * @return Perception
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get dateFin
     *
     * @return string
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Set typePerception
     *
     * @param string $typePerception
     *
     * @return Perception
     */
    public function setTypePerception($typePerception)
    {
        $this->typePerception = $typePerception;

        return $this;
    }

    /**
     * Get typePerception
     *
     * @return string
     */
    public function getTypePerception()
    {
        return $this->typePerception;
    }

    /**
     * Get percepteur
     *
     * @return Perception
     */
    public function getPercepteur()
    {
        return $this->percepteur;
    }

    /**
     * Set percepteur
     *
     * @param string $percepteur
     *
     * @return Perception
     */
    public function setPercepteur($percepteur)
    {
        $this->percepteur = $percepteur;

        return $this;
    }
}

