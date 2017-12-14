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
     * @ORM\Column(name="dimensions", type="string", length=255)
     */
    private $dimensions;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=255)
     */
    private $etat;

    /**
    *@ORM\OneToOne(targetEntity="AdministrateurBundle\Entity\Variure", cascade={"persist"})
    */
    private $variure;

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
}
