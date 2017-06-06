<?php

namespace CompetenceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GroupeCompetence
 *
 * @ORM\Table(name="groupe_competence", indexes={@ORM\Index(name="FK_groupe_competence_id_matiere", columns={"id_matiere"})})
 * @ORM\Entity
 */
class GroupeCompetence
{
    /**
     * @var string
     *
     * @ORM\Column(name="nom_groupe", type="string", length=150, nullable=true)
     */
    private $nomGroupe;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_matiere", type="integer", nullable=true)
     */
    private $idMatiere;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_groupeCompetence", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idGroupecompetence;



    /**
     * Set nomGroupe
     *
     * @param string $nomGroupe
     *
     * @return GroupeCompetence
     */
    public function setNomGroupe($nomGroupe)
    {
        $this->nomGroupe = $nomGroupe;

        return $this;
    }

    /**
     * Get nomGroupe
     *
     * @return string
     */
    public function getNomGroupe()
    {
        return $this->nomGroupe;
    }

    /**
     * Set idMatiere
     *
     * @param integer $idMatiere
     *
     * @return GroupeCompetence
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
     * Get idGroupecompetence
     *
     * @return integer
     */
    public function getIdGroupecompetence()
    {
        return $this->idGroupecompetence;
    }
}
