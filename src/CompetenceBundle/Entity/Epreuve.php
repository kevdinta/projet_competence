<?php

namespace CompetenceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Epreuve
 *
 * @ORM\Table(name="epreuve", indexes={@ORM\Index(name="fk_epreuve_users1_idx", columns={"users_id"})})
 * @ORM\Entity
 */
class Epreuve
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_epreuve", type="date", nullable=true)
     */
    private $dateEpreuve;

    /**
     * @var integer
     *
     * @ORM\Column(name="users_id", type="integer", nullable=false)
     */
    private $usersId;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_epreuve", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEpreuve;



    /**
     * Set dateEpreuve
     *
     * @param \DateTime $dateEpreuve
     *
     * @return Epreuve
     */
    public function setDateEpreuve($dateEpreuve)
    {
        $this->dateEpreuve = $dateEpreuve;

        return $this;
    }

    /**
     * Get dateEpreuve
     *
     * @return \DateTime
     */
    public function getDateEpreuve()
    {
        return $this->dateEpreuve;
    }

    /**
     * Set usersId
     *
     * @param integer $usersId
     *
     * @return Epreuve
     */
    public function setUsersId($usersId)
    {
        $this->usersId = $usersId;

        return $this;
    }

    /**
     * Get usersId
     *
     * @return integer
     */
    public function getUsersId()
    {
        return $this->usersId;
    }

    /**
     * Get idEpreuve
     *
     * @return integer
     */
    public function getIdEpreuve()
    {
        return $this->idEpreuve;
    }
}
