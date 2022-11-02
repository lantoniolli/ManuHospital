<?php
require_once(__DIR__ . '/../config/config.php');
require_once(__DIR__ . '/../models/Patient.php');

$id = intval(filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT));


try {
    $patient = Patient::getOne($id);

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Nettoyage et validation du nom.
        // Nettoyage
        $lastname = trim(filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_SPECIAL_CHARS));
        // Validation
        if (empty($lastname)) {
            $error['lastname'] = 'Le nom est obligatoire.';
        } else {
            $isOklastname = filter_var($lastname, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => '/' . REGEX_FOR_NAME . '/')));
            if ($isOklastname == false) {
                $error['lastname'] = 'Le nom n\'est pas conforme.';
            }
        }
        // Nettoyage et validation du prénom.
        // Nettoyage
        $firstname = trim(filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_SPECIAL_CHARS));
        // Validation
        if (empty($firstname)) {
            $error['firstname'] = 'Le prénom est obligatoire.';
        } else {
            $isOkfirstname = filter_var($firstname, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => '/' . REGEX_FOR_NAME . '/')));
            if ($isOkfirstname == false) {
                $error['firstname'] = 'Le prénom n\'est pas conforme.';
            }
        }
        // Nettoyage et validation de la date de naissance.
        //Nettoyage
        $dateOfBirth = trim((string) filter_input(INPUT_POST, 'dateOfBirth', FILTER_SANITIZE_SPECIAL_CHARS));
        // Validation 
        if (empty($dateOfBirth)) {
            $error['DateOfBirth'] = '<script>alert("La date de naissance est obligatoire.")</script>';
        } else {
            $isOkDateOfBirth = filter_var($dateOfBirth, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => '/' . REGEX_FOR_DATE . '/')));
            if ($isOkDateOfBirth == false) {
                $error['DateOfBirth'] = 'La date de naissance n\'est pas conforme.';
            }
        }
        // Nettoyage et validation de l'e-mail.
        // Nettoyage 
        $email = trim(filter_input(INPUT_POST, 'mail', FILTER_SANITIZE_EMAIL));
        if (Patient::exist($email) && $email != $patient->mail){
            $error['email'] = 'L\'adresse mail existe déjà';
        }
        
        // Validation
        if (empty($email)) {
            $error['Email'] = '<script>alert("Le mail est obligatoire.")</script>';
        } else {
            $isOkEmail = filter_var($email, FILTER_VALIDATE_EMAIL);
            if ($isOkEmail == false) {
                $error['Email'] = 'Le mail n\'est pas conforme.';
            }
        }
        // Nettoyage et validation du numéros de téléphone.
        // Nettoyage 
        $phoneNumber = trim(filter_input(INPUT_POST, 'phoneNumber', FILTER_SANITIZE_SPECIAL_CHARS));
        // Validation
        if (empty($phoneNumber)) {
            $error['PhoneNumber'] = '<script>alert("Le numéros de téléphone est obligatoire.")</script>';
        } else {
            $isOkPhoneNumber = filter_var($phoneNumber, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => '/' . REGEX_FOR_PHONENUMBER . '/')));
            if ($isOkPhoneNumber == false) {
                $error['PhoneNumber'] = 'Le numéros de téléphone n\'est pas conforme.';
            }
        }
        if (empty($error)) {
            $updatedPatient = new Patient;
            $updatedPatient->setLastName($lastname);
            $updatedPatient->setFirstName($firstname);
            $updatedPatient->setBirthDate($dateOfBirth);
            $updatedPatient->setPhone($phoneNumber);
            $updatedPatient->setMail($email);
            $updatedPatient->setId($id);

            $isUpdatedPatient = $updatedPatient->modifyPatient();
            if ($isUpdatedPatient == true) {
                $updateMessage = 'Données mises à jour';
                $patient = Patient::getOne($id);
            } else {
                $updateMessage = 'Une erreur est survenue';
            };
        }
    }
} catch (PDOException $e) {
    die('ERREUR :' . $e->getMessage());
}

include(__DIR__ . '/../views/templates/header.php');
include(__DIR__ . '/../views/modifyPatient.php');
include(__DIR__ . '/../views/templates/footer.php');
