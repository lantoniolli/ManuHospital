<?php

require_once(__DIR__.'/../config/config.php');
require_once(__DIR__.'/../models/Patient.php');
require_once(__DIR__.'/../models/Appointment.php');

try {


    $appointments = Appointment::getAll();
    // $patients = Patient::getAll();
} catch (PDOException) {
    echo ('ERREUR');
}


include(__DIR__.'/../views/templates/header.php');
include(__DIR__.'/../views/appointmentList.php');
include(__DIR__.'/../views/templates/footer.php');