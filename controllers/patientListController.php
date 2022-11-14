<?php

require_once(__DIR__ . '/../config/config.php');
require_once(__DIR__ . '/../models/Patient.php');

try {
    // On détermine sur quelle page on se trouve
        if(isset($_GET['page']) && !empty($_GET['page'])){
            $currentPage = (int) strip_tags($_GET['page']);
        }else{
            $currentPage = 1;
        }     

    // Nettoyage de la rechcerche.
        $search = trim((string) filter_input(INPUT_GET, 'search', FILTER_SANITIZE_SPECIAL_CHARS));
        
    $nbPatients = Patient::count();
        
    // On calcule le nombre de pages total.
        $pages = ceil($nbPatients / LIMIT);
        
    // Calcul du 1er article de la page.
        $offset = ($currentPage - 1) * LIMIT;

    $patients = Patient::getAll(LIMIT, $offset, $search);
} catch (Exception $e) {
    $error = $e->getMessage();
} catch (PDOException $e) {
    die('ERREUR :' . $e->getMessage());
}

include(__DIR__ . '/../views/templates/header.php');
include(__DIR__ . '/../views/patientList.php');
include(__DIR__ . '/../views/templates/footer.php');

