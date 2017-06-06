<?php

namespace CompetenceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EvaluerAvecEpreuve
 *
 * @ORM\Table(name="evaluer_avec_epreuve", indexes={@ORM\Index(name="FK_evaluer_avec_epreuve_id_competence", columns={"id_competence"}), @ORM\Index(name="FK_evaluer_avec_epreuve_id_epreuve", columns={"id_epreuve"}), @ORM\Index(name="fk_evaluer_avec_epreuve_users1_idx", columns={"users_id_eleve"})})
 * @ORM\Entity
 */
class EvaluerAvecEpreuve
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_eval", type="datetime", nullable=true)
     */
    private $dateEval;

    /**
     * @var integer
     *
     * @ORM\Column(name="note", type="integer", nullable=true)
     */
    private $note;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_competence", type="integer", nullable=false)
     */
    private $idCompetence;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_epreuve", type="integer", nullable=false)
     */
    private $idEpreuve;

    /**
     * @var integer
     *
     * @ORM\Column(name="users_id_eleve", type="integer", nullable=false)
     */
    private $usersIdEleve;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set dateEval
     *
     * @param \DateTime $dateEval
     *
     * @return EvaluerAvecEpreuve
     */
    public function setDateEval($dateEval)
    {
        $this->dateEval = $dateEval;

        return $this;
    }

    /**
     * Get dateEval
     *
     * @return \DateTime
     */
    public function getDateEval()
    {
        return $this->dateEval;
    }

    /**
     * Set note
     *
     * @param integer $note
     *
     * @return EvaluerAvecEpreuve
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return integer
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set idCompetence
     *
     * @param integer $idCompetence
     *
     * @return EvaluerAvecEpreuve
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
     * Set idEpreuve
     *
     * @param integer $idEpreuve
     *
     * @return EvaluerAvecEpreuve
     */
    public function setIdEpreuve($idEpreuve)
    {
        $this->idEpreuve = $idEpreuve;

        return $this;
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

    /**
     * Set usersIdEleve
     *
     * @param integer $usersIdEleve
     *
     * @return EvaluerAvecEpreuve
     */
    public function setUsersIdEleve($usersIdEleve)
    {
        $this->usersIdEleve = $usersIdEleve;

        return $this;
    }

    /**
     * Get usersIdEleve
     *
     * @return integer
     */
    public function getUsersIdEleve()
    {
        return $this->usersIdEleve;
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
