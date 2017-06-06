<?php

namespace CompetenceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommantaireCompetence
 *
 * @ORM\Table(name="commantaire_competence", indexes={@ORM\Index(name="FK_commantaire_competence_id_competence", columns={"id_competence"})})
 * @ORM\Entity
 */
class CommantaireCompetence
{
    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="text", length=65535, nullable=true)
     */
    private $commentaire;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_competence", type="integer", nullable=true)
     */
    private $idCompetence;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_commentaireCompetence", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCommentairecompetence;



    /**
     * Set commentaire
     *
     * @param string $commentaire
     *
     * @return CommantaireCompetence
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
     * Set idCompetence
     *
     * @param integer $idCompetence
     *
     * @return CommantaireCompetence
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
     * Get idCommentairecompetence
     *
     * @return integer
     */
    public function getIdCommentairecompetence()
    {
        return $this->idCommentairecompetence;
    }
}
