<?php

namespace CompetenceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AutoEvaluer
 *
 * @ORM\Table(name="auto_evaluer", indexes={@ORM\Index(name="fk_auto_evaluer_users1_idx", columns={"users_id"}), @ORM\Index(name="FK_auto_evaluer_id_competence", columns={"id_competence"})})
 * @ORM\Entity
 */
class AutoEvaluer
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_autoEval", type="datetime", nullable=true)
     */
    private $dateAutoeval;

    /**
     * @var integer
     *
     * @ORM\Column(name="note_autoEval", type="integer", nullable=true)
     */
    private $noteAutoeval;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="text", length=65535, nullable=false)
     */
    private $commentaire;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_competence", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idCompetence;

    /**
     * @var integer
     *
     * @ORM\Column(name="users_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $usersId;



    /**
     * Set dateAutoeval
     *
     * @param \DateTime $dateAutoeval
     *
     * @return AutoEvaluer
     */
    public function setDateAutoeval($dateAutoeval)
    {
        $this->dateAutoeval = $dateAutoeval;

        return $this;
    }

    /**
     * Get dateAutoeval
     *
     * @return \DateTime
     */
    public function getDateAutoeval()
    {
        return $this->dateAutoeval;
    }

    /**
     * Set noteAutoeval
     *
     * @param integer $noteAutoeval
     *
     * @return AutoEvaluer
     */
    public function setNoteAutoeval($noteAutoeval)
    {
        $this->noteAutoeval = $noteAutoeval;

        return $this;
    }

    /**
     * Get noteAutoeval
     *
     * @return integer
     */
    public function getNoteAutoeval()
    {
        return $this->noteAutoeval;
    }

    /**
     * Set commentaire
     *
     * @param string $commentaire
     *
     * @return AutoEvaluer
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * Set id
     *
     * @param integer $id
     *
     * @return AutoEvaluer
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
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

    /**
     * Set idCompetence
     *
     * @param integer $idCompetence
     *
     * @return AutoEvaluer
     */
    public function setIdCompetence($idCompetence)
    {
        $this->idCompetence = $idCompetence;

        return $this;
    }

    /**
     * Get idCompetence
     *
     * @return integer
     */
    public function getIdCompetence()
    {
        return $this->idCompetence;
    }

    /**
     * Set usersId
     *
     * @param integer $usersId
     *
     * @return AutoEvaluer
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
}
