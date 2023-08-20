<?php $this->load->view("templates/header_admin"); ?>
<div class="container-xxl py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <div class="mb-3" style="max-width: 600px; visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
            <h1 class="text-secondary">Nouveau blog</h1>
        </div>
        <div class="py-5 row">
            <form class="col-lg-8 col-12" action="<?= site_url('') ?>" method="POST">
                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input required type="text" class="form-control" name="" placeholder="Auteur">
                            <label for="">Auteur (*)</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input required type="date" class="form-control" name="" placeholder="Date de publication">
                            <label for="">Date de publication (*)</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input required type="text" class="form-control" name="" placeholder="Titre du blog FR">
                            <label for="">Titre du blog FR (*)</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input required type="text" class="form-control" name="" placeholder="Titre du blog EN">
                            <label for="">Titre du blog EN (*)</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <textarea required class="form-control" name="" placeholder="Texte de publication FR" style="height: 150px"></textarea>
                            <label for="">Texte de publication FR (*)</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <textarea required class="form-control" name="" placeholder="Texte de publication EN" style="height: 150px"></textarea>
                            <label for="">Texte de publication EN (*)</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input required type="file" class="form-control" name="" placeholder="Image de couverture (*)">
                            <label for="">Image de couverture (*)</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="file" class="form-control" name="" placeholder="Images de publication">
                            <label for="">Images de publication</label>
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