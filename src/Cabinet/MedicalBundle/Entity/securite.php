<?php

namespace Cabinet\MedicalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cabinet\MedicalBundle\Entity\securite
 */
class securite
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $type
     */
    private $type;

    /**
     * @var \DateTime $datedebut
     */
    private $datedebut;

    /**
     * @var \DateTime $datefin
     */
    private $datefin;


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
     * Set type
     *
     * @param string $type
     * @return securite
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set datedebut
     *
     * @param \DateTime $datedebut
     * @return securite
     */
    public function setDatedebut($datedebut)
    {
        $this->datedebut = $datedebut;
    
        return $this;
    }

    /**
     * Get datedebut
     *
     * @return \DateTime 
     */
    public function getDatedebut()
    {
        return $this->datedebut;
    }

    /**
     * Set datefin
     *
     * @param \DateTime $datefin
     * @return securite
     */
    public function setDatefin($datefin)
    {
        $this->datefin = $datefin;
    
        return $this;
    }

    /**
     * Get datefin
     *
     * @return \DateTime 
     */
    public function getDatefin()
    {
        return $this->datefin;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $cabin;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->cabin = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add cabin
     *
     * @param \Cabinet\MedicalBundle\Entity\cabinet $cabin
     * @return securite
     */
    public function addCabin(\Cabinet\MedicalBundle\Entity\cabinet $cabin)
    {
        $this->cabin[] = $cabin;
    
        return $this;
    }

    /**
     * Remove cabin
     *
     * @param \Cabinet\MedicalBundle\Entity\cabinet $cabin
     */
    public function removeCabin(\Cabinet\MedicalBundle\Entity\cabinet $cabin)
    {
        $this->cabin->removeElement($cabin);
    }

    /**
     * Get cabin
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCabin()
    {
        return $this->cabin;
    }
    /**
     * @var \Cabinet\MedicalBundle\Entity\patient
     */
    private $pat;


    /**
     * Set pat
     *
     * @param \Cabinet\MedicalBundle\Entity\patient $pat
     * @return securite
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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $rigimem;


    /**
     * Add rigimem
     *
     * @param \Cabinet\MedicalBundle\Entity\rigime $rigimem
     * @return securite
     */
    public function addRigimem(\Cabinet\MedicalBundle\Entity\rigime $rigimem)
    {
        $this->rigimem[] = $rigimem;
    
        return $this;
    }

    /**
     * Remove rigimem
     *
     * @param \Cabinet\MedicalBundle\Entity\rigime $rigimem
     */
    public function removeRigimem(\Cabinet\MedicalBundle\Entity\rigime $rigimem)
    {
        $this->rigimem->removeElement($rigimem);
    }

    /**
     * Get rigimem
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRigimem()
    {
        return $this->rigimem;
    }
    /**
     * @var string
     */
    private $profilePicture;


    /**
     * Set profilePicture
     *
     * @param string $profilePicture
     * @return securite
     */
    public function setProfilePicture($profilePicture)
    {
        $this->profilePicture = $profilePicture;
    
        return $this;
    }

    /**
     * Get profilePicture
     *
     * @return string 
     */
    public function getProfilePicture()
    {
        return $this->profilePicture;
    }
     public function __toString() {
        return $this->type;
    }
    /**
     * @var \Cabinet\MedicalBundle\Entity\User
     */
    private $user;


    /**
     * Set user
     *
     * @param \Cabinet\MedicalBundle\Entity\User $user
     * @return securite
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