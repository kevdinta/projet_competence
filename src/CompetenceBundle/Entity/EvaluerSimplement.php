<?php

namespace CompetenceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EvaluerSimplement
 *
 * @ORM\Table(name="evaluer_simplement", indexes={@ORM\Index(name="FK_evaluer_simplement_id_competence", columns={"id_competence"}), @ORM\Index(name="fk_evaluer_simplement_users1_idx", columns={"users_id_prof"}), @ORM\Index(name="fk_evaluer_simplement_users2_idx", columns={"users_id_eleve"})})
 * @ORM\Entity
 */
class EvaluerSimplement
{
    /**
     * @var integer
     *
     * @ORM\Column(name="note_evaluerSimplement", type="integer", nullable=true)
     */
    private $noteEvaluersimplement;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_EvaluerSimplement", type="datetime", nullable=true)
     */
    private $dateEvaluersimplement;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_competence", type="integer", nullable=false)
     */
    private $idCompetence;

    /**
     * @var integer
     *
     * @ORM\Column(name="users_id_prof", type="integer", nullable=false)
     */
    private $usersIdProf;

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
     * Set noteEvaluersimplement
     *
     * @param integer $noteEvaluersimplement
     *
     * @return EvaluerSimplement
     */
    public function setNoteEvaluersimplement($noteEvaluersimplement)
    {
        $this->noteEvaluersimplement = $noteEvaluersimplement;

        return $this;
    }

    /**
     * Get noteEvaluersimplement
     *
     * @return integer
     */
    public function getNoteEvaluersimplement()
    {
        return $this->noteEvaluersimplement;
    }

    /**
     * Set dateEvaluersimplement
     *
     * @param \DateTime $dateEvaluersimplement
     *
     * @return EvaluerSimplement
     */
    public function setDateEvaluersimplement($dateEvaluersimplement)
    {
        $this->dateEvaluersimplement = $dateEvaluersimplement;

        return $this;
    }

    /**
     * Get dateEvaluersimplement
     *
     * @return \DateTime
     */
    public function getDateEvaluersimplement()
    {
        return $this->dateEvaluersimplement;
    }

    /**
     * Set idCompetence
     *
     * @param integer $idCompetence
     *
     * @return EvaluerSimplement
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
     * Set usersIdProf
     *
     * @param integer $usersIdProf
     *
     * @return EvaluerSimplement
     */
    public function setUsersIdProf($usersIdProf)
    {
        $this->usersIdProf = $usersIdProf;

        return $this;
    }

    /**
     * Get usersIdProf
     *
     * @return integer
     */
    public function getUsersIdProf()
    {
        return $this->usersIdProf;
    }

    /**
     * Set usersIdEleve
     *
     * @param integer $usersIdEleve
     *
     * @return EvaluerSimplement
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
