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
     * @ORM\Column(name="nomPass", type="string", length=255)
     */
    private $nomPass3;

    /**
    *@ORM\ManyToOne(targetEntity="AdministrateurBundle\Entity\PassPartiel2", cascade={"persist"})
    */
    private $PassPartiel2;
  
    /**
    *@ORM\ManyToOne(targetEntity="AdministrateurBundle\Entity\Variure", cascade={"persist"})
    */
    private $idVariure;
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
     * Set nomPass
     *
     * @param string $nomPass
     *
     * @return PassPartiel3
     */
    public function setNomPass($nomPass)
    {
        $this->nomPass = $nomPass;

        return $this;
    }

    /**
     * Get nomPass
     *
     * @return string
     */
    public function getNomPass()
    {
        return $this->nomPass;
    }
}
