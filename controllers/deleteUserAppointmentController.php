<?php
require_once(__DIR__ . '/../config/config.php');
require_once(__DIR__ . '/../models/Patient.php');

try {
    $id = intval(filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT));
    $delete = Patient::deleteAll($id);
    if($delete){
        SessionFlash::set('Boop 😍😍😍');
        header('Location: /controllers/patientListController.php');
        exit();  
    }else{
        SessionFlash::set('Une erreur est survenue');
        var_dump($delete);
    }

} catch (PDOException $e) {
    die('ERREUR :' . $e->getMessage());
}


