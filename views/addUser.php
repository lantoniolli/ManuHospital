    <div class="row justify-content-center text-white">
        <div class="col-lg-6">
            <div class="container">
                <form method="post" action="">
                    <h2>Ajouter un Patient</h2>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="first">Nom de Famille</label>
                                <input type="text" class="form-control" placeholder="" id="first" name="lastname" value="<?= $lastname ?? '' ?>" pattern="<?= REGEX_FOR_NAME ?>" required>
                            </div>
                        </div>
                        <!--  col-md-6   -->

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="last">Prénom</label>
                                <input type="text" class="form-control" placeholder="" id="last" name="firstname" value="<?= $firstname ?? '' ?>" pattern="<?= REGEX_FOR_NAME ?>" required>
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
                                <input type="text" class="form-control" id="phone" placeholder="" name="phoneNumber" value="<?= $phoneNumber ?? ''?>" pattern="<?= REGEX_FOR_PHONENUMBER ?>" required>
                            </div><?= $errorPhoneNumber ?? ''?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="email">Adresse E-mail</label>
                                <input type="email" class="form-control" id="email" placeholder="" name="mail" value="<?= $email ?? '' ?>" pattern="<?= REGEX_FOR_EMAIL ?>" required>
                            </div>
                        </div>
                    </div>
            </div>

            <div class="btnSubmit"><button type="submit" class="btn btn-primary">Submit</button></div>
            </form>
        </div>
    </div>

</div>