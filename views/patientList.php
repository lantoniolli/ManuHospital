<div class="col-md-12 text-center">
  <h1 class="text-light">Liste des Patients</h1>
</div>
<div class="col-md-3 text-end">

<!-- Emplacement pour container des erreurs/ validation. -->
<?php
  if(SessionFlash::exist()){ ?>
          <div class="alert alert-warning alert-dismissible fade show" role="alert"> 
            <?=SessionFlash::get();?>
            <button type="button" class="btn-close" dara-bs-dismiss="alert" aria-label="Close"></button>
          </div>
  <?php } ?>

  <form method="post">
    <div class="input-group mb-3">
      <input type="text" class="form-control" placeholder="Écrire un nom" name="search" aria-describedby="button-addon2">
      <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Rechercher</button>
    </div>
  </form>

</div>

<div class="col-mb-3 text-end">
  <a href="/controllers/addUserController.php" type="button" class="btn btn-outline-secondary"><i class="bi bi-plus"></i>Ajouter un Patient</a>
</div>

<table class="table table-dark table-striped mt-3">
  <thead>
    <tr>
      <th class="text-center" scope="col">Nom</th>
      <th class="text-center" scope="col">Prénom</th>
      <th class="text-center" scope="col">Date de Naissance</th>
      <th class="text-center" scope="col">Profil</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach ($patients as $patient) {
    ?>
      <tr>
        <td class="text-center"><?= $patient->lastname ?></td>
        <td class="text-center"><?= $patient->firstname ?></td>
        <td class="text-center"><?= date("d/m/Y", strtotime($patient->birthdate)) ?></td>
        <td class="text-center"><a href="/controllers/profileUserController.php?id=<?= $patient->id; ?>"><i class="bi bi-person-lines-fill link-light"></i></a>
          <a href="/controllers/deleteUserAppointmentController.php?id=<?= $patient->id; ?>"><i class="bi bi-trash-fill text-danger"></i></a>
        </td>
      </tr>
    <?php
    };
    ?>
  
    <nav aria-label="Page navigation example">
  <ul class="pagination">
    <!-- Lien vers la page précédente (désactivé si on se trouve sur la 1ère page) -->
    <li class="page-item <?= ($currentPage == 1) ? "disabled" : "" ?>">
    <a href="/controllers/patientListController.php?page=<?= $currentPage - 1 ?>">Précédent</a> 
    </li>
    <span><?= $currentPage ?></span>
            <a href="/controllers/patientListController.php?page=<?= $currentPage + 1 ?>">Suivant</a>
        </div>
    </nav>
    
  </tbody>
</table>

