<div class="row justify-content-center text-white">
    <div class="col-lg-6">
        <div class="container">
            <form method="post" action="">
                <h2>Modifier un Rendez Vous</h2>
                <div class="alert alert-primary" role="alert">
                    <?= $updateMessage ?? '' ?>
                </div>
                <div class="row">
                <div class="col-md-6">
                        <div class="form-group">
                            <label for="first">Nom de Famille</label>
                            <input type="text" class="form-control" placeholder="Dupont" name="lastname" value="<?= $appointment->lastname ?>" pattern="<?= REGEX_FOR_NAME ?>" disabled>
                        </div>
                    </div>
                    <!--  col-md-6   -->

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="last">Prénom</label>
                            <input type="text" class="form-control" placeholder="Jean"  name="firstname" value="<?= $appointment->firstname ?>" pattern="<?= REGEX_FOR_NAME ?>" disabled >
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="company">Heure du Rendez-vous</label>
                            <input type="date" name="date" value="<?= date("Y-m-d", strtotime($appointment->dateHour)) ?>"/>
                            
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="phone">Date du Rendez-Vous</label>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <select name="time">
                                        <option>Choisissez un créneau</option>
                                        <option selected><?= date("H:i", strtotime($appointment->dateHour)) ?></option>
                                        <option disabled>Choisir un horaire</option>
                                        <option value="1">09:00</option>
                                        <option value="2">10:00</option>
                                        <option value="3">11:00</option>
                                        <option value="4">14:00</option>
                                        <option value="5">15:00</option>
                                        <option value="6">16:00</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="btnSubmit"><button type="submit" class="btn btn-primary">Modifier</button></div>
            </form>
        </div>
    </div>

</div>