<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Personne
 *
 * @author Administrateur
 */
class Personne {
    private $id;
    private $nom;
    private $prenom;
    private $age;
    private $password;
    private $adresse;
    
    function __construct($id, $nom, $prenom, $age, $password, $adresse) {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
        $this->password = $password;
        $this->adresse = $adresse;
    }

    /** SETTER **/
    /**
     * 
     * @param type $id
     */
    public function setId($id) {
        $this->id = $id;
    }
    /**
     * 
     * @param type $nom
     * @throws \InvalidArgumentException
     */
    public function setNom($nom) {
        $pattern = '/^[a-zA-Z]*$/';
        if (preg_match($pattern, $nom)) {
            $this->nom = $nom;
        } else {
            throw new \InvalidArgumentException;
        }
    }
    /**
     * 
     * @param type $prenom
     * @throws \InvalidArgumentException
     */
    public function setPrenom($prenom) {
        $pattern = '/^[a-zA-Z- ]*$/';
        if (preg_match($pattern, $prenom)) {
            $this->nom = $prenom;
        } else {
            throw new \InvalidArgumentException;
        }
    }
    /**
     * 
     * @param type $age
     * @throws \InvalidArgumentException
     */
    public function setAge($age) {
        $pattern = '/^[0-9]{1,3}$/';
        if (preg_match($pattern, $age)) {
            $this->nom = $age;
        } else {
            throw new \InvalidArgumentException;
        }
    }
    /**
     * 
     * @param type $password
     * @throws \InvalidArgumentException
     */
    public function setPassword($password) {
        $pattern = '/^((?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%]).{6,20})$/';
        if (preg_match($pattern, $password)) {
            $this->password = $password;
        } else {
            throw new \InvalidArgumentException;
        }
    }
    /**
     * 
     * @param type $adresse
     */
    public function setAdresse($adresse) {
        $pattern = '/^([0-9a-zA-Z,\. ]*) ?([0-9]{5}) ?([a-zA-Z]*)$/';
        if (preg_match($pattern, $adresse)) {
            $this->adresse = $adresse;
        } else {
            throw new \InvalidArgumentException;
        }
    }
        
    /** GETTER **/
    /**
     * 
     * @return int
     */
    public function getId() {
        return $this->id;
    }
    /**
     * 
     * @return string
     */
    public function getNom() {
        return $this->nom;
    }
    /**
     * 
     * @return string
     */
    public function getPrenom() {
        return $this->prenom;
    }
    /**
     * 
     * @return int
     */
    public function getAge() {
        return $this->age;
    }
    /**
     * 
     * @return string
     */
    public function getPassword() {
        return $this->password;
    }
    /**
     * 
     * @return string
     */
    public function getAdresse() {
        return $this->adresse;
    }
}
