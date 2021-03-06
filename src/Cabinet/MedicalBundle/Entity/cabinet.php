<?php

namespace Cabinet\MedicalBundle\Entity;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * cabinet
 */
class cabinet
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $adresse;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $phone;

    /**
     * @var string
     */
    private $phonem;

    /**
     * @var string
     */
    private $fax;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $rdvc;

    /**
     * @var \Cabinet\MedicalBundle\Entity\User
     */
    private $user2;

    /**
     * @var \Cabinet\MedicalBundle\Entity\securite
     */
    private $securite;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $medecin;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->rdvc = new \Doctrine\Common\Collections\ArrayCollection();
        $this->medecin = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set nom
     *
     * @param string $nom
     * @return cabinet
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
     * Image file
     *
     * @var File
     *     
     * @Assert\Valid
     */
    public $file;
    private $filenameForRemove;
    /**

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return cabinet
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    
        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return cabinet
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return cabinet
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
     * Set phonem
     *
     * @param string $phonem
     * @return cabinet
     */
    public function setPhonem($phonem)
    {
        $this->phonem = $phonem;
    
        return $this;
    }

    /**
     * Get phonem
     *
     * @return string 
     */
    public function getPhonem()
    {
        return $this->phonem;
    }

    /**
     * Set fax
     *
     * @param string $fax
     * @return cabinet
     */
    public function setFax($fax)
    {
        $this->fax = $fax;
    
        return $this;
    }

    /**
     * Get fax
     *
     * @return string 
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Add rdvc
     *
     * @param \Cabinet\MedicalBundle\Entity\rdv $rdvc
     * @return cabinet
     */
    public function addRdvc(\Cabinet\MedicalBundle\Entity\rdv $rdvc)
    {
        $this->rdvc[] = $rdvc;
    
        return $this;
    }

    /**
     * Remove rdvc
     *
     * @param \Cabinet\MedicalBundle\Entity\rdv $rdvc
     */
    public function removeRdvc(\Cabinet\MedicalBundle\Entity\rdv $rdvc)
    {
        $this->rdvc->removeElement($rdvc);
    }

    /**
     * Get rdvc
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRdvc()
    {
        return $this->rdvc;
    }

    /**
     * Set user2
     *
     * @param \Cabinet\MedicalBundle\Entity\User $user2
     * @return cabinet
     */
    public function setUser2(\Cabinet\MedicalBundle\Entity\User $user2 = null)
    {
        $this->user2 = $user2;
    
        return $this;
    }

    /**
     * Get user2
     *
     * @return \Cabinet\MedicalBundle\Entity\User 
     */
    public function getUser2()
    {
        return $this->user2;
    }

    /**
     * Set securite
     *
     * @param \Cabinet\MedicalBundle\Entity\securite $securite
     * @return cabinet
     */
    public function setSecurite(\Cabinet\MedicalBundle\Entity\securite $securite = null)
    {
        $this->securite = $securite;
    
        return $this;
    }

    /**
     * Get securite
     *
     * @return \Cabinet\MedicalBundle\Entity\securite 
     */
    public function getSecurite()
    {
        return $this->securite;
    }

    /**
     * Add medecin
     *
     * @param \Cabinet\MedicalBundle\Entity\medecin $medecin
     * @return cabinet
     */
    public function addMedecin(\Cabinet\MedicalBundle\Entity\medecin $medecin)
    {
        $this->medecin[] = $medecin;
    
        return $this;
    }

    /**
     * Remove medecin
     *
     * @param \Cabinet\MedicalBundle\Entity\medecin $medecin
     */
    public function removeMedecin(\Cabinet\MedicalBundle\Entity\medecin $medecin)
    {
        $this->medecin->removeElement($medecin);
    }

    /**
     * Get medecin
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMedecin()
    {
        return $this->medecin;
    }
    public function __toString() {
        return $this->nom;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $opmedcab;


    /**
     * Add opmedcab
     *
     * @param \Cabinet\MedicalBundle\Entity\Operationmed $opmedcab
     * @return cabinet
     */
    public function addOpmedcab(\Cabinet\MedicalBundle\Entity\Operationmed $opmedcab)
    {
        $this->opmedcab[] = $opmedcab;
    
        return $this;
    }

    /**
     * Remove opmedcab
     *
     * @param \Cabinet\MedicalBundle\Entity\Operationmed $opmedcab
     */
    public function removeOpmedcab(\Cabinet\MedicalBundle\Entity\Operationmed $opmedcab)
    {
        $this->opmedcab->removeElement($opmedcab);
    }

    /**
     * Get opmedcab
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getOpmedcab()
    {
        return $this->opmedcab;
    }
    /**
     * @var string
     */
    private $image;


    /**
     * Set image
     *
     * @param string $image
     * @return cabinet
     */
    public function setImage($image)
    {
        $this->image = $image;
    
        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }
    
    ///code image
    
    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function preUpload() {
        if (null !== $this->file) {
            $this->image = sha1(uniqid(mt_rand(), true)) . '.' . $this->file->guessExtension();
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
        $this->file->move($this->getUploadRootDir(), $this->image);
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
        return null === $this->image ? null : $this->getUploadRootDir() . '/' . $this->image;
    }

    public function getWebPath() {
        return null === $this->image ? null : $this->getUploadDir() . '/' . $this->image;
    }

    protected function getUploadRootDir() {
        // le chemin absolu du répertoire où les documents uploadés doivent être sauvegardés
        return __DIR__ . '/../../../../web/' . $this->getUploadDir();
    }

    protected function getUploadDir() {
        // on se débarrasse de « __DIR__ » afin de ne pas avoir de problème lorsqu'on affiche
        // le entity/image dans la vue.
        return 'uploads/entities';
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $consultationcab;


    /**
     * Add consultationcab
     *
     * @param \Cabinet\MedicalBundle\Entity\consultation $consultationcab
     * @return cabinet
     */
    public function addConsultationcab(\Cabinet\MedicalBundle\Entity\consultation $consultationcab)
    {
        $this->consultationcab[] = $consultationcab;
    
        return $this;
    }

    /**
     * Remove consultationcab
     *
     * @param \Cabinet\MedicalBundle\Entity\consultation $consultationcab
     */
    public function removeConsultationcab(\Cabinet\MedicalBundle\Entity\consultation $consultationcab)
    {
        $this->consultationcab->removeElement($consultationcab);
    }

    /**
     * Get consultationcab
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getConsultationcab()
    {
        return $this->consultationcab;
    }
}