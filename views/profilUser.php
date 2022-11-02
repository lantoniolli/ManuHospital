<section>
    <div class="container py-0">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col col-lg-6 mb-4 mb-lg-0">
                <div class="card mb-3 background_black">
                    <div class="row g-0">
                        <div class="col-md-4 gradient-custom text-center text-white">
                            <img src="./../public/assets/img/profilepic.jpg" alt="Avatar" class="rounded-circle mt-5" style="width: 130px;" />
                            <h4><?= $patient->lastname ?></h4>
                            <p><?= $patient->firstname ?></p>
                            <i class="far fa-edit mb-5"></i>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body p-1">
                                <hr class="mt-0 mb-4">
                                <div class="row pt-1">
                                    <div class="col-6 mb-3 text-center">
                                        <h6 class="text-white">Email</h6>
                                        <p class="text-muted"><?= $patient->mail ?></p>
                                    </div>
                                    <div class="col-6 mb-3 text-center">
                                        <h6 class="text-white">N° de Téléphone</h6>
                                        <p class="text-muted"><?= $patient->phone ?></p>
                                    </div>
                                </div>
                                <h6 class="text-white">Coordonnées</h6>
                                <hr class="mt-0 mb-4">
                                <div class="row pt-1">
                                    <div class="col-6 mb-3 text-center">
                                        <h6 class="text-white">Date de Naissance</h6>
                                        <p class="text-muted"><?= date("d/m/Y", strtotime($patient->birthdate)) ?></p>
                                    </div>
                                    <div class="col-6 mb-3 text-center">
                                        <h6 class="text-white">Rendez-Vous</h6>
                                        <p class="text-muted">Dolor sit amet</p>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <div class="d-grid gap-2 d-md-block">
                                        <a href="tel:<?= $patient->phone ?>"><button class="btn btn-secondary" type="button"><i class="bi bi-telephone"></i> Appeler</button></a>
                                        <a href="mailto:<?= $patient->mail ?>"><button class="btn btn-secondary" type="button"><i class="bi bi-envelope"></i> Contacter</button></a>
                                        <a href="/controllers/modifyPatientController.php?id=<?= $patient->id; ?>"><button class="btn btn-outline-success" type="button"><i class="bi bi-pencil-square"></i> Modifier Fiche</button></a>
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