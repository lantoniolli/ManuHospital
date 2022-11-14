<div class="row justify-content-center text-white">
    <div class="col-lg-6">
        <div class="container">
            <form method="post" action="">
                <h2 class="text-center">Ajouter un Patient</h2>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="first">Nom de Famille</label>
                            <input type="text" class="form-control" placeholder="Dupont" id="first" name="lastname" value="<?= $lastname ?? '' ?>" pattern="<?= REGEX_FOR_NAME ?>" required>
                        </div>
                    </div>
                    <!--  col-md-6   -->

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="last">Prénom</label>
                            <input type="text" class="form-control" placeholder="Jean" id="last" name="firstname" value="<?= $firstname ?? '' ?>" pattern="<?= REGEX_FOR_NAME ?>" required>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="company">Date de Naissance</label>
                            <input type="date" class="form-control" placeholder="" id="dob" name="dateOfBirth" value="<?= $dateOfBirth ?? '' ?>" pattern="<?= REGEX_FOR_DATE ?>" required>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="phone">Numéro de téléphone</label>
                            <input type="text" class="form-control" id="phone" placeholder="XX-XX-XX-XX-XX" name="phoneNumber" value="<?= $phoneNumber ?? '' ?>" pattern="<?= REGEX_FOR_PHONENUMBER ?>" required>
                        </div><?= $errorPhoneNumber ?? '' ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">Adresse E-mail</label>
                            <input type="email" class="form-control" id="email" placeholder="exemple@gmail.com" name="mail" value="<?= $email ?? '' ?>" required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="date">Date</label>
                            <input type="date" name="date" class="form-control" id="">
                        </div>
                    </div>
                </div>

                <div class="row mt-3 justify-content-center">
                    <div class="col-md-6 ">
                    <label for="date">Heure</label>
                        <select class="form-control" name="time">
                            <option>Choisissez un créneau</option>
                            <option value="1">09:00</option>
                            <option value="2">10:00</option>
                            <option value="3">11:00</option>
                            <option value="4">14:00</option>
                            <option value="5">15:00</option>
                            <option value="6">16:00</option>
                        </select>
                    </div>
                </div>

                <div class="btnSubmit"><button type="submit" class="btn btn-primary">Ajouter</button></div>

            </form>
        </div>
    </div>
</div>
