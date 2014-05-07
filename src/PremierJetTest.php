<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PremierJetTest
 *
 * @author Administrateur
 */

class PremierJetTest extends PHPUnit_Framework_TestCase {
    public function testTrueIsTrue() {
        $i = 1;
        $this->assertTrue($i == 1);
    }
    public function testEquals() {
        $j = 2;
        $i = 2;
        $this->assertEquals($j, $i);
    }
}
