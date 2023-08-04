<?php $this->load->view("templates/header"); ?>
<div class="container-fluid page-header-achievements py-5 mb-5">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown"></h1>
    </div>
</div>
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-3 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px; visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
            <h1 class="text-primary">Nos réalisations</h1>
            <p class="mb-4">Explorez nos réalisations. Des projets durables qui font la différence</p>
        </div>
        <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.3s">
            <form class="row g-3">
                <div class="col-lg-3 col-12 offset-lg-3">
                    <input type="text" class="form-control" placeholder="Mot clé" style="height: 55px;">
                </div>
                <div class="col-lg-3 col-12">
                    <select class="form-select" style="height: 55px;">
                        <option selected>Année</option>
                        <option value="">2023</option>
                        <option value="">2022</option>
                        <option value="">2021</option>
                    </select>
                </div>
            </form>
        </div>
        <div class="row g-5 py-5 ps-lg-0 portfolio-container wow fadeInUp" data-wow-delay="0.5s">
            <?php for ($i = 0; $i < 6; $i++) { ?>
                <div class="col-lg-4 col-md-6 portfolio-item">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="<?= base_url("assets/") ?>img/img-600x400-6.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="<?= base_url("assets/") ?>img/img-600x400-6.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href=""><i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="pt-3">
                        <p>
                            <span class="fw-bold text-dark">Nom de la mission : <br /></span>
                            TRAVAUX DE
                            REALISATION DE 06 FORAGES MECANIQUES
                            EQUIPES DE POMPES A MOTRICITE HUMAINE
                            DANS LA REGION ANOSY, DISTRICT
                            D’AMBOASARY, COMMUNE BEHARA ET IFOTAKA
                        </p>
                        <div>
                            <span class="fw-bold text-dark">Pays : </span> Madagascar
                        </div>
                        <div>
                            <span class="fw-bold text-dark">Année : </span> 2023
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<?php $this->load->view("templates/footer"); ?>