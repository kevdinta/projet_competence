<?php

namespace CompetenceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Appartenir
 *
 * @ORM\Table(name="appartenir", indexes={@ORM\Index(name="FK_appartenir_id_groupe", columns={"id_groupe"}), @ORM\Index(name="fk_appartenir_users1_idx", columns={"users_id"})})
 * @ORM\Entity
 */
class Appartenir
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_changement", type="date", nullable=true)
     */
    private $dateChangement;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_groupe", type="integer", nullable=false)
     */
    private $idGroupe;

    /**
     * @var integer
     *
     * @ORM\Column(name="users_id", type="integer", nullable=false)
     */
    private $usersId;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set dateChangement
     *
     * @param \DateTime $dateChangement
     *
     * @return Appartenir
     */
    public function setDateChangement($dateChangement)
    {
        $this->dateChangement = $dateChangement;

        return $this;
    }

    /**
     * Get dateChangement
     *
     * @return \DateTime
     */
    public function getDateChangement()
    {
        return $this->dateChangement;
    }

    /**
     * Set idGroupe
     *
     * @param integer $idGroupe
     *
     * @return Appartenir
     */
    public function setIdGroupe($idGroupe)
    {
        $this->idGroupe = $idGroupe;

        return $this;
    }

    /**
     * Get idGroupe
     *
     * @return integer
     */
    public function getIdGroupe()
    {
        return $this->idGroupe;
    }

    /**
     * Set usersId
     *
     * @param integer $usersId
     *
     * @return Appartenir
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
