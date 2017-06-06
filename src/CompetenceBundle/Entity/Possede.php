<?php

namespace CompetenceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Possede
 *
 * @ORM\Table(name="possede", indexes={@ORM\Index(name="fk_possede_users1_idx", columns={"users_id"}), @ORM\Index(name="FK_possede_id_diplome", columns={"id_diplome"})})
 * @ORM\Entity
 */
class Possede
{
    /**
     * @var string
     *
     * @ORM\Column(name="mention", type="string", length=25, nullable=true)
     */
    private $mention;

    /**
     * @var string
     *
     * @ORM\Column(name="date_obtention", type="string", length=25, nullable=true)
     */
    private $dateObtention;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_diplome", type="integer", nullable=false)
     */
    private $idDiplome;

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
     * Set mention
     *
     * @param string $mention
     *
     * @return Possede
     */
    public function setMention($mention)
    {
        $this->mention = $mention;

        return $this;
    }

    /**
     * Get mention
     *
     * @return string
     */
    public function getMention()
    {
        return $this->mention;
    }

    /**
     * Set dateObtention
     *
     * @param string $dateObtention
     *
     * @return Possede
     */
    public function setDateObtention($dateObtention)
    {
        $this->dateObtention = $dateObtention;

        return $this;
    }

    /**
     * Get dateObtention
     *
     * @return string
     */
    public function getDateObtention()
    {
        return $this->dateObtention;
    }

    /**
     * Set idDiplome
     *
     * @param integer $idDiplome
     *
     * @return Possede
     */
    public function setIdDiplome($idDiplome)
    {
        $this->idDiplome = $idDiplome;

        return $this;
    }

    /**
     * Get idDiplome
     *
     * @return integer
     */
    public function getIdDiplome()
    {
        return $this->idDiplome;
    }

    /**
     * Set usersId
     *
     * @param integer $usersId
     *
     * @return Possede
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
