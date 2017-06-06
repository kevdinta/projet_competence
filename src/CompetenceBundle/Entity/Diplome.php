<?php

namespace CompetenceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Diplome
 *
 * @ORM\Table(name="diplome")
 * @ORM\Entity
 */
class Diplome
{
    /**
     * @var string
     *
     * @ORM\Column(name="nom_diplome", type="string", length=25, nullable=true)
     */
    private $nomDiplome;

    /**
     * @var string
     *
     * @ORM\Column(name="niveau_diplome", type="string", nullable=true)
     */
    private $niveauDiplome;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_diplome", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDiplome;



    /**
     * Set nomDiplome
     *
     * @param string $nomDiplome
     *
     * @return Diplome
     */
    public function setNomDiplome($nomDiplome)
    {
        $this->nomDiplome = $nomDiplome;

        return $this;
    }

    /**
     * Get nomDiplome
     *
     * @return string
     */
    public function getNomDiplome()
    {
        return $this->nomDiplome;
    }

    /**
     * Set niveauDiplome
     *
     * @param string $niveauDiplome
     *
     * @return Diplome
     */
    public function setNiveauDiplome($niveauDiplome)
    {
        $this->niveauDiplome = $niveauDiplome;

        return $this;
    }

    /**
     * Get niveauDiplome
     *
     * @return string
     */
    public function getNiveauDiplome()
    {
        return $this->niveauDiplome;
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
}
