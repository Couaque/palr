<?php

namespace AdministrateurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PassPartiel3
 *
 * @ORM\Table(name="pass_partiel3")
 * @ORM\Entity(repositoryClass="AdministrateurBundle\Repository\PassPartiel3Repository")
 */
class PassPartiel3
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
     * @ORM\Column(name="nomPass3", type="string", length=255)
     */
    private $nomPass3;

    /**
    *@ORM\ManyToOne(targetEntity="AdministrateurBundle\Entity\PassPartiel2", cascade={"persist"})
    */
    private $passPartiel2;

    /**
    *@ORM\OneToMany(targetEntity="AdministrateurBundle\Entity\Variure", cascade={"persist"}, mappedBy="passPartiel3")
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
     * Set nomPass3
     *
     * @param string $nomPass3
     *
     * @return PassPartiel3
     */
    public function setNomPass($nomPass3)
    {
        $this->nomPass3 = $nomPass3;

        return $this;
    }

    /**
     * Get nomPass3
     *
     * @return string
     */
    public function getNomPass3()
    {
        return $this->nomPass3;
    }

    /**
     * Set nomPass3
     *
     * @param string $nomPass3
     *
     * @return PassPartiel3
     */
    public function setNomPass3($nomPass3)
    {
        $this->nomPass3 = $nomPass3;

        return $this;
    }

    /**
     * Set passPartiel2
     *
     * @param \AdministrateurBundle\Entity\PassPartiel2 $passPartiel2
     *
     * @return PassPartiel3
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

    public function __toString(){
      return ' ' . $this->nomPass3;
    }


}
