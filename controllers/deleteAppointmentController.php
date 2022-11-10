<?php
require_once(__DIR__ . '/../config/config.php');
require_once(__DIR__ . '/../models/Appointment.php');

try {
    $id = intval(filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT));
    $delete = Appointment::delete($id);
    if($delete){
        SessionFlash::set('Le rendez-vous a bien été supprimé');
        header('Location: /controllers/AppointmentListController.php');
        exit();  
    }else{
        SessionFlash::set('Une erreur est survenue');
        var_dump($delete);
    }

} catch (PDOException $e) {
    die('ERREUR :' . $e->getMessage());
}

