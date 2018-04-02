<?php

namespace AdministrateurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PassPartiel2
 *
 * @ORM\Table(name="pass_partiel2")
 * @ORM\Entity(repositoryClass="AdministrateurBundle\Repository\PassPartiel2Repository")
 */
class PassPartiel2
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
     * @ORM\Column(name="nomPass2", type="string", length=255)
     */
    private $nomPass2;

    /**
    *@ORM\ManyToOne(targetEntity="AdministrateurBundle\Entity\PassPartiel1", cascade={"persist"})
    */
    private $PassPartiel1;

    /**
    *@ORM\OneToMany(targetEntity="AdministrateurBundle\Entity\Variure", cascade={"persist"}, mappedBy="passPartiel2")
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
     * Set nomPass2
     *
     * @param string $nomPass2
     *
     * @return PassPartiel2
     */
    public function setNomPass2($nomPass2)
    {
        $this->nomPass2 = $nomPass2;

        return $this;
    }

    /**
     * Get nomPass2
     *
     * @return string
     */
    public function getNomPass2()
    {
        return $this->nomPass2;
    }

    /**
     * Set passPartiel1
     *
     * @param \AdministrateurBundle\Entity\PassPartiel1 $passPartiel1
     *
     * @return PassPartiel2
     */
    public function setPassPartiel1(\AdministrateurBundle\Entity\PassPartiel1 $passPartiel1 = null)
    {
        $this->PassPartiel1 = $passPartiel1;

        return $this;
    }



    /**
     * Get passPartiel1
     *
     * @return \AdministrateurBundle\Entity\PassPartiel1
     */
    public function getPassPartiel1()
    {
        return $this->PassPartiel1;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Variures = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add variure
     *
     * @param \AdministrateurBundle\Entity\Variure $variure
     *
     * @return PassPartiel2
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

      public function __toString(){
        return ' ' . $this->nomPass2;
      }

}
