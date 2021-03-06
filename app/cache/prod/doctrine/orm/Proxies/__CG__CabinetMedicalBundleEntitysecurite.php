<?php

namespace Proxies\__CG__\Cabinet\MedicalBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class securite extends \Cabinet\MedicalBundle\Entity\securite implements \Doctrine\ORM\Proxy\Proxy
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

    public function setDatedebut($datedebut)
    {
        $this->__load();
        return parent::setDatedebut($datedebut);
    }

    public function getDatedebut()
    {
        $this->__load();
        return parent::getDatedebut();
    }

    public function setDatefin($datefin)
    {
        $this->__load();
        return parent::setDatefin($datefin);
    }

    public function getDatefin()
    {
        $this->__load();
        return parent::getDatefin();
    }

    public function addCabin(\Cabinet\MedicalBundle\Entity\cabinet $cabin)
    {
        $this->__load();
        return parent::addCabin($cabin);
    }

    public function removeCabin(\Cabinet\MedicalBundle\Entity\cabinet $cabin)
    {
        $this->__load();
        return parent::removeCabin($cabin);
    }

    public function getCabin()
    {
        $this->__load();
        return parent::getCabin();
    }

    public function setPat(\Cabinet\MedicalBundle\Entity\patient $pat = NULL)
    {
        $this->__load();
        return parent::setPat($pat);
    }

    public function getPat()
    {
        $this->__load();
        return parent::getPat();
    }

    public function addRigimem(\Cabinet\MedicalBundle\Entity\rigime $rigimem)
    {
        $this->__load();
        return parent::addRigimem($rigimem);
    }

    public function removeRigimem(\Cabinet\MedicalBundle\Entity\rigime $rigimem)
    {
        $this->__load();
        return parent::removeRigimem($rigimem);
    }

    public function getRigimem()
    {
        $this->__load();
        return parent::getRigimem();
    }

    public function setProfilePicture($profilePicture)
    {
        $this->__load();
        return parent::setProfilePicture($profilePicture);
    }

    public function getProfilePicture()
    {
        $this->__load();
        return parent::getProfilePicture();
    }

    public function __toString()
    {
        $this->__load();
        return parent::__toString();
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


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'type', 'datedebut', 'datefin', 'cabin', 'rigimem', 'pat', 'user');
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