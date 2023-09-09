<?php $this->load->view("templates/header_admin"); ?>
<div class="container-xxl py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <div class="mb-5" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
            <h1 class="text-secondary text-center">Nouvel Administrateur</h1>
        </div>
        <div class="pb-5 row">
            <form class="col-12 col-lg-6 offset-lg-3 needs-validation" action="<?= site_url('administrationhydrogroup/inserer_admin') ?>" method="POST" novalidate>
                <div class="row" style="row-gap: 1.5rem;">
                    <div class="col-12">
                        <label for="inom">Nom (*)</label>
                        <input type="text" class="form-control" id="inom" name="Nom" placeholder="Nom" style="height: 3.5rem;" required>
                        <div class="invalid-feedback">
                            Veuillez entrer un nom.
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="itelephone">Téléphone (*)</label>
                        <input type="text" class="form-control" id="itelephone" name="Telephone" placeholder="+261 34 00 000 00" style="height: 3.5rem;" required>
                        <div class="invalid-feedback">
                            Veuillez entrer un numéro de contact.
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="imail">Mail (*)</label>
                        <input type="email" class="form-control" id="imail" name="Mail" placeholder="Mail" style="height: 3.5rem;" required>
                        <div class="invalid-feedback">
                            Veuillez entrer une adresse e-mail.
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="imdp">Mot de passe (*)</label>
                        <input type="password" class="form-control" id="imdp" name="mdp" placeholder="Mot de passe" style="height: 3.5rem;" required>
                        <div class="invalid-feedback">
                            Veuillez entrer un mot de passe.
                        </div>
                    </div>
                    <div class="col-12 d-flex justify-content-center">
                        <button class="btn btn-primary py-3 px-5" type="submit">Valider</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $this->load->view("templates/footer_admin"); ?>