<?php

namespace AdministrateurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Perception
 *
 *
 * @ORM\Table(name="perception")
 * @ORM\Entity(repositoryClass="AdministrateurBundle\Repository\PerceptionRepository")
 * @UniqueEntity(fields={"variure"}, message="Cette clé a déja été perçue par quelqu'un !")
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
     *
     */
    public $dateDebut;

    /**
     * @var string
     * @Assert\Expression("value >= this.dateDebut", message="La date de fin doit être supérieure à la date de début!")
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
     * @var string
     * @Assert\Choice({"Clé", "Pass"})
     * @ORM\Column(name="choixPerception", type="string", length=255)
     */
    private $choixPerception;

    /**
     * @var string
     * @Assert\Choice({"enCours", "Archivee"})
     * @ORM\Column(name="etatPerception", type="string", length=255)
     */
    private $etatPerception;

     /**
    *@ORM\ManyToOne(targetEntity="Percepteur", cascade={"persist"}, inversedBy="Perceptions")
    *@Assert\NotNull(message="Vous devez entrer un percepteur!")
    */
     private $percepteur;

    /**
    *@ORM\ManyToOne(targetEntity="AdministrateurBundle\Entity\Variure", cascade={"persist"})
    */
    private $variure;

    /**
    *@ORM\ManyToOne(targetEntity="AdministrateurBundle\Entity\PassPartiel1", cascade={"persist"})
    *@ORM\JoinColumn(nullable=true)
    */
     private $passPartiel1;

    /**
    *@ORM\ManyToOne(targetEntity="AdministrateurBundle\Entity\PassPartiel2", cascade={"persist"})
    *@ORM\JoinColumn(nullable=true)
    */
     private $passPartiel2;

    /**
    *@ORM\ManyToOne(targetEntity="AdministrateurBundle\Entity\PassPartiel3", cascade={"persist"})
    *@ORM\JoinColumn(nullable=true)
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


    /**
     * Set choixPerception
     *
     * @param string $choixPerception
     *
     * @return Perception
     */
    public function setChoixPerception($choixPerception)
    {
        $this->choixPerception = $choixPerception;

        return $this;
    }

    /**
     * Get choixPerception
     *
     * @return string
     */
    public function getChoixPerception()
    {
        return $this->choixPerception;
    }

    /**
     * Set etatPerception
     *
     * @param string $etatPerception
     *
     * @return Perception
     */
    public function setEtatPerception($etatPerception)
    {
        $this->etatPerception = $etatPerception;

        return $this;
    }

    /**
     * Get etatPerception
     *
     * @return string
     */
    public function getEtatPerception()
    {
        return $this->etatPerception;
    }
}
