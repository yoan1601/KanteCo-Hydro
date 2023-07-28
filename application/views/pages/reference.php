<?php $this->load->view("templates/header"); ?>
<div class="container-fluid page-header-reference py-5 mb-5">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">References</h1>
        <!-- <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Accueil</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Projects</li>
                </ol>
            </nav> -->
    </div>
</div>
<style>
    .company {
        height: 20vh;
        width: 10vw;
    }
    
    .company img {
        width: 100%;
        height: 100%;
        background-position: center;
        background-repeat: no-repeat;
    }
</style>
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px; visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
            <h6 class="text-primary">Nos réferences</h6>
            <h1 class="mb-4">Découvrez nos références. Des projets durables qui ont fait la différence.
            </h1>
        </div>
        <div class="row g-0 mx-lg-0">
            <div class="col-lg-12 feature-text py-5 wow fadeIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
                <div class="p-lg-5 ps-lg-0">
                    <div class="row g-4">
                        <?php for ($i=0; $i < 9; $i++) { ?>
                        <div class="mb-5 col-4">
                            <div class="d-flex flex-column align-items-center">
                                <div class="btn-lg-square bg-primary company">
                                    <img src="<?= base_url("assets/") ?>img/reference.jpg" alt="">
                                </div>
                                <div class="text-center">
                                    <h5 class="mt-sm-4">Entreprise</h5>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("templates/footer"); ?>