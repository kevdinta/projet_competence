<?php

namespace CompetenceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contenir
 *
 * @ORM\Table(name="contenir", indexes={@ORM\Index(name="FK_contenir_id_competence", columns={"id_competence"}), @ORM\Index(name="FK_contenir_id_epreuve", columns={"id_epreuve"})})
 * @ORM\Entity
 */
class Contenir
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=45)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_epreuve", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idEpreuve;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_competence", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idCompetence;



    /**
     * Set id
     *
     * @param string $id
     *
     * @return Contenir
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idEpreuve
     *
     * @param integer $idEpreuve
     *
     * @return Contenir
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
     * Set idCompetence
     *
     * @param integer $idCompetence
     *
     * @return Contenir
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
}
