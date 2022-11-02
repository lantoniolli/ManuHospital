<?php

    require_once(__DIR__.'/../config/config.php');
    require_once(__DIR__.'/../models/patient.php');

// Nettoyage de l'ID
    $id = intval(filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT));

    try {
        $patient = Patient::getOne($id);
    } catch (PDOException $e) {
        die ('ERREUR :' .$e->getMessage());
    }

include(__DIR__.'/../views/templates/header.php');
include(__DIR__.'/../views/profilUser.php');
include(__DIR__.'/../views/templates/footer.php');