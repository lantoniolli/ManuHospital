<?php

require_once(__DIR__ . '/../config/config.php');
require_once(__DIR__ . '/../models/Patient.php');

try {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $search = trim(filter_input(INPUT_POST, 'search', FILTER_SANITIZE_SPECIAL_CHARS));
    }
    $patients = Patient::getAll($search);
} catch (PDOException $e) {
    die('ERREUR :' . $e->getMessage());
}




include(__DIR__ . '/../views/templates/header.php');
include(__DIR__ . '/../views/patientList.php');
include(__DIR__ . '/../views/templates/footer.php');
