<?php

namespace AdministrateurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OutilFermeture
 *
 * @ORM\Table(name="outil_fermeture")
 * @ORM\Entity(repositoryClass="AdministrateurBundle\Repository\OutilFermetureRepository")
 */
class OutilFermeture
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
     * @ORM\Column(name="typeFermeture", type="string", length=255)
     */
    private $typeFermeture;

    /**
     * @var string
     *
     * @ORM\Column(name="dimensions", type="string", length=255, nullable=true)
     */
    private $dimensions;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=255)
     */
    private $etat;

    /**
   *@ORM\OneToMany(targetEntity="AdministrateurBundle\Entity\Equipement", cascade={"persist"}, mappedBy="outilFermeture")
   */
   private $Equipements;

   /**
  *@ORM\OneToMany(targetEntity="AdministrateurBundle\Entity\Variure", cascade={"persist"}, mappedBy="outilFermeture")
  */
  private $Variures;


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
     * Set typeFermeture
     *
     * @param string $typeFermeture
     *
     * @return OutilFermeture
     */
    public function setTypeFermeture($typeFermeture)
    {
        $this->typeFermeture = $typeFermeture;

        return $this;
    }

    /**
     * Get typeFermeture
     *
     * @return string
     */
    public function getTypeFermeture()
    {
        return $this->typeFermeture;
    }

    /**
     * Set dimensions
     *
     * @param string $dimensions
     *
     * @return OutilFermeture
     */
    public function setDimensions($dimensions)
    {
        $this->dimensions = $dimensions;

        return $this;
    }

    /**
     * Get dimensions
     *
     * @return string
     */
    public function getDimensions()
    {
        return $this->dimensions;
    }

    /**
     * Set etat
     *
     * @param string $etat
     *
     * @return OutilFermeture
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return string
     */
    public function getEtat()
    {
        return $this->etat;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Equipements = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add equipement
     *
     * @param \AdministrateurBundle\Entity\Equipement $equipement
     *
     * @return OutilFermeture
     */
    public function addEquipement(\AdministrateurBundle\Entity\Equipement $equipement)
    {
        $this->Equipements[] = $equipement;

        return $this;
    }

    /**
     * Remove equipement
     *
     * @param \AdministrateurBundle\Entity\Equipement $equipement
     */
    public function removeEquipement(\AdministrateurBundle\Entity\Equipement $equipement)
    {
        $this->Equipements->removeElement($equipement);
    }

    /**
     * Get equipements
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEquipements()
    {
        return $this->Equipements;
    }

    /**
     * Add variure
     *
     * @param \AdministrateurBundle\Entity\Variure $variure
     *
     * @return OutilFermeture
     */
    public function addVariure(\AdministrateurBundle\Entity\Variure $variure)
    {
        $this->Variures[] = $variure;

        return $this;
    }

    /**
     * Remove variure
     *
     * @param \AdministrateurBundle\Entity\Variure $variure
     */
    public function removeVariure(\AdministrateurBundle\Entity\Variure $variure)
    {
        $this->Variures->removeElement($variure);
    }

    /**
     * Get variures
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getVariures()
    {
        return $this->Variures;
    }
}
