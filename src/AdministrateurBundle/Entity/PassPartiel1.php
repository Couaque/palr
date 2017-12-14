<?php

namespace AdministrateurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PassPartiel1
 *
 * @ORM\Table(name="pass_partiel1")
 * @ORM\Entity(repositoryClass="AdministrateurBundle\Repository\PassPartiel1Repository")
 */
class PassPartiel1
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
     * @ORM\Column(name="nomPass1", type="string", length=255)
     */
    private $nomPass1;


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
     * Set nomPass1
     *
     * @param string $nomPass1
     *
     * @return PassPartiel1
     */
    public function setNomPass1($nomPass1)
    {
        $this->nomPass1 = $nomPass1;

        return $this;
    }

    /**
     * Get nomPass1
     *
     * @return string
     */
    public function getNomPass1()
    {
        return $this->nomPass1;
    }
}

