<?php
require_once(__DIR__ . '/../config/config.php');
require_once(__DIR__ . '/../models/Patient.php');

try {
    $id = intval(filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT));
    $delete = Patient::deleteAll($id);
    header('Location: /controllers/patientListController.php');
    exit();

} catch (PDOException $e) {
    die('ERREUR :' . $e->getMessage());
}
