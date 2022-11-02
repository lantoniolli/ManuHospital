<div class="container">
    <div class="row justify-content-center">
        <h2 class="text-white">Ajouter un Rendez-vous</h2>
        <div class="col-sm-2">
            <div class="form-group">
                <select class="form-select form-select-sm mb-6" aria-label=".form-select-lg example">
                    <option selected>Choisir une date</option>
                    <option value="lundi">Lundi</option>
                    <option value="mardi">Mardi</option>
                    <option value="mercredi">Mercredi</option>
                    <option value="jeudi">Jeudi</option>
                    <option value="vendredi">Mercredi</option>
                </select>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="form-group">
                <select class="form-select form-select-sm mb-6" aria-label=".form-select-lg example">
                    <option selected>Choisir un créneau</option>
                    <option value="matin">Matin</option>
                    <option value="midi">Midi</option>
                    <option value="soir">Soir</option>
                </select>
            </div>
        </div>
         <div class="col-sm-2">
            <div class="form-group">
                <select class="form-select form-select-sm mb-6" aria-label=".form-select-lg example">
                    <option selected>Nom du Patient</option>
                    <?php
    foreach($patients as $patient){
        ?>
                    <option value="<?= $patient->id ?>"><?= $patient->lastname ?> <?= $patient->firstname ?></option>
                    <?php
    };
    ?>
                </select>
            </div>
        </div>
        <div class="btnSubmit"><button type="submit" class="btn btn-secondary"><i class="bi bi-calendar-plus"></i> Ajouter</button></div>
</div>

