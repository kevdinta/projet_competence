<?php

namespace CompetenceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LogUsers
 *
 * @ORM\Table(name="log_users", indexes={@ORM\Index(name="fk_user", columns={"users_id"})})
 * @ORM\Entity
 */
class LogUsers
{
    /**
     * @var string
     *
     * @ORM\Column(name="text_action", type="string", length=250, nullable=false)
     */
    private $textAction;

    /**
     * @var string
     *
     * @ORM\Column(name="action", type="string", length=150, nullable=false)
     */
    private $action;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

    /**
     * @var integer
     *
     * @ORM\Column(name="users_id", type="integer", nullable=false)
     */
    private $usersId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="visibilite", type="boolean", nullable=false)
     */
    private $visibilite;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set textAction
     *
     * @param string $textAction
     *
     * @return LogUsers
     */
    public function setTextAction($textAction)
    {
        $this->textAction = $textAction;

        return $this;
    }

    /**
     * Get textAction
     *
     * @return string
     */
    public function getTextAction()
    {
        return $this->textAction;
    }

    /**
     * Set action
     *
     * @param string $action
     *
     * @return LogUsers
     */
    public function setAction($action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * Get action
     *
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return LogUsers
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set usersId
     *
     * @param integer $usersId
     *
     * @return LogUsers
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

    /**
     * Set visibilite
     *
     * @param boolean $visibilite
     *
     * @return LogUsers
     */
    public function setVisibilite($visibilite)
    {
        $this->visibilite = $visibilite;

        return $this;
    }

    /**
     * Get visibilite
     *
     * @return boolean
     */
    public function getVisibilite()
    {
        return $this->visibilite;
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
