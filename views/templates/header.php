<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
  <link rel="stylesheet" href="/public/assets/css/style.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
  <script src="/public/assets/js/script.js" defer></script>
  <title>Memorial Hospital</title>
</head>

<body>
  <div class="vertical-nav background_black" id="sidebar">
    <div class="py-4 px-3 mb-4 bg-dark">
      <div class="media d-flex align-items-center">
        <img src="/public/assets/img/housemdicon.png" alt="..." width="65" class="mr-3 rounded-circle img-thumbnail shadow-sm" />
        <div class="media-body">
          <h6 class="test ms-3 brand-text brand-big visible text-uppercase text-white">Gregory House</h6>
          <p class="font-weight-light text-muted ms-3">MD</p>
        </div>
      </div>
    </div>
    <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0 bg-dark">
      Patients
    </p>

    <ul class="nav flex-column bg-dark mb-0">
      <li class="nav-item">
        <a href="#" class="nav-link text-light bg-dark">
          <i class="bi bi-house p-3"></i> Vue d'Ensemble
        </a>
      </li>
      <li class="nav-item">
        <a href="/controllers/patientListController.php" class="nav-link text-light">
          <i class="fa fa-address-card mr-3 text-primary fa-fw"></i>
          <i class="bi bi-list-nested p-3 text-muted text-opacity-75"></i> Liste des Patients
        </a>
      </li>
      <li class="nav-item">
        <a href="/controllers/addUserController.php" class="nav-link text-light">
          <i class="bi bi-person-plus-fill p-3"></i> Ajouter un Patient
        </a>
      </li>
    </ul>

    <p class="text-gray font-weight-bold text-uppercase px-3 small py-4 mb-0">
      Médecins
    </p>

    <ul class="nav flex-column bg-dark mb-0">
      <li class="nav-item">
        <a href="#" class="nav-link text-light">
          <i class="bi bi-house p-3"></i> Vue d'Ensemble
        </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link text-light">
          <i class="bi bi-list-nested p-3"></i> Liste des Médecins
        </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link text-light">
          <i class="bi bi-sliders2 p-3"></i>Gestion du Personnel
        </a>
      </li>
    </ul>
    <p class="text-gray font-weight-bold text-uppercase px-3 small py-4 mb-0">
      Rendez-vous
    </p>
    <ul class="nav flex-column bg-dark mb-0">
      <li class="nav-item">
        <a href="/controllers/addPatientApptController.php" class="nav-link text-light">
          <i class="bi bi-calendar-date p-3"></i>
          Ajout Patient + RDV
        </a>
      </li>
      <li class="nav-item">
        <a href="/controllers/addAppointmentController.php" class="nav-link text-light">
          <i class="bi bi-pen p-3"></i>
          Ajouter un rendez-vous
        </a>
      </li>
      <li class="nav-item">
        <a href="/controllers/appointmentListController.php" class="nav-link text-light">
          <i class="bi bi-list-nested p-3"></i>
          Planning des rendez-vous
        </a>
      </li>
    </ul>
  </div>
  <!-- End vertical navbar -->
  <main>
    <div class="page-content p-1 background_clair" id="content">
      <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold">Menu</small></button>

      <h2 class="display-4 text-white p-2">Memorial Hospital</h2>
      <p class="lead text-white mb-0 p-2">Gestion par Utilisateur.</p>
      <div class="separator"></div>