<?php

namespace Cabinet\MedicalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * rigime
 */
class rigime
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $libelle;


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
     * Set libelle
     *
     * @param string $libelle
     * @return rigime
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    
        return $this;
    }

    /**
     * Get libelle
     *
     * @return string 
     */
    public function getLibelle()
    {
        return $this->libelle;
    }
    /**
     * @var \Cabinet\MedicalBundle\Entity\patient
     */
    private $pat;

    /**
     * @var \Cabinet\MedicalBundle\Entity\securite
     */
    private $sec;


    /**
     * Set pat
     *
     * @param \Cabinet\MedicalBundle\Entity\patient $pat
     * @return rigime
     */
    public function setPat(\Cabinet\MedicalBundle\Entity\patient $pat = null)
    {
        $this->pat = $pat;
    
        return $this;
    }

    /**
     * Get pat
     *
     * @return \Cabinet\MedicalBundle\Entity\patient 
     */
    public function getPat()
    {
        return $this->pat;
    }

    /**
     * Set sec
     *
     * @param \Cabinet\MedicalBundle\Entity\securite $sec
     * @return rigime
     */
    public function setSec(\Cabinet\MedicalBundle\Entity\securite $sec = null)
    {
        $this->sec = $sec;
    
        return $this;
    }

    /**
     * Get sec
     *
     * @return \Cabinet\MedicalBundle\Entity\securite 
     */
    public function getSec()
    {
        return $this->sec;
    }
    public function __toString() {
        return $this->libelle;
    }
    /**
     * @var \Cabinet\MedicalBundle\Entity\User
     */
    private $user;


    /**
     * Set user
     *
     * @param \Cabinet\MedicalBundle\Entity\User $user
     * @return rigime
     */
    public function setUser(\Cabinet\MedicalBundle\Entity\User $user = null)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return \Cabinet\MedicalBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
}