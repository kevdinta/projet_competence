<?php

namespace CompetenceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Groupe
 *
 * @ORM\Table(name="groupe", indexes={@ORM\Index(name="FK_groupe_id_annee", columns={"id_annee"}), @ORM\Index(name="FK_groupe_id_diplome", columns={"id_diplome"})})
 * @ORM\Entity
 */
class Groupe
{
    /**
     * @var string
     *
     * @ORM\Column(name="nom_groupe", type="string", length=25, nullable=true)
     */
    private $nomGroupe;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_annee", type="integer", nullable=true)
     */
    private $idAnnee;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_diplome", type="integer", nullable=true)
     */
    private $idDiplome;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_groupe", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idGroupe;



    /**
     * Set nomGroupe
     *
     * @param string $nomGroupe
     *
     * @return Groupe
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
     * Set idAnnee
     *
     * @param integer $idAnnee
     *
     * @return Groupe
     */
    public function setIdAnnee($idAnnee)
    {
        $this->idAnnee = $idAnnee;

        return $this;
    }

    /**
     * Get idAnnee
     *
     * @return integer
     */
    public function getIdAnnee()
    {
        return $this->idAnnee;
    }

    /**
     * Set idDiplome
     *
     * @param integer $idDiplome
     *
     * @return Groupe
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
     * Get idGroupe
     *
     * @return integer
     */
    public function getIdGroupe()
    {
        return $this->idGroupe;
    }
}
