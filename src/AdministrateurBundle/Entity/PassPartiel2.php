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
    *@ORM\ManyToOne(targetEntity="AdministrateurBundle\Entity\Variure", cascade={"persist"})
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
}

