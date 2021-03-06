<?php

namespace Proxies\__CG__\Cabinet\MedicalBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class User extends \Cabinet\MedicalBundle\Entity\User implements \Doctrine\ORM\Proxy\Proxy
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

    public function setNom($nom)
    {
        $this->__load();
        return parent::setNom($nom);
    }

    public function getNom()
    {
        $this->__load();
        return parent::getNom();
    }

    public function setPrenom($prenom)
    {
        $this->__load();
        return parent::setPrenom($prenom);
    }

    public function getPrenom()
    {
        $this->__load();
        return parent::getPrenom();
    }

    public function setCin($cin)
    {
        $this->__load();
        return parent::setCin($cin);
    }

    public function getCin()
    {
        $this->__load();
        return parent::getCin();
    }

    public function setPhone($phone)
    {
        $this->__load();
        return parent::setPhone($phone);
    }

    public function getPhone()
    {
        $this->__load();
        return parent::getPhone();
    }

    public function setNiveau($niveau)
    {
        $this->__load();
        return parent::setNiveau($niveau);
    }

    public function getNiveau()
    {
        $this->__load();
        return parent::getNiveau();
    }

    public function setSpecialite($specialite)
    {
        $this->__load();
        return parent::setSpecialite($specialite);
    }

    public function getSpecialite()
    {
        $this->__load();
        return parent::getSpecialite();
    }

    public function addActualite(\Cabinet\MedicalBundle\Entity\actualite $actualite)
    {
        $this->__load();
        return parent::addActualite($actualite);
    }

    public function removeActualite(\Cabinet\MedicalBundle\Entity\actualite $actualite)
    {
        $this->__load();
        return parent::removeActualite($actualite);
    }

    public function getActualite()
    {
        $this->__load();
        return parent::getActualite();
    }

    public function addCabinet(\Cabinet\MedicalBundle\Entity\cabinet $cabinet)
    {
        $this->__load();
        return parent::addCabinet($cabinet);
    }

    public function removeCabinet(\Cabinet\MedicalBundle\Entity\cabinet $cabinet)
    {
        $this->__load();
        return parent::removeCabinet($cabinet);
    }

    public function getCabinet()
    {
        $this->__load();
        return parent::getCabinet();
    }

    public function addContact(\Cabinet\MedicalBundle\Entity\contact $contact)
    {
        $this->__load();
        return parent::addContact($contact);
    }

    public function __toString()
    {
        $this->__load();
        return parent::__toString();
    }

    public function removeContact(\Cabinet\MedicalBundle\Entity\contact $contact)
    {
        $this->__load();
        return parent::removeContact($contact);
    }

    public function getContact()
    {
        $this->__load();
        return parent::getContact();
    }

    public function addRdvu(\Cabinet\MedicalBundle\Entity\rdv $rdvu)
    {
        $this->__load();
        return parent::addRdvu($rdvu);
    }

    public function removeRdvu(\Cabinet\MedicalBundle\Entity\rdv $rdvu)
    {
        $this->__load();
        return parent::removeRdvu($rdvu);
    }

    public function getRdvu()
    {
        $this->__load();
        return parent::getRdvu();
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

    public function setMed(\Cabinet\MedicalBundle\Entity\medecin $med = NULL)
    {
        $this->__load();
        return parent::setMed($med);
    }

    public function getMed()
    {
        $this->__load();
        return parent::getMed();
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

    public function preUpload()
    {
        $this->__load();
        return parent::preUpload();
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

    public function addOpmeduser(\Cabinet\MedicalBundle\Entity\operationmed $opmeduser)
    {
        $this->__load();
        return parent::addOpmeduser($opmeduser);
    }

    public function removeOpmeduser(\Cabinet\MedicalBundle\Entity\operationmed $opmeduser)
    {
        $this->__load();
        return parent::removeOpmeduser($opmeduser);
    }

    public function getOpmeduser()
    {
        $this->__load();
        return parent::getOpmeduser();
    }

    public function addRigimuser(\Cabinet\MedicalBundle\Entity\rigime $rigimuser)
    {
        $this->__load();
        return parent::addRigimuser($rigimuser);
    }

    public function removeRigimuser(\Cabinet\MedicalBundle\Entity\rigime $rigimuser)
    {
        $this->__load();
        return parent::removeRigimuser($rigimuser);
    }

    public function getRigimuser()
    {
        $this->__load();
        return parent::getRigimuser();
    }

    public function addSecuser(\Cabinet\MedicalBundle\Entity\securite $secuser)
    {
        $this->__load();
        return parent::addSecuser($secuser);
    }

    public function removeSecuser(\Cabinet\MedicalBundle\Entity\securite $secuser)
    {
        $this->__load();
        return parent::removeSecuser($secuser);
    }

    public function getSecuser()
    {
        $this->__load();
        return parent::getSecuser();
    }

    public function setPoste($poste)
    {
        $this->__load();
        return parent::setPoste($poste);
    }

    public function getPoste()
    {
        $this->__load();
        return parent::getPoste();
    }

    public function addRole($role)
    {
        $this->__load();
        return parent::addRole($role);
    }

    public function serialize()
    {
        $this->__load();
        return parent::serialize();
    }

    public function unserialize($serialized)
    {
        $this->__load();
        return parent::unserialize($serialized);
    }

    public function eraseCredentials()
    {
        $this->__load();
        return parent::eraseCredentials();
    }

    public function getUsername()
    {
        $this->__load();
        return parent::getUsername();
    }

    public function getUsernameCanonical()
    {
        $this->__load();
        return parent::getUsernameCanonical();
    }

    public function getSalt()
    {
        $this->__load();
        return parent::getSalt();
    }

    public function getEmail()
    {
        $this->__load();
        return parent::getEmail();
    }

    public function getEmailCanonical()
    {
        $this->__load();
        return parent::getEmailCanonical();
    }

    public function getPassword()
    {
        $this->__load();
        return parent::getPassword();
    }

    public function getPlainPassword()
    {
        $this->__load();
        return parent::getPlainPassword();
    }

    public function getLastLogin()
    {
        $this->__load();
        return parent::getLastLogin();
    }

    public function getConfirmationToken()
    {
        $this->__load();
        return parent::getConfirmationToken();
    }

    public function getRoles()
    {
        $this->__load();
        return parent::getRoles();
    }

    public function hasRole($role)
    {
        $this->__load();
        return parent::hasRole($role);
    }

    public function isAccountNonExpired()
    {
        $this->__load();
        return parent::isAccountNonExpired();
    }

    public function isAccountNonLocked()
    {
        $this->__load();
        return parent::isAccountNonLocked();
    }

    public function isCredentialsNonExpired()
    {
        $this->__load();
        return parent::isCredentialsNonExpired();
    }

    public function isCredentialsExpired()
    {
        $this->__load();
        return parent::isCredentialsExpired();
    }

    public function isEnabled()
    {
        $this->__load();
        return parent::isEnabled();
    }

    public function isExpired()
    {
        $this->__load();
        return parent::isExpired();
    }

    public function isLocked()
    {
        $this->__load();
        return parent::isLocked();
    }

    public function isSuperAdmin()
    {
        $this->__load();
        return parent::isSuperAdmin();
    }

    public function isUser(\FOS\UserBundle\Model\UserInterface $user = NULL)
    {
        $this->__load();
        return parent::isUser($user);
    }

    public function removeRole($role)
    {
        $this->__load();
        return parent::removeRole($role);
    }

    public function setUsername($username)
    {
        $this->__load();
        return parent::setUsername($username);
    }

    public function setUsernameCanonical($usernameCanonical)
    {
        $this->__load();
        return parent::setUsernameCanonical($usernameCanonical);
    }

    public function setCredentialsExpireAt(\DateTime $date = NULL)
    {
        $this->__load();
        return parent::setCredentialsExpireAt($date);
    }

    public function setCredentialsExpired($boolean)
    {
        $this->__load();
        return parent::setCredentialsExpired($boolean);
    }

    public function setEmail($email)
    {
        $this->__load();
        return parent::setEmail($email);
    }

    public function setEmailCanonical($emailCanonical)
    {
        $this->__load();
        return parent::setEmailCanonical($emailCanonical);
    }

    public function setEnabled($boolean)
    {
        $this->__load();
        return parent::setEnabled($boolean);
    }

    public function setExpired($boolean)
    {
        $this->__load();
        return parent::setExpired($boolean);
    }

    public function setExpiresAt(\DateTime $date = NULL)
    {
        $this->__load();
        return parent::setExpiresAt($date);
    }

    public function setPassword($password)
    {
        $this->__load();
        return parent::setPassword($password);
    }

    public function setSuperAdmin($boolean)
    {
        $this->__load();
        return parent::setSuperAdmin($boolean);
    }

    public function setPlainPassword($password)
    {
        $this->__load();
        return parent::setPlainPassword($password);
    }

    public function setLastLogin(\DateTime $time = NULL)
    {
        $this->__load();
        return parent::setLastLogin($time);
    }

    public function setLocked($boolean)
    {
        $this->__load();
        return parent::setLocked($boolean);
    }

    public function setConfirmationToken($confirmationToken)
    {
        $this->__load();
        return parent::setConfirmationToken($confirmationToken);
    }

    public function setPasswordRequestedAt(\DateTime $date = NULL)
    {
        $this->__load();
        return parent::setPasswordRequestedAt($date);
    }

    public function getPasswordRequestedAt()
    {
        $this->__load();
        return parent::getPasswordRequestedAt();
    }

    public function isPasswordRequestNonExpired($ttl)
    {
        $this->__load();
        return parent::isPasswordRequestNonExpired($ttl);
    }

    public function setRoles(array $roles)
    {
        $this->__load();
        return parent::setRoles($roles);
    }

    public function getGroups()
    {
        $this->__load();
        return parent::getGroups();
    }

    public function getGroupNames()
    {
        $this->__load();
        return parent::getGroupNames();
    }

    public function hasGroup($name)
    {
        $this->__load();
        return parent::hasGroup($name);
    }

    public function addGroup(\FOS\UserBundle\Model\GroupInterface $group)
    {
        $this->__load();
        return parent::addGroup($group);
    }

    public function removeGroup(\FOS\UserBundle\Model\GroupInterface $group)
    {
        $this->__load();
        return parent::removeGroup($group);
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'username', 'usernameCanonical', 'email', 'emailCanonical', 'enabled', 'salt', 'password', 'lastLogin', 'locked', 'expired', 'expiresAt', 'confirmationToken', 'passwordRequestedAt', 'roles', 'credentialsExpired', 'credentialsExpireAt', 'id', 'nom', 'prenom', 'cin', 'phone', 'poste', 'profilePicture', 'pat', 'med', 'actualite', 'cabinet', 'contact', 'rdvu', 'opmeduser', 'rigimuser', 'secuser');
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