<?php

namespace CompetenceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Appeller
 *
 * @ORM\Table(name="appeller", indexes={@ORM\Index(name="FK_appeller_id_contact", columns={"id_contact"}), @ORM\Index(name="fk_appeller_users1_idx", columns={"users_id"})})
 * @ORM\Entity
 */
class Appeller
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_contact", type="integer", nullable=false)
     */
    private $idContact;

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
     * Set idContact
     *
     * @param integer $idContact
     *
     * @return Appeller
     */
    public function setIdContact($idContact)
    {
        $this->idContact = $idContact;

        return $this;
    }

    /**
     * Get idContact
     *
     * @return integer
     */
    public function getIdContact()
    {
        return $this->idContact;
    }

    /**
     * Set usersId
     *
     * @param integer $usersId
     *
     * @return Appeller
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
