<div class="col-md-12 text-center">
  <h1 class="text-light">Liste des Patients</h1>
</div>
<div class="col-md-12 text-end">
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
    foreach($patients as $patient){
      ?>
      <tr>
      <td class="text-center"><?= $patient->lastname ?></td>
      <td class="text-center"><?= $patient->firstname ?></td>
      <td class="text-center"><?= date("d/m/Y", strtotime($patient->birthdate)) ?></td>
      <td class="text-center"><a href="/controllers/profileUserController.php?id=<?= $patient->id ;?>"><i class="bi bi-person-lines-fill link-light"></i></a></td>
    </tr>
    <?php
    };
    ?>
  </tbody>
</table>