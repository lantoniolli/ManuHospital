<?php


    class Patient{
        private int $_id;
        private string $_lastname;
        private string $_firstname;
        private string $_phone;
        private string $_mail;

        // start fonction construct //

        public function __construct(int $id, string $lastname, string $firstname, string $phone, string $mail)
        {
            $this->_id = $id;
            $this->_lastname = $lastname;
            $this->_firstname = $firstname ;
            $this ->_phone = $phone;
            $this->_mail = $mail;
        }
// end fonction construct

// Défintion des Setters //

        public function getId():int {
            return $this->_id;
        }
        public function getLastName(): string {
            return $this->_lastname;
        }
        public function getFirstName(): string {
            return $this->_firstname;
        }
        public function getPhone(): string {
            return $this->_phone;
        }
        public function getMail(): string {
            return $this->_mail;
        }

// Définition des Getters.

        public function setId(int $valueId){
            $this->_id = $valueId;
        }
        public function setLastName(string $valueLastName){
            $this->_lastname = $valueLastName;
        }
        public function setFirstName(string $valueFirstName){
            $this->_firstname = $valueFirstName;
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
            
        }
    }

