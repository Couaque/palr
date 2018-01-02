<?php

namespace AdministrateurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ServicePALR
 *
 * @ORM\Table(name="ServicePALR")
 * @ORM\Entity(repositoryClass="AdministrateurBundle\Repository\ServicePALRRepository")
 */
class ServicePALR
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
     * @ORM\Column(name="nomServicePALR", type="string", length=255)
     */
    private $nomServicePALR;


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
     * Set nomServicePALR
     *
     * @param string $nomServicePALR
     *
     * @return ServicePALR
     */
    public function setNomServicePALR($nomServicePALR)
    {
        $this->nomServicePALR = $nomServicePALR;

        return $this;
    }

    /**
     * Get nomServicePALR
     *
     * @return string
     */
    public function getNomServicePALR()
    {
        return $this->nomServicePALR;
    }
}
