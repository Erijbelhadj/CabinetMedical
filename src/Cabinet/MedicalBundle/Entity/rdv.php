<?php

namespace Cabinet\MedicalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * rdv
 */
class rdv
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $titre;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var integer
     */
    private $num;

    /**
     * @var \Cabinet\MedicalBundle\Entity\medecin
     */
    private $med;

    /**
     * @var \Cabinet\MedicalBundle\Entity\patient
     */
    private $patient;

    /**
     * @var \Cabinet\MedicalBundle\Entity\cabinet
     */
    private $cabinet;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set titre
     *
     * @param string $titre
     * @return rdv
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    
        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return rdv
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set num
     *
     * @param integer $num
     * @return rdv
     */
    public function setNum($num)
    {
        $this->num = $num;
    
        return $this;
    }

    /**
     * Get num
     *
     * @return integer 
     */
    public function getNum()
    {
        return $this->num;
    }

    /**
     * Set med
     *
     * @param \Cabinet\MedicalBundle\Entity\medecin $med
     * @return rdv
     */
    public function setMed(\Cabinet\MedicalBundle\Entity\medecin $med = null)
    {
        $this->med = $med;
    
        return $this;
    }

    /**
     * Get med
     *
     * @return \Cabinet\MedicalBundle\Entity\medecin 
     */
    public function getMed()
    {
        return $this->med;
    }

    /**
     * Set patient
     *
     * @param \Cabinet\MedicalBundle\Entity\patient $patient
     * @return rdv
     */
    public function setPatient(\Cabinet\MedicalBundle\Entity\patient $patient = null)
    {
        $this->patient = $patient;
    
        return $this;
    }

    /**
     * Get patient
     *
     * @return \Cabinet\MedicalBundle\Entity\patient 
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * Set cabinet
     *
     * @param \Cabinet\MedicalBundle\Entity\cabinet $cabinet
     * @return rdv
     */
    public function setCabinet(\Cabinet\MedicalBundle\Entity\cabinet $cabinet = null)
    {
        $this->cabinet = $cabinet;
    
        return $this;
    }

    /**
     * Get cabinet
     *
     * @return \Cabinet\MedicalBundle\Entity\cabinet 
     */
    public function getCabinet()
    {
        return $this->cabinet;
    }
    /**
     * @var integer
     */
    private $active;


    /**
     * Set active
     *
     * @param integer $active
     * @return rdv
     */
    public function setActive($active)
    {
        $this->active = $active;
    
        return $this;
    }

    /**
     * Get active
     *
     * @return integer 
     */
    public function getActive()
    {
        return $this->active;
    }
    /**
     * @var \Cabinet\MedicalBundle\Entity\User
     */
    private $user4;


    /**
     * Set user4
     *
     * @param \Cabinet\MedicalBundle\Entity\User $user4
     * @return rdv
     */
    public function setUser4(\Cabinet\MedicalBundle\Entity\User $user4 = null)
    {
        $this->user4 = $user4;
    
        return $this;
    }

    /**
     * Get user4
     *
     * @return \Cabinet\MedicalBundle\Entity\User 
     */
    public function getUser4()
    {
        return $this->user4;
    }
}