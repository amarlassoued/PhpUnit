<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PersonneTest
 *
 * @author Administrateur
 */
class PersonneTest extends PHPUnit_Framework_TestCase {

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testNomMustExistsAndHaveOnlyLetters() {
        $amar = new Personne();
        $amar->setNom(2000);
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testPrenomMustExistsAndHaveOnlyLetters() {
        $amar = new Personne();
        $amar->setPrenom(2000);
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testAgeMustExistsAndHaveOnlyNumbers() {
        $amar = new Personne();
        $amar->setAge('AMAR');
    }

    /**
     * @dataProvider fournisseurPassword
     */
    public function testPasswordValidate($password) {
        $amar = new Personne();
        $amar->setPassword($password);
    }

    public function fournisseurPassword() {
        return array(
            array('P@$$w0rd'),
            array('M0tD3P@$$3'),
            array('toto'),
            array('1234')
        );
    }

    /**
     * @dataProvider fournisseurAdresse
     */
    public function testAdresseValid($adresse) {
        $amar = new Personne();
        $amar->setAdresse($adresse);
    }

    public function fournisseurAdresse() {
        return array(
            array('10 rue du facteur 13000 Marseille'),
            array('toto'),
            array('15 quai d\'asnières 92390 Villeneuve-la-Garenne'),
            array('25 rue Claude Tillier 75000 Paris')
        );
    }

    /**
     * @Given /^I am in a directory "([^"]*)"$/
     */
    public function iAmInADirectory($arg1) {
        throw new PendingException();
    }

    /**
     * @Given /^I have a file named "([^"]*)"$/
     */
    public function iHaveAFileNamed($arg1) {
        throw new PendingException();
    }

    /**
     * @When /^I run "([^"]*)"$/
     */
    public function iRun($arg1) {
        throw new PendingException();
    }

    /**
     * @Then /^I should get:$/
     */
    public function iShouldGet(PyStringNode $string) {
        throw new PendingException();
    }

    /**
     * @Given /^le client est sur la page d\'accueil$/
     */
    public function leClientEstSurLaPageDAccueil() {
        throw new PendingException();
    }

    /**
     * @When /^le client choisit un produit$/
     */
    public function leClientChoisitUnProduit() {
        throw new PendingException();
    }

    /**
     * @Then /^le produit est dans son panier$/
     */
    public function leProduitEstDansSonPanier() {
        throw new PendingException();
    }

}
