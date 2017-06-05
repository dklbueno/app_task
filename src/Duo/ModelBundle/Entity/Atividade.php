<?php

namespace Duo\ModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Atividade
 *
 * @ORM\Table(name="atividade")
 * @ORM\Entity(repositoryClass="Duo\ModelBundle\Repository\AtividadeRepository")
 */
class Atividade
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     * @Assert\NotBlank  
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=600)
     * @Assert\NotBlank  
     */
    private $description;

    /**
    * @var \DateTime
    * @ORM\Column(name="start_date", type="datetime")
    * @Assert\NotBlank  
    */
    private $startDate;

    /**
    * @var \DateTime
    * @ORM\Column(name="end_date", type="datetime")
    * @Assert\NotBlank  
    */
    private $endDate;

    /**
    * @var int
    * @ORM\Column(name="situation", type="integer")
    */
    private $situation;

    /**
    * @var int
    * @ORM\Column(name="status_id", type="integer")
    * @Assert\NotBlank  
    */
    private $status_id;   

        /**
    * Construct
    */
    public function __construct()
    {
        //$this->startDate = new \DateTime();
    }

    /**
     * Set id
     *
     * @param int $id
     *
     * @return Atividade
     */
    public function setId($id)
    {
        $this->id = $id;
        
        return $this;
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Atividade
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Atividade
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set startDate
     *
     * @return Atividade
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get startDate
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set endDate
     *
     * @return Atividade
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Get endDate
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Set situation
     *
     * @param boolean $situation
     *
     * @return Atividade
     */
    public function setSituation($situation)
    {
        $this->situation = $situation;

        return $this;
    }

    /**
     * Get situation
     *
     * @return boolean
     */
    public function getSituation()
    {
        return $this->situation;
    }

    /**
     * Set status_id
     *
     * @param int $situation
     *
     * @return Atividade
     */
    public function setStatusId($status_id)
    {
        $this->status_id = $status_id;

        return $this;
    }

    /**
     * Get status_id
     *
     * @return int
     */
    public function getStatusId()
    {
        return $this->status_id;
    }

    
}

