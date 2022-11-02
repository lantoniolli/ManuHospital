<?php

require_once(__DIR__. '/../helpers/database.php');

class Appointment {
    private int $_id;
    private string $_dateHour;
    private int $_idPatients;

// Définition de la method construct.

// Définition des Getters
    public function getId():int {
        return $this->_id;
    }
    public function getdateHour():string {
        return $this->_dateHour;
    }
    public function getIdPatient():int {
        return $this->_idPatients;
    }

// Définition des Setters

    public function setId(int $valueId):void{
        $this->_id = $valueId;
    }
    public function setDateHour(int $valueDateHour):void{
        $this->_dateHour = $valueDateHour;
    }
    public function setIdPatient(int $valueIdPatient):void{
        $this->_idPatients = $valueIdPatient;
    }

// *************** Définition des fonctions utiles **************** //

public function __construct(int $dateHour, int $idPatients){

    $this->_dateHour = $dateHour;
    $this->_idPatients = $idPatients;
}


public function add(){
    $addappointment = 'INSERT INTO `appointments` (`dateHour`, `idPatients`) VALUES (:dateHour, :idPatient)';

    $sth= Database::getInstance()->prepare($addappointment);


}


}