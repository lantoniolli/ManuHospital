<?php

require_once(__DIR__.'/../config/config.php');
require_once(__DIR__. '/../models/Appointment.php');
require_once(__DIR__.'/../models/Patient.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if (empty($error)){
        try {
            $appointment = New Appointment();
            
        } catch (PDOException) {
            echo ('ERREUR');
        }
    }
}

include(__DIR__.'/../views/templates/header.php');
include(__DIR__.'/../views/addAppointment.php');
include(__DIR__.'/../views/templates/footer.php');