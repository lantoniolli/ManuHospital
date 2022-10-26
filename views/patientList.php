<div class="col-md-12 text-center">
  <h1 class="text-light">Liste des Patients</h1>
</div>
<div class="col-md-12 text-end">
<a href="/controllers/addUserController.php" type="button" class="btn btn-outline-secondary"><i class="bi bi-plus"></i>Ajouter un Patient</a>
</div>
<table class="table table-dark table-striped mt-3">
  <thead>
    <tr>
      <th class="text-center" scope="col">#</th>
      <th class="text-center" scope="col">Nom</th>
      <th class="text-center" scope="col">Prénom</th>
      <th class="text-center" scope="col">Date de Naissance</th>
      <th class="text-center" scope="col">N° de Téléphone</th>
      <th class="text-center" class="text-center" scope="col">Adresse E-mail</th>
      <th class="text-center" scope="col">Profil</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach($fullPatients as $fullPatient){
      ?>
      <tr>
      <th class="text-center"scope="row"><?= $fullPatient->id ?></th>
      <td class="text-center"><?= $fullPatient->lastname ?></td>
      <td class="text-center"><?= $fullPatient->firstname ?></td>
      <td class="text-center"><?= date("d/m/Y", strtotime($fullPatient->birthdate)) ?></td>
      <td class="text-center"><?= $fullPatient->phone ?></td>
      <td class="text-center"><?= $fullPatient->mail ?></td>
      <td class="text-center"><i class="bi bi-journal-plus"></i></td>
    </tr>
    <?php
    };
    ?>
  </tbody>
</table>