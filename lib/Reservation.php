<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Reservation
 *
 * @author Mato
 */
class Reservation {
    //put your code here
    private $name;
    private $email;
    private $sourceRegion;
    private $english;
    private $dateCheckIn;
    private $dateCheckOut;
    
    function __construct($name, $email, $sourceRegion, $english, $dateCheckIn, $dateCheckOut) {
        $this->name = $name;
        $this->email = $email;
        $this->sourceRegion = $sourceRegion;
        $this->english = $english;
        $this->dateCheckIn = $dateCheckIn;
        $this->dateCheckOut = $dateCheckOut;
    }
    
    function getName() {
        return $this->name;
    }

    function getEmail() {
        return $this->email;
    }

    function getSourceRegion() {
        return $this->sourceRegion;
    }

    function getEnglish() {
        return $this->english;
    }

    function getDateCheckIn() {
        return $this->dateCheckIn;
    }

    function getDateCheckOut() {
        return $this->dateCheckOut;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setSourceRegion($sourceRegion) {
        $this->sourceRegion = $sourceRegion;
    }

    function setEnglish($english) {
        $this->english = $english;
    }

    function setDateCheckIn($dateCheckIn) {
        $this->dateCheckIn = $dateCheckIn;
    }

    function setDateCheckOut($dateCheckOut) {
        $this->dateCheckOut = $dateCheckOut;
    }



}
