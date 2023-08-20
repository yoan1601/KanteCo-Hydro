<?php $this->load->view("templates/header_admin"); ?>
<div class="container-xxl py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <div class="mb-3" style="max-width: 600px; visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
            <h1 class="text-secondary">Nouveau admin</h1>
        </div>
        <div class="py-5 row">
            <form class="col-12 col-lg-6" action="<?= site_url('') ?>" method="POST">
                <div class="row g-3">
                    <div class="col-12">
                        <div class="form-floating">
                            <input required type="text" class="form-control" name="" placeholder="Nom">
                            <label for="">Nom (*)</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating">
                            <input required type="text" class="form-control" name="" placeholder="Téléphone">
                            <label for="">Téléphone (*)</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating">
                            <input required type="email" class="form-control" name="" placeholder="Mail">
                            <label for="">Mail (*)</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating">
                            <input required type="password" class="form-control" name="" placeholder="Mot de passe">
                            <label for="">Mot de passe (*)</label>
                        </div>
                    </div>
                    <div class="col-12 mt-5 d-flex">
                        <button class="btn btn-primary py-3 px-5" type="submit">Valider</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $this->load->view("templates/footer_admin"); ?>