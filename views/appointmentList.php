<div class="col-md-12 text-center">
    <h1 class="text-light">Liste des Rendez-vous</h1>
</div>
<!-- Emplacement pour container des erreurs validation. -->
<?php
if (SessionFlash::exist()) { ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
    <i class="uil uil-check-circle"></i><?= SessionFlash::get(); ?>
        <button type="button" class="btn-close" dara-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php } ?>
<div class="col-md-12 text-end">
    <a href="/controllers/addAppointmentController.php" type="button" class="btn btn-outline-secondary"><i class="bi bi-plus"></i>Ajouter un rendez-vous</a>
</div>
<table class="table table-dark table-striped mt-3">
    <thead>
        <tr>
            <th class="text-center" scope="col">Nom</th>
            <th class="text-center" scope="col">Date</th>
            <th class="text-center" scope="col">Heure</th>
            <th class="text-center" scope="col">Profil</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($appointments as $appointment) {
        ?>
            <tr>
                <td class="text-center"><?= $appointment->lastname ?></td>
                <td class="text-center"><?= $appointment->firstname ?></td>
                <td class="text-center"><?= date("d/m/Y H:i", strtotime($appointment->dateHour)) ?></td>
                <td class="text-center"><a href="/controllers/appointmentDetailController.php?id=<?= $appointment->id; ?>"><i class="bi bi-person-lines-fill link-light"></i></a>
                    <a href="/controllers/deleteAppointmentController.php?id=<?= $appointment->id; ?>"><i class="bi bi-trash-fill text-danger"></i></a>
                </td>
            </tr>
        <?php
        };
        ?>
    </tbody>
</table>

 