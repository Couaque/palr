<?php

namespace AdministrateurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

/**
 * Perception
 *
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
     * @ORM\Column(name="dateDebut", type="date")
     * @Assert\Expression(
     *     "this.dateDebut <= this.dateFin",
     *     message="La date de début doit être inférieur à la date de fin!"
     * )
     */
    public $dateDebut;

    /**
     * @var string
     *
     * @ORM\Column(name="dateFin", type="date", nullable=true)
     *
     */
    public $dateFin;

    /**
     * @var string
     * @Assert\Choice({"Permanente", "Temporaire"})
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

    /**
     * Set variure
     *
     * @param \AdministrateurBundle\Entity\Variure $variure
     *
     * @return Perception
     */
    public function setVariure(\AdministrateurBundle\Entity\Variure $variure = null)
    {
        $this->variure = $variure;

        return $this;
    }

    /**
     * Get variure
     *
     * @return \AdministrateurBundle\Entity\Variure
     */
    public function getVariure()
    {
        return $this->variure;
    }

    /**
     * Set passPartiel1
     *
     * @param \AdministrateurBundle\Entity\PassPartiel1 $passPartiel1
     *
     * @return Perception
     */
    public function setPassPartiel1(\AdministrateurBundle\Entity\PassPartiel1 $passPartiel1 = null)
    {
        $this->passPartiel1 = $passPartiel1;

        return $this;
    }

    /**
     * Get passPartiel1
     *
     * @return \AdministrateurBundle\Entity\PassPartiel1
     */
    public function getPassPartiel1()
    {
        return $this->passPartiel1;
    }

    /**
     * Set passPartiel2
     *
     * @param \AdministrateurBundle\Entity\PassPartiel2 $passPartiel2
     *
     * @return Perception
     */
    public function setPassPartiel2(\AdministrateurBundle\Entity\PassPartiel2 $passPartiel2 = null)
    {
        $this->passPartiel2 = $passPartiel2;

        return $this;
    }

    /**
     * Get passPartiel2
     *
     * @return \AdministrateurBundle\Entity\PassPartiel2
     */
    public function getPassPartiel2()
    {
        return $this->passPartiel2;
    }

    /**
     * Set passPartiel3
     *
     * @param \AdministrateurBundle\Entity\PassPartiel3 $passPartiel3
     *
     * @return Perception
     */
    public function setPassPartiel3(\AdministrateurBundle\Entity\PassPartiel3 $passPartiel3 = null)
    {
        $this->passPartiel3 = $passPartiel3;

        return $this;
    }

    /**
     * Get passPartiel3
     *
     * @return \AdministrateurBundle\Entity\PassPartiel3
     */
    public function getPassPartiel3()
    {
        return $this->passPartiel3;
    }

}
