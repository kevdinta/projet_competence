<?php

namespace CompetenceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contact
 *
 * @ORM\Table(name="contact")
 * @ORM\Entity
 */
class Contact
{
    /**
     * @var string
     *
     * @ORM\Column(name="nom_contact", type="string", length=25, nullable=true)
     */
    private $nomContact;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_contact", type="string", length=25, nullable=true)
     */
    private $prenomContact;

    /**
     * @var string
     *
     * @ORM\Column(name="adrese_contact", type="string", length=100, nullable=true)
     */
    private $adreseContact;

    /**
     * @var string
     *
     * @ORM\Column(name="CP_contact", type="string", length=6, nullable=true)
     */
    private $cpContact;

    /**
     * @var string
     *
     * @ORM\Column(name="ville_contact", type="string", length=25, nullable=true)
     */
    private $villeContact;

    /**
     * @var string
     *
     * @ORM\Column(name="telFixe_contact", type="string", length=10, nullable=true)
     */
    private $telfixeContact;

    /**
     * @var string
     *
     * @ORM\Column(name="telMobile_contact", type="string", length=10, nullable=true)
     */
    private $telmobileContact;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_contact", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idContact;



    /**
     * Set nomContact
     *
     * @param string $nomContact
     *
     * @return Contact
     */
    public function setNomContact($nomContact)
    {
        $this->nomContact = $nomContact;

        return $this;
    }

    /**
     * Get nomContact
     *
     * @return string
     */
    public function getNomContact()
    {
        return $this->nomContact;
    }

    /**
     * Set prenomContact
     *
     * @param string $prenomContact
     *
     * @return Contact
     */
    public function setPrenomContact($prenomContact)
    {
        $this->prenomContact = $prenomContact;

        return $this;
    }

    /**
     * Get prenomContact
     *
     * @return string
     */
    public function getPrenomContact()
    {
        return $this->prenomContact;
    }

    /**
     * Set adreseContact
     *
     * @param string $adreseContact
     *
     * @return Contact
     */
    public function setAdreseContact($adreseContact)
    {
        $this->adreseContact = $adreseContact;

        return $this;
    }

    /**
     * Get adreseContact
     *
     * @return string
     */
    public function getAdreseContact()
    {
        return $this->adreseContact;
    }

    /**
     * Set cpContact
     *
     * @param string $cpContact
     *
     * @return Contact
     */
    public function setCpContact($cpContact)
    {
        $this->cpContact = $cpContact;

        return $this;
    }

    /**
     * Get cpContact
     *
     * @return string
     */
    public function getCpContact()
    {
        return $this->cpContact;
    }

    /**
     * Set villeContact
     *
     * @param string $villeContact
     *
     * @return Contact
     */
    public function setVilleContact($villeContact)
    {
        $this->villeContact = $villeContact;

        return $this;
    }

    /**
     * Get villeContact
     *
     * @return string
     */
    public function getVilleContact()
    {
        return $this->villeContact;
    }

    /**
     * Set telfixeContact
     *
     * @param string $telfixeContact
     *
     * @return Contact
     */
    public function setTelfixeContact($telfixeContact)
    {
        $this->telfixeContact = $telfixeContact;

        return $this;
    }

    /**
     * Get telfixeContact
     *
     * @return string
     */
    public function getTelfixeContact()
    {
        return $this->telfixeContact;
    }

    /**
     * Set telmobileContact
     *
     * @param string $telmobileContact
     *
     * @return Contact
     */
    public function setTelmobileContact($telmobileContact)
    {
        $this->telmobileContact = $telmobileContact;

        return $this;
    }

    /**
     * Get telmobileContact
     *
     * @return string
     */
    public function getTelmobileContact()
    {
        return $this->telmobileContact;
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
}
