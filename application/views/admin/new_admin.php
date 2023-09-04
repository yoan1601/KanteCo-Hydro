<?php $this->load->view("templates/header_admin"); ?>
<div class="container-xxl py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <div class="mb-5" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
            <h1 class="text-secondary text-center">Nouvel Administrateur</h1>
        </div>
        <div class="pb-5 row">
            <form class="col-12 col-lg-6 offset-lg-3" action="<?= site_url('administrationhydrogroup/inserer_admin') ?>" method="POST">
                <div class="row" style="row-gap: 2rem;">
                    <div class="col-12">
                        <?php if ($data['errors'] != false && isset($data['errors']['Nom'])) { ?>
                            <p style="color: red;"> <?= $data['errors']['Nom'] ?></p>
                        <?php } ?>
                        <div class="form-floating">
                            <input required type="text" class="form-control" name="Nom" placeholder="Nom">
                            <label for="">Nom (*)</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <?php if ($data['errors'] != false && isset($data['errors']['Telephone'])) { ?>
                            <p style="color: red;"> <?= $data['errors']['Telephone'] ?></p>
                        <?php } ?>
                        <div class="form-floating">
                            <input required type="text" class="form-control" name="Telephone" placeholder="Telephone">
                            <label for="">Téléphone (*)</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <?php if ($data['errors'] != false && isset($data['errors']['Mail'])) { ?>
                            <p style="color: red;"> <?= $data['errors']['Mail'] ?></p>
                        <?php } ?>
                        <div class="form-floating">
                            <input required type="email" class="form-control" name="Mail" placeholder="Mail">
                            <label for="">Mail (*)</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <?php if ($data['errors'] != false && isset($data['errors']['mdp'])) { ?>
                            <p style="color: red;"> <?= $data['errors']['mdp'] ?></p>
                        <?php } ?>
                        <div class="form-floating">
                            <input required type="password" class="form-control" name="mdp" placeholder="mdp">
                            <label for="">Mot de passe (*)</label>
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