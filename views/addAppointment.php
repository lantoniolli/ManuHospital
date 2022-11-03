<div class="container">
    <div class="row justify-content-center">
        <h2 class="text-white">Ajouter un Rendez-vous</h2>
        <div class="col-sm-2">
            <div class="form-group">
                <form method="POST">
                    <input type="date" name="date" id="">
            </div>
        </div>
        <div class="col-sm-2">
            <div class="form-group">
                <select name="time">
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
        <div class="col-sm-2">
            <div class="form-group">
                <select name="patients" class="form-select form-select-sm mb-6" aria-label=".form-select-lg example">
                    <option selected>Nom du Patient</option>
                    <?php
                    foreach ($patients as $patient) {
                    ?>
                        <option value="<?= $patient->id ?>"> <?= $patient->lastname ?> <?= $patient->firstname ?> </option>
                    <?php
                    };
                    ?>
                </select>
            </div>
        </div>
        <div class="btnSubmit"><button type="submit" class="btn btn-secondary"><i class="bi bi-calendar-plus"></i> Ajouter</button></div>
        </form>
    </div>