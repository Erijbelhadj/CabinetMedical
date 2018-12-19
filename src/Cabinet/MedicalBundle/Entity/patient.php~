<?php

namespace Cabinet\MedicalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * patient
 */
class patient
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $codecnam;

    /**
     * @var string
     */
    private $handicape;

    /**
     * @var string
     */
    private $antecedent;

    /**
     * @var string
     */
    private $chirgui;

    /**
     * @var string
     */
    private $allergie;

    /**
     * @var string
     */
    private $traitementencour;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $consul;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $sec;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $rdve;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $opmed;
public function __toString() {
        return $this->codecnam;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->consul = new \Doctrine\Common\Collections\ArrayCollection();
        $this->sec = new \Doctrine\Common\Collections\ArrayCollection();
        $this->rdve = new \Doctrine\Common\Collections\ArrayCollection();
        $this->opmed = new \Doctrine\Common\Collections\ArrayCollection();
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

    /**
     * Set codecnam
     *
     * @param string $codecnam
     * @return patient
     */
    public function setCodecnam($codecnam)
    {
        $this->codecnam = $codecnam;
    
        return $this;
    }

    /**
     * Get codecnam
     *
     * @return string 
     */
    public function getCodecnam()
    {
        return $this->codecnam;
    }

    /**
     * Set handicape
     *
     * @param string $handicape
     * @return patient
     */
    public function setHandicape($handicape)
    {
        $this->handicape = $handicape;
    
        return $this;
    }

    /**
     * Get handicape
     *
     * @return string 
     */
    public function getHandicape()
    {
        return $this->handicape;
    }

    /**
     * Set antecedent
     *
     * @param string $antecedent
     * @return patient
     */
    public function setAntecedent($antecedent)
    {
        $this->antecedent = $antecedent;
    
        return $this;
    }

    /**
     * Get antecedent
     *
     * @return string 
     */
    public function getAntecedent()
    {
        return $this->antecedent;
    }

    /**
     * Set chirgui
     *
     * @param string $chirgui
     * @return patient
     */
    public function setChirgui($chirgui)
    {
        $this->chirgui = $chirgui;
    
        return $this;
    }

    /**
     * Get chirgui
     *
     * @return string 
     */
    public function getChirgui()
    {
        return $this->chirgui;
    }

    /**
     * Set allergie
     *
     * @param string $allergie
     * @return patient
     */
    public function setAllergie($allergie)
    {
        $this->allergie = $allergie;
    
        return $this;
    }

    /**
     * Get allergie
     *
     * @return string 
     */
    public function getAllergie()
    {
        return $this->allergie;
    }

    /**
     * Set traitementencour
     *
     * @param string $traitementencour
     * @return patient
     */
    public function setTraitementencour($traitementencour)
    {
        $this->traitementencour = $traitementencour;
    
        return $this;
    }

    /**
     * Get traitementencour
     *
     * @return string 
     */
    public function getTraitementencour()
    {
        return $this->traitementencour;
    }

    /**
     * Add consul
     *
     * @param \Cabinet\MedicalBundle\Entity\consultation $consul
     * @return patient
     */
    public function addConsul(\Cabinet\MedicalBundle\Entity\consultation $consul)
    {
        $this->consul[] = $consul;
    
        return $this;
    }

    /**
     * Remove consul
     *
     * @param \Cabinet\MedicalBundle\Entity\consultation $consul
     */
    public function removeConsul(\Cabinet\MedicalBundle\Entity\consultation $consul)
    {
        $this->consul->removeElement($consul);
    }

    /**
     * Get consul
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getConsul()
    {
        return $this->consul;
    }

    /**
     * Add sec
     *
     * @param \Cabinet\MedicalBundle\Entity\securite $sec
     * @return patient
     */
    public function addSec(\Cabinet\MedicalBundle\Entity\securite $sec)
    {
        $this->sec[] = $sec;
    
        return $this;
    }

    /**
     * Remove sec
     *
     * @param \Cabinet\MedicalBundle\Entity\securite $sec
     */
    public function removeSec(\Cabinet\MedicalBundle\Entity\securite $sec)
    {
        $this->sec->removeElement($sec);
    }

    /**
     * Get sec
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSec()
    {
        return $this->sec;
    }

    /**
     * Add rdve
     *
     * @param \Cabinet\MedicalBundle\Entity\rdv $rdve
     * @return patient
     */
    public function addRdve(\Cabinet\MedicalBundle\Entity\rdv $rdve)
    {
        $this->rdve[] = $rdve;
    
        return $this;
    }

    /**
     * Remove rdve
     *
     * @param \Cabinet\MedicalBundle\Entity\rdv $rdve
     */
    public function removeRdve(\Cabinet\MedicalBundle\Entity\rdv $rdve)
    {
        $this->rdve->removeElement($rdve);
    }

    /**
     * Get rdve
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRdve()
    {
        return $this->rdve;
    }

    /**
     * Add opmed
     *
     * @param \Cabinet\MedicalBundle\Entity\operationmed $opmed
     * @return patient
     */
    public function addOpmed(\Cabinet\MedicalBundle\Entity\operationmed $opmed)
    {
        $this->opmed[] = $opmed;
    
        return $this;
    }

    /**
     * Remove opmed
     *
     * @param \Cabinet\MedicalBundle\Entity\operationmed $opmed
     */
    public function removeOpmed(\Cabinet\MedicalBundle\Entity\operationmed $opmed)
    {
        $this->opmed->removeElement($opmed);
    }

    /**
     * Get opmed
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getOpmed()
    {
        return $this->opmed;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $rigime;


    /**
     * Add rigime
     *
     * @param \Cabinet\MedicalBundle\Entity\rigime $rigime
     * @return patient
     */
    public function addRigime(\Cabinet\MedicalBundle\Entity\rigime $rigime)
    {
        $this->rigime[] = $rigime;
    
        return $this;
    }

    /**
     * Remove rigime
     *
     * @param \Cabinet\MedicalBundle\Entity\rigime $rigime
     */
    public function removeRigime(\Cabinet\MedicalBundle\Entity\rigime $rigime)
    {
        $this->rigime->removeElement($rigime);
    }

    /**
     * Get rigime
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRigime()
    {
        return $this->rigime;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $charge;


    /**
     * Add charge
     *
     * @param \Cabinet\MedicalBundle\Entity\prisecharge $charge
     * @return patient
     */
    public function addCharge(\Cabinet\MedicalBundle\Entity\prisecharge $charge)
    {
        $this->charge[] = $charge;
    
        return $this;
    }

    /**
     * Remove charge
     *
     * @param \Cabinet\MedicalBundle\Entity\prisecharge $charge
     */
    public function removeCharge(\Cabinet\MedicalBundle\Entity\prisecharge $charge)
    {
        $this->charge->removeElement($charge);
    }

    /**
     * Get charge
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCharge()
    {
        return $this->charge;
    }
    /**
     * @var \Cabinet\MedicalBundle\Entity\User
     */
    private $us;


    /**
     * Set us
     *
     * @param \Cabinet\MedicalBundle\Entity\User $us
     * @return patient
     */
    public function setUs(\Cabinet\MedicalBundle\Entity\User $us = null)
    {
        $this->us = $us;
    
        return $this;
    }

    /**
     * Get us
     *
     * @return \Cabinet\MedicalBundle\Entity\User 
     */
    public function getUs()
    {
        return $this->us;
    }
}