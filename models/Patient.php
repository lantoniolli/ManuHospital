<?php
require_once(__DIR__. '/../config/config.php');

    class Patient{
        private int $_id;
        private string $_lastname;
        private string $_firstname;
        private string $_birthdate;
        private string $_phone;
        private string $_mail;

        // start fonction construct //

        public function __construct(string $lastname, string $firstname, string $birthdate, string $phone, string $mail)
        {
            $this->_lastname = $lastname;
            $this->_firstname = $firstname ;
            $this->_birthdate = $birthdate;
            $this ->_phone = $phone;
            $this->_mail = $mail;
        }
// end fonction construct

// Défintion des Getters //

        public function getId():int {
            return $this->_id;
        }
        public function getLastName(): string {
            return $this->_lastname;
        }
        public function getFirstName(): string {
            return $this->_firstname;
        }
        public function getBirthDate(): string {
            return $this->_birthdate;
        }
        public function getPhone(): string {
            return $this->_phone;
        }
        public function getMail(): string {
            return $this->_mail;
        }

// Définition des Setters //

        public function setId(int $valueId){
            $this->_id = $valueId;
        }
        public function setLastName(string $valueLastName){
            $this->_lastname = $valueLastName;
        }
        public function setFirstName(string $valueFirstName){
            $this->_firstname = $valueFirstName;
        }
        public function setBirthDate(string $valueBirthDate){
            $this->_birthdate = $valueBirthDate;
        }
        public function setPhone(string $valuePhone){
            $this->_phone = $valuePhone;
        }
        public function setMail(string $valueMail){
            $this->_mail = $valueMail;
        }

// Définition des fonctions utiles.
// Fonction d'ajout de patients.

        public function addPatient(){
            $addpatient = 'INSERT INTO `patients` (`lastname`, `firstname`, `birthdate`, `phone`, `mail`) VALUES (:lastname, :firstname, :birthdate, :phone, :mail)';
            
            $bdd = New PDO (DSN,USER,PWD);

            $insertPatient = $bdd->prepare($addpatient);

            $insertPatient->bindParam(':lastname', $this->_lastname);
            $insertPatient->bindParam(':firstname', $this->_firstname);
            $insertPatient->bindParam(':birthdate', $this->_birthdate);
            $insertPatient->bindParam(':phone', $this->_phone);
            $insertPatient->bindParam(':mail', $this->_mail);

            $insertPatient->execute();
        }
    }

