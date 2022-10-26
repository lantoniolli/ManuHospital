<?php

require_once(__DIR__.'/../config/config.php');
require_once(__DIR__. '/../models/Patient.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
   // Nettoyage et validation du nom.
        // Nettoyage
        $lastname = trim(filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_SPECIAL_CHARS));
        // Validation
        if (empty($lastname)) {
            $errorName = '<script>alert("Le nom est obligatoire.")</script>';
        } else {
            $isOkName = filter_var($lastname, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => '/' . REGEX_FOR_NAME . '/')));
            if ($isOkName == false) {
                $errorName = '<script>alert("Le nom n\'est pas conforme.")</script>';
            }
        }

    // Nettoyage et validation du prénom.
        // Nettoyage
        $firstname = trim(filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_SPECIAL_CHARS));
        // Validation
        if (empty($firstname)) {
            $errorFirstname = '<script>alert("Le prénom est obligatoire.")</script>';
        } else {
            $isOkName = filter_var($firstname, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => '/' . REGEX_FOR_NAME . '/')));
            if ($isOkName == false) {
                $errorFirstname = '<script>alert("Le prénom n\'est pas conforme.")</script>';
            }
        }
   // Nettoyage et validation de la date de naissance.
        //Nettoyage
        $dateOfBirth = trim((string) filter_input(INPUT_POST, 'dateOfBirth', FILTER_SANITIZE_SPECIAL_CHARS));
        // Validation 
        if (empty($dateOfBirth)) {
            $errorDateOfBirth = '<script>alert("La date de naissance est obligatoire.")</script>';
        } else {
            $isOkDateOfBirth = filter_var($dateOfBirth, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => '/' . REGEX_FOR_DATE . '/')));
            if ($isOkDateOfBirth == false) {
                $errorDateOfBirth = '<script>alert("La date de naissance n\'est pas conforme.")</script>';
            }
        }

         // Nettoyage et validation de l'e-mail.
        // Nettoyage 
        $email = trim(filter_input(INPUT_POST, 'mail', FILTER_SANITIZE_EMAIL));
        // Validation
        if (empty($email)) {
            $errorEmail = '<script>alert("Le mail est obligatoire.")</script>';
        } else {
            $isOkEmail = filter_var($email, FILTER_VALIDATE_EMAIL);
            if ($isOkEmail == false) {
                $errorEmail = '<script>alert("Le mail n\'est pas conforme.")</script>';
            }
        }
        
    // Nettoyage et validation du numéros de téléphone.
        // Nettoyage 
        $phoneNumber = trim(filter_input(INPUT_POST, 'phoneNumber', FILTER_SANITIZE_SPECIAL_CHARS));
        // Validation
        if (empty($phoneNumber)) {
            $errorPhoneNumber = '<script>alert("Le numéros de téléphone est obligatoire.")</script>';
        } else {
            $isOkPhoneNumber = filter_var($phoneNumber, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => '/' . REGEX_FOR_PHONENUMBER . '/')));
            if ($isOkPhoneNumber == false) {
                $errorPhoneNumber = '<script>alert("Le numéros de téléphone n\'est pas conforme.")</script>';
            }
        }

        try {
            $bdd = New PDO (DSN,USER,PWD);
            $patient = New Patient($lastname, $firstname, $dateOfBirth, $phoneNumber, $email);
            $patient->addPatient();

        } catch (PDOException $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }












include(__DIR__.'/../views/templates/header.php');
include(__DIR__.'/../views/addUser.php');
include(__DIR__.'/../views/templates/footer.php');