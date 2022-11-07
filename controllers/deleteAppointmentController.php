<?php
require_once(__DIR__ . '/../config/config.php');
require_once(__DIR__ . '/../models/Appointment.php');

try {
    $id = intval(filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT));
    $delete = Appointment::delete($id);
    header('Location: /controllers/AppointmentListController.php');
    exit();

} catch (PDOException $e) {
    die('ERREUR :' . $e->getMessage());
}
