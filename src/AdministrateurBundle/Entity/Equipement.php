<?php

namespace AdministrateurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Equipement
 *
 * @ORM\Table(name="equipement")
 * @ORM\Entity(repositoryClass="AdministrateurBundle\Repository\EquipementRepository")
 */
class Equipement
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
     * @ORM\Column(name="nomEquipement", type="string", length=255)
     */
    private $nomEquipement;


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
     * Set nomEquipement
     *
     * @param string $nomEquipement
     *
     * @return Equipement
     */
    public function setNomEquipement($nomEquipement)
    {
        $this->nomEquipement = $nomEquipement;

        return $this;
    }

    /**
     * Get nomEquipement
     *
     * @return string
     */
    public function getNomEquipement()
    {
        return $this->nomEquipement;
    }
}

