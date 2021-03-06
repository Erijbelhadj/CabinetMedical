<?php

namespace Cabinet\MedicalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * consultation
 */
class consultation
{
    /**
     * @var integer
     */
    private $id;
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
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $image;

    /**
     * @var string
     */
    private $traitement;

    /**
     * @var string
     */
    private $type;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var string
     */
    private $conclusion;

    /**
     * @var \Cabinet\MedicalBundle\Entity\medecin
     */
    private $medecin;

    /**
     * @var \Cabinet\MedicalBundle\Entity\patient
     */
    private $patient;


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
     * Set name
     *
     * @param string $name
     * @return consultation
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set image
     *
     * @param string $image
     * @return consultation
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

    /**
     * Set traitement
     *
     * @param string $traitement
     * @return consultation
     */
    public function setTraitement($traitement)
    {
        $this->traitement = $traitement;
    
        return $this;
    }

    /**
     * Get traitement
     *
     * @return string 
     */
    public function getTraitement()
    {
        return $this->traitement;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return consultation
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
     * Set date
     *
     * @param \DateTime $date
     * @return consultation
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
     * Set conclusion
     *
     * @param string $conclusion
     * @return consultation
     */
    public function setConclusion($conclusion)
    {
        $this->conclusion = $conclusion;
    
        return $this;
    }

    /**
     * Get conclusion
     *
     * @return string 
     */
    public function getConclusion()
    {
        return $this->conclusion;
    }

    /**
     * Set medecin
     *
     * @param \Cabinet\MedicalBundle\Entity\medecin $medecin
     * @return consultation
     */
    public function setMedecin(\Cabinet\MedicalBundle\Entity\medecin $medecin = null)
    {
        $this->medecin = $medecin;
    
        return $this;
    }

    /**
     * Get medecin
     *
     * @return \Cabinet\MedicalBundle\Entity\medecin 
     */
    public function getMedecin()
    {
        return $this->medecin;
    }

    /**
     * Set patient
     *
     * @param \Cabinet\MedicalBundle\Entity\patient $patient
     * @return consultation
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
     * @var \Cabinet\MedicalBundle\Entity\User
     */
    private $user;


    /**
     * Set user
     *
     * @param \Cabinet\MedicalBundle\Entity\User $user
     * @return consultation
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
    /**
     * @var \Cabinet\MedicalBundle\Entity\cabinet
     */
    private $cabinetc;


    /**
     * Set cabinetc
     *
     * @param \Cabinet\MedicalBundle\Entity\cabinet $cabinetc
     * @return consultation
     */
    public function setCabinetc(\Cabinet\MedicalBundle\Entity\cabinet $cabinetc = null)
    {
        $this->cabinetc = $cabinetc;
    
        return $this;
    }

    /**
     * Get cabinetc
     *
     * @return \Cabinet\MedicalBundle\Entity\cabinet 
     */
    public function getCabinetc()
    {
        return $this->cabinetc;
    }
}