<?php

namespace Cabinet\MedicalBundle\Entity;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * User
 */
class User extends BaseUser
{
    /**
     * @var integer
     */
    protected $id;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $prenom;

    /**
     * @var string
     */
    private $cin;

    /**
     * @var string
     */
    private $phone;

    /**
     * @var string
     */
    private $niveau;

    /**
     * @var string
     */
    private $specialite;

   

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $actualite;

    /**
     * Constructor
     */
    public function __construct()
   {
       parent::__construct();
       // your own logic
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
     * Image file
     *
     * @var File
     *     
     * @Assert\Valid
     */
    public $file;
    /**
     * Set nom
     *
     * @param string $nom
     * @return User
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    
        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return User
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    
        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set cin
     *
     * @param string $cin
     * @return User
     */
    public function setCin($cin)
    {
        $this->cin = $cin;
    
        return $this;
    }

    /**
     * Get cin
     *
     * @return string 
     */
    public function getCin()
    {
        return $this->cin;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return User
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    
        return $this;
    }

    /**
     * Get phone
     *
     * @return string 
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set niveau
     *
     * @param string $niveau
     * @return User
     */
    public function setNiveau($niveau)
    {
        $this->niveau = $niveau;
    
        return $this;
    }

    /**
     * Get niveau
     *
     * @return string 
     */
    public function getNiveau()
    {
        return $this->niveau;
    }

    /**
     * Set specialite
     *
     * @param string $specialite
     * @return User
     */
    public function setSpecialite($specialite)
    {
        $this->specialite = $specialite;
    
        return $this;
    }

    /**
     * Get specialite
     *
     * @return string 
     */
    public function getSpecialite()
    {
        return $this->specialite;
    }

    

    /**
     * Add actualite
     *
     * @param \Cabinet\MedicalBundle\Entity\actualite $actualite
     * @return User
     */
    public function addActualite(\Cabinet\MedicalBundle\Entity\actualite $actualite)
    {
        $this->actualite[] = $actualite;
    
        return $this;
    }

    /**
     * Remove actualite
     *
     * @param \Cabinet\MedicalBundle\Entity\actualite $actualite
     */
    public function removeActualite(\Cabinet\MedicalBundle\Entity\actualite $actualite)
    {
        $this->actualite->removeElement($actualite);
    }

    /**
     * Get actualite
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getActualite()
    {
        return $this->actualite;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $cabinet;


    /**
     * Add cabinet
     *
     * @param \Cabinet\MedicalBundle\Entity\cabinet $cabinet
     * @return User
     */
    public function addCabinet(\Cabinet\MedicalBundle\Entity\cabinet $cabinet)
    {
        $this->cabinet[] = $cabinet;
    
        return $this;
    }

    /**
     * Remove cabinet
     *
     * @param \Cabinet\MedicalBundle\Entity\cabinet $cabinet
     */
    public function removeCabinet(\Cabinet\MedicalBundle\Entity\cabinet $cabinet)
    {
        $this->cabinet->removeElement($cabinet);
    }

    /**
     * Get cabinet
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCabinet()
    {
        return $this->cabinet;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $contact;


    /**
     * Add contact
     *
     * @param \Cabinet\MedicalBundle\Entity\contact $contact
     * @return User
     */
    public function addContact(\Cabinet\MedicalBundle\Entity\contact $contact)
    {
        $this->contact[] = $contact;
    
        return $this;
    }

    /**
     * Remove contact
     *
     * @param \Cabinet\MedicalBundle\Entity\contact $contact
     */
    
    
    public function __toString() {
        return $this->nom . " " . $this->prenom;
    }
    public function removeContact(\Cabinet\MedicalBundle\Entity\contact $contact)
    {
        $this->contact->removeElement($contact);
    }

    /**
     * Get contact
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getContact()
    {
        return $this->contact;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $rdvu;


    /**
     * Add rdvu
     *
     * @param \Cabinet\MedicalBundle\Entity\rdv $rdvu
     * @return User
     */
    public function addRdvu(\Cabinet\MedicalBundle\Entity\rdv $rdvu)
    {
        $this->rdvu[] = $rdvu;
    
        return $this;
    }

    /**
     * Remove rdvu
     *
     * @param \Cabinet\MedicalBundle\Entity\rdv $rdvu
     */
    public function removeRdvu(\Cabinet\MedicalBundle\Entity\rdv $rdvu)
    {
        $this->rdvu->removeElement($rdvu);
    }

    /**
     * Get rdvu
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRdvu()
    {
        return $this->rdvu;
    }
    /**
     * @var \Cabinet\MedicalBundle\Entity\patient
     */
    private $pat;


    /**
     * Set pat
     *
     * @param \Cabinet\MedicalBundle\Entity\patient $pat
     * @return User
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
     * @var \Cabinet\MedicalBundle\Entity\medecin
     */
    private $med;


    /**
     * Set med
     *
     * @param \Cabinet\MedicalBundle\Entity\medecin $med
     * @return User
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
     * @var string
     */
    private $profilePicture;


    /**
     * Set profilePicture
     *
     * @param string $profilePicture
     * @return User
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
    
    private $filenameForRemove;

    /*     * *************************************************************** */

    ///code profilePicture
    
    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function preUpload() {
        if (null !== $this->file) {
            $this->profilePicture = sha1(uniqid(mt_rand(), true)) . '.' . $this->file->guessExtension();
        }
    }

    /**
     * @ORM\PostPersist()
     * @ORM\PostUpdate()
     */
    public function upload() {
        if (null === $this->file) {
            return;
        }
        $this->file->move($this->getUploadRootDir(), $this->profilePicture);
        unset($this->file);
    }

    /**
     * @ORM\PreRemove()
     */
    public function storeFilenameForRemove() {
        $this->filenameForRemove = $this->getAbsolutePath();
    }

    /**
     * @ORM\PostRemove()
     */
    public function removeUpload() {
        if ($this->filenameForRemove) {
            unlink($this->filenameForRemove);
        }
    }

    public function getAbsolutePath() {
        return null === $this->profilePicture ? null : $this->getUploadRootDir() . '/' . $this->profilePicture;
    }

    public function getWebPath() {
        return null === $this->profilePicture ? null : $this->getUploadDir() . '/' . $this->profilePicture;
    }

    protected function getUploadRootDir() {
        // le chemin absolu du répertoire où les documents uploadés doivent être sauvegardés
        return __DIR__ . '/../../../../web/' . $this->getUploadDir();
    }

    protected function getUploadDir() {
        // on se débarrasse de « __DIR__ » afin de ne pas avoir de problème lorsqu'on affiche
        // le entity/profilePicture dans la vue.
        return 'uploads/entities';
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $opmeduser;


    /**
     * Add opmeduser
     *
     * @param \Cabinet\MedicalBundle\Entity\operationmed $opmeduser
     * @return User
     */
    public function addOpmeduser(\Cabinet\MedicalBundle\Entity\operationmed $opmeduser)
    {
        $this->opmeduser[] = $opmeduser;
    
        return $this;
    }

    /**
     * Remove opmeduser
     *
     * @param \Cabinet\MedicalBundle\Entity\operationmed $opmeduser
     */
    public function removeOpmeduser(\Cabinet\MedicalBundle\Entity\operationmed $opmeduser)
    {
        $this->opmeduser->removeElement($opmeduser);
    }

    /**
     * Get opmeduser
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getOpmeduser()
    {
        return $this->opmeduser;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $rigimuser;


    /**
     * Add rigimuser
     *
     * @param \Cabinet\MedicalBundle\Entity\rigime $rigimuser
     * @return User
     */
    public function addRigimuser(\Cabinet\MedicalBundle\Entity\rigime $rigimuser)
    {
        $this->rigimuser[] = $rigimuser;
    
        return $this;
    }

    /**
     * Remove rigimuser
     *
     * @param \Cabinet\MedicalBundle\Entity\rigime $rigimuser
     */
    public function removeRigimuser(\Cabinet\MedicalBundle\Entity\rigime $rigimuser)
    {
        $this->rigimuser->removeElement($rigimuser);
    }

    /**
     * Get rigimuser
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRigimuser()
    {
        return $this->rigimuser;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $secuser;


    /**
     * Add secuser
     *
     * @param \Cabinet\MedicalBundle\Entity\securite $secuser
     * @return User
     */
    public function addSecuser(\Cabinet\MedicalBundle\Entity\securite $secuser)
    {
        $this->secuser[] = $secuser;
    
        return $this;
    }

    /**
     * Remove secuser
     *
     * @param \Cabinet\MedicalBundle\Entity\securite $secuser
     */
    public function removeSecuser(\Cabinet\MedicalBundle\Entity\securite $secuser)
    {
        $this->secuser->removeElement($secuser);
    }

    /**
     * Get secuser
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSecuser()
    {
        return $this->secuser;
    }
    /**
     * @var string
     */
    private $poste;


    /**
     * Set poste
     *
     * @param string $poste
     * @return User
     */
    public function setPoste($poste)
    {
        $this->poste = $poste;
    
        return $this;
    }

    /**
     * Get poste
     *
     * @return string 
     */
    public function getPoste()
    {
        return $this->poste;
    }
}