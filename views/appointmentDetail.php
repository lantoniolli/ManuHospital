<section>
    <div class="container py-0">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col col-lg-6 mb-4 mb-lg-0">
                <div class="card mb-3 background_black">
                    <div class="row g-0">
                        <div class="col-md-4 gradient-custom text-center text-white">
                            <img src="https://media.graphassets.com/kXa8JqIBRnCMtZnHkb1u" alt="Avatar" class="rounded-circle mt-5" style="width: 130px;" />
                            <i class="far fa-edit mb-5"></i>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body p-1">
                                <hr class="mt-0 mb-4">
                                <div class="row pt-1">
                                    <div class="col-6 mb-3 text-center">
                                        <h6 class="text-white">Patient</h6>
                                        <p class="text-muted"><?= $appointments->lastname ?> <?= $appointments->firstname ?></p>
                                    </div>
                                </div>
                                <hr class="mt-0 mb-4">
                                <div class="row pt-1">
                                    <div class="col-6 mb-3 text-center">
                                        <h6 class="text-white">Date du Rendez-vous</h6>
                                        <p class="text-muted"><?= date("d/m/Y", strtotime($appointments->dateHour)) ?></p>
                                        <h6 class="text-white">Heure du Rendez-vous</h6>
                                        <p class="text-muted"><?= date("H:i", strtotime($appointments->dateHour)) ?></p>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <div class="d-grid gap-2 d-md-block">
                                        <a href="/controllers/modifyAppointmentController.php?id=<?= $appointments->apptID; ?>"><button class="btn btn-outline-success" type="button"><i class="bi bi-pencil-square"></i> Modifier Fiche</button></a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>