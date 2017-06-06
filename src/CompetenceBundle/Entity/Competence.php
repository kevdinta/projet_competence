<?php

namespace CompetenceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Competence
 *
 * @ORM\Table(name="competence", indexes={@ORM\Index(name="FK_competence_id_groupeCompetence", columns={"id_groupeCompetence"})})
 * @ORM\Entity
 */
class Competence
{
    /**
     * @var string
     *
     * @ORM\Column(name="nom_competence", type="string", length=100, nullable=true)
     */
    private $nomCompetence;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_groupeCompetence", type="integer", nullable=true)
     */
    private $idGroupecompetence;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_competence", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCompetence;



    /**
     * Set nomCompetence
     *
     * @param string $nomCompetence
     *
     * @return Competence
     */
    public function setNomCompetence($nomCompetence)
    {
        $this->nomCompetence = $nomCompetence;

        return $this;
    }

    /**
     * Get nomCompetence
     *
     * @return string
     */
    public function getNomCompetence()
    {
        return $this->nomCompetence;
    }

    /**
     * Set idGroupecompetence
     *
     * @param integer $idGroupecompetence
     *
     * @return Competence
     */
    public function setIdGroupecompetence($idGroupecompetence)
    {
        $this->idGroupecompetence = $idGroupecompetence;

        return $this;
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

    /**
     * Get idCompetence
     *
     * @return integer
     */
    public function getIdCompetence()
    {
        return $this->idCompetence;
    }
}
