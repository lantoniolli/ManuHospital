<?php

require_once(__DIR__ . '/../config/config.php');
require_once(__DIR__ . '/../models/Patient.php');

try {
    $search = trim((string)filter_input(INPUT_POST, 'search', FILTER_SANITIZE_SPECIAL_CHARS));
    $patients = Patient::getAll($search = '');
    var_dump($patients);
    die;
} catch (PDOException $e) {
    die('ERREUR :' . $e->getMessage());
}

include(__DIR__ . '/../views/templates/header.php');
include(__DIR__ . '/../views/patientList.php');
include(__DIR__ . '/../views/templates/footer.php');

