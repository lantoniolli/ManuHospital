<?php

require_once(__DIR__.'/../config/config.php');

try {
    $bdd = Patients::DisplayAll();
    $formule = "SELECT `id`,`lastname`, `firstname`, `birthdate`, `phone`, `mail` FROM `patients`";
    $sth = $bdd->query($formule);
    $fullPatients = $sth->fetchAll(PDO::FETCH_OBJ);
} catch (PDOException) {
    echo ('ERREUR');
}


include(__DIR__.'/../views/templates/header.php');
include(__DIR__.'/../views/patientList.php');
include(__DIR__.'/../views/templates/footer.php');