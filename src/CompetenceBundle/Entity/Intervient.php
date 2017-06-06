<?php

namespace CompetenceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Intervient
 *
 * @ORM\Table(name="intervient", indexes={@ORM\Index(name="FK_intervient_id_matiere", columns={"id_matiere"}), @ORM\Index(name="fk_intervient_users1_idx", columns={"users_id"})})
 * @ORM\Entity
 */
class Intervient
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_intervenant", type="integer", nullable=false)
     */
    private $idIntervenant;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_matiere", type="integer", nullable=false)
     */
    private $idMatiere;

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
     * Set idIntervenant
     *
     * @param integer $idIntervenant
     *
     * @return Intervient
     */
    public function setIdIntervenant($idIntervenant)
    {
        $this->idIntervenant = $idIntervenant;

        return $this;
    }

    /**
     * Get idIntervenant
     *
     * @return integer
     */
    public function getIdIntervenant()
    {
        return $this->idIntervenant;
    }

    /**
     * Set idMatiere
     *
     * @param integer $idMatiere
     *
     * @return Intervient
     */
    public function setIdMatiere($idMatiere)
    {
        $this->idMatiere = $idMatiere;

        return $this;
    }

    /**
     * Get idMatiere
     *
     * @return integer
     */
    public function getIdMatiere()
    {
        return $this->idMatiere;
    }

    /**
     * Set usersId
     *
     * @param integer $usersId
     *
     * @return Intervient
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
