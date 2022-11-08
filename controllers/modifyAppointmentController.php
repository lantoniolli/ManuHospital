<?php
require_once(__DIR__ . '/../config/config.php');
require_once(__DIR__ . '/../models/Appointment.php');

try {
    $id = intval(filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT));
    $appointment = Appointment::getOne($id);
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $time = filter_input(INPUT_POST, 'time', FILTER_SANITIZE_NUMBER_INT);
        $date = trim((string) filter_input(INPUT_POST, 'date', FILTER_SANITIZE_NUMBER_INT));
        // Validation
        if (empty($time)) {
            $error['time'] = 'L\'heure est obligatoire.';
        } else {
            if ($time < 1 || $time > 6) {
                $error['time'] = 'L\'heure n\'est pas conforme.';
            }
            // Définitions des heure selon les valeur de time.
            if ($time == 1) {
                $time = '09:00:00';
            } else if ($time == 2) {
                $time = '10:00:00';
            } else if ($time == 3) {
                $time = '11:00:00';
            } else if ($time == 4) {
                $time = '14:00:00';
            } else if ($time == 5) {
                $time = '15:00:00';
            } else if ($time == 6) {
                $time = '16:00:00';
            }
        }
        // Validation 
        if (empty($date)) {
            $error['date'] = 'La date est obligatoire.';
        } else {
            $isOk = filter_var($date, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => '/' . REGEX_FOR_DATE . '/')));
            if ($isOk == false) {
                $error['date'] = 'La date n\'est pas conforme.';
            }
        }
        if (empty($error)) {
            $dateHour = $date . ' ' . $time;
            $updatedAppointment = Appointment::modify($id, $dateHour);
            if($isUpdatedAppointment == true) {
                $updateMessage = 'Données mises à jour';
            }
        }
    }
} catch (PDOException $e) {
    die('ERREUR :' . $e->getMessage());
}


include(__DIR__ . '/../views/templates/header.php');
include(__DIR__ . '/../views/modifyAppointment.php');
include(__DIR__ . '/../views/templates/footer.php');
