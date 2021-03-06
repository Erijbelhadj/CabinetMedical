<?php

namespace Proxies\__CG__\Cabinet\MedicalBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class consultation extends \Cabinet\MedicalBundle\Entity\consultation implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setName($name)
    {
        $this->__load();
        return parent::setName($name);
    }

    public function getName()
    {
        $this->__load();
        return parent::getName();
    }

    public function setImage($image)
    {
        $this->__load();
        return parent::setImage($image);
    }

    public function getImage()
    {
        $this->__load();
        return parent::getImage();
    }

    public function setTraitement($traitement)
    {
        $this->__load();
        return parent::setTraitement($traitement);
    }

    public function getTraitement()
    {
        $this->__load();
        return parent::getTraitement();
    }

    public function setType($type)
    {
        $this->__load();
        return parent::setType($type);
    }

    public function getType()
    {
        $this->__load();
        return parent::getType();
    }

    public function setDate($date)
    {
        $this->__load();
        return parent::setDate($date);
    }

    public function getDate()
    {
        $this->__load();
        return parent::getDate();
    }

    public function setConclusion($conclusion)
    {
        $this->__load();
        return parent::setConclusion($conclusion);
    }

    public function getConclusion()
    {
        $this->__load();
        return parent::getConclusion();
    }

    public function setMedecin(\Cabinet\MedicalBundle\Entity\medecin $medecin = NULL)
    {
        $this->__load();
        return parent::setMedecin($medecin);
    }

    public function getMedecin()
    {
        $this->__load();
        return parent::getMedecin();
    }

    public function setPatient(\Cabinet\MedicalBundle\Entity\patient $patient = NULL)
    {
        $this->__load();
        return parent::setPatient($patient);
    }

    public function getPatient()
    {
        $this->__load();
        return parent::getPatient();
    }

    public function upload()
    {
        $this->__load();
        return parent::upload();
    }

    public function storeFilenameForRemove()
    {
        $this->__load();
        return parent::storeFilenameForRemove();
    }

    public function removeUpload()
    {
        $this->__load();
        return parent::removeUpload();
    }

    public function getAbsolutePath()
    {
        $this->__load();
        return parent::getAbsolutePath();
    }

    public function getWebPath()
    {
        $this->__load();
        return parent::getWebPath();
    }

    public function setUser(\Cabinet\MedicalBundle\Entity\User $user = NULL)
    {
        $this->__load();
        return parent::setUser($user);
    }

    public function getUser()
    {
        $this->__load();
        return parent::getUser();
    }

    public function setCabinetc(\Cabinet\MedicalBundle\Entity\cabinet $cabinetc = NULL)
    {
        $this->__load();
        return parent::setCabinetc($cabinetc);
    }

    public function getCabinetc()
    {
        $this->__load();
        return parent::getCabinetc();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'name', 'traitement', 'type', 'date', 'conclusion', 'medecin', 'patient', 'cabinetc', 'user');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}