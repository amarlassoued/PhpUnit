<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Adresse
 *
 * @author Administrateur
 */
class Adresse {
    private $user_id;
    private $ville;
    private $codepostal;
    private $rue;
    private $numeroDeVoie;
    
    function __construct($user_id, $ville, $codepostal, $rue, $numeroDeVoie) {
        $this->user_id = $user_id;
        $this->ville = $ville;
        $this->codepostal = $codepostal;
        $this->rue = $rue;
        $this->numeroDeVoie = $numeroDeVoie;
    }

    public function getUser_id() {
        return $this->user_id;
    }

    public function getVille() {
        return $this->ville;
    }

    public function getCodepostal() {
        return $this->codepostal;
    }

    public function getRue() {
        return $this->rue;
    }

    public function getNumeroDeVoie() {
        return $this->numeroDeVoie;
    }

    public function setUser_id($user_id) {
        $this->user_id = $user_id;
    }

    public function setVille($ville) {
        $this->ville = $ville;
    }

    public function setCodepostal($codepostal) {
        $this->codepostal = $codepostal;
    }

    public function setRue($rue) {
        $this->rue = $rue;
    }

    public function setNumeroDeVoie($numeroDeVoie) {
        $this->numeroDeVoie = $numeroDeVoie;
    }
}
