<?php $this->load->view("templates/header_admin"); ?>
<div class="container-xxl py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <div class="mb-3" style="max-width: 600px; visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
            <h1 class="text-secondary">Nouvelle réalisation</h1>
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
                        <select class="form-select" style="height: 55px;" name="" id="">
                            <option value="">Pays</option>
                            <?php for ($i = 0; $i < 4; $i++) { ?>
                                <option value="">Madagascar</option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input required type="text" class="form-control" name="" placeholder="Nom de la mission FR">
                            <label for="">Nom de la mission FR (*)</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input required type="text" class="form-control" name="" placeholder="Nom de la mission EN">
                            <label for="">Nom de la mission EN (*)</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input required type="text" class="form-control" name="" placeholder="Lieu">
                            <label for="">Lieu (*)</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input required type="text" class="form-control" name="" placeholder="Autorité contractante">
                            <label for="">Autorité contractante (*)</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input required type="text" class="form-control" name="" placeholder="Référence">
                            <label for="">Référence (*)</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input required type="text" class="form-control" name="" placeholder="Adresse">
                            <label for="">Adresse (*)</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input required type="date" class="form-control" name="" placeholder="Date de demarrage du projet">
                            <label for="">Date de démarrage du projet (*)</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input required type="date" class="form-control" name="" placeholder="Date d’achèvement du projet">
                            <label for="">Date d’achèvement du projet (*)</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input required type="number" class="form-control" name="" placeholder="Durée du projet">
                            <label for="">Durée du projet (*)</label>
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
                            <input type="text" class="form-control" name="" placeholder="Numero de la référence">
                            <label for="">Numero de la référence</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="email" class="form-control" name="" placeholder="Email de la référence">
                            <label for="">Email de la référence</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <textarea class="form-control" name="" placeholder="Commentaire FR" style="height: 150px"></textarea>
                            <label for="">Commentaire FR (*)</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <textarea class="form-control" name="" placeholder="Commentaire EN" style="height: 150px"></textarea>
                            <label for="">Commentaire EN (*)</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <textarea class="form-control" name="" placeholder="Description FR" style="height: 150px"></textarea>
                            <label for="">Description FR (*)</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <textarea class="form-control" name="" placeholder="Description EN" style="height: 150px"></textarea>
                            <label for="">Description EN (*)</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating">
                            <input type="file" class="form-control" name="" placeholder="Logo de l’autorité contractante">
                            <label for="">Logo de l’autorité contractante</label>
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