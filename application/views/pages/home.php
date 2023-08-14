<?php $this->load->view("templates/header"); ?>
<!-- Carousel Start -->
<div class="container-fluid p-0 pb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="owl-carousel header-carousel position-relative">
        <div class="owl-carousel-item position-relative" data-dot="<img src='<?= base_url("assets/") ?>img/carousel-1.jpg'>">
            <img class="img-fluid mh-100" style="height: 100vh; object-fit: cover;" src="<?= base_url("assets/") ?>img/carousel-1.jpg" alt="">
            <div class="owl-carousel-inner">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-10 col-lg-8">
                            <h1 class="display-2 text-white animated slideInDown"><?= $data['accueil_' . $data['lang']]['caroussel1_titre'] ?></h1>
                            <p class="fs-5 fw-medium text-white mb-4 pb-3"><?= $data['accueil_' . $data['lang']]['caroussel1_p'] ?></p>
                            <div class="btn btn-primary rounded-pill py-3 px-5 animated slideInLeft"><span class="m-3"><?= $data['accueil_' . $data['lang']]['button'] ?></span><i class="fa fa-arrow-down ms-2"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="owl-carousel-item position-relative" data-dot="<img src='<?= base_url("assets/") ?>img/carousel-2.jpg'>">
            <img class="img-fluid mh-100" style="height: 100vh; object-fit: cover;" src="<?= base_url("assets/") ?>img/carousel-2.jpg" alt="">
            <div class="owl-carousel-inner">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-10 col-lg-8">
                            <h1 class="display-2 text-white animated slideInDown"><?= $data['accueil_' . $data['lang']]['caroussel2_titre'] ?></h1>
                            <p class="fs-5 fw-medium text-white mb-4 pb-3"><?= $data['accueil_' . $data['lang']]['caroussel2_p'] ?></p>
                            <div class="btn btn-primary rounded-pill py-3 px-5 animated slideInLeft"><span class="m-3"><?= $data['accueil_' . $data['lang']]['button'] ?></span><i class="fa fa-arrow-down ms-2"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="owl-carousel-item position-relative" data-dot="<img src='<?= base_url("assets/") ?>img/carousel-3.jpg'>">
            <img class="img-fluid mh-100" style="height: 100vh; object-fit: cover;" src="<?= base_url("assets/") ?>img/carousel-3.jpg" alt="">
            <div class="owl-carousel-inner">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-10 col-lg-8">
                            <h1 class="display-2 text-white animated slideInDown"><?= $data['accueil_' . $data['lang']]['caroussel3_titre'] ?></h1>
                            <p class="fs-5 fw-medium text-white mb-4 pb-3"><?= $data['accueil_' . $data['lang']]['caroussel3_p'] ?></p>
                            <div class="btn btn-primary rounded-pill py-3 px-5 animated slideInLeft"><span class="m-3"><?= $data['accueil_' . $data['lang']]['button'] ?></span><i class="fa fa-arrow-down ms-2"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->

<!-- About Start -->
<div class="container-xxl">
    <div class="row g-0 mx-lg-0">
        <div class="col-lg-6 d-flex align-items-center about-text wow fadeIn mb-4" data-wow-delay="0.5s">
            <div class="p-lg-5 pe-lg-0">
                <p class="text-primary font-weight-light" style="font-size: xx-large;"><?= $data['accueil_' . $data['lang']]['who'] ?></p>
                <h1 class="mb-4"><?= $data['accueil_' . $data['lang']]['answer'] ?></h1>
                <p><?= $data['accueil_' . $data['lang']]['accueil_droite1'] ?></p>
                <p><?= $data['accueil_' . $data['lang']]['accueil_droite2'] ?></p>
            </div>
        </div>
        <!-- <div class="col-lg-6 ps-lg-0 d-flex align-item-center justify-content-center wow fadeIn" data-wow-delay="0.5s">
                <img class="" src="<?= base_url("assets/") ?>img/HYDROCAMP LOGO FINAL.PNG" style="object-fit: contain; width: 350px;" alt="">
            </div> -->
        <div class="col-lg-6">
            <div class="row p-lg-5 align-items-center">
                <div class="col-md-6 col-lg-6 wow fadeIn mb-5 " data-wow-delay="0.5s">
                    <div class="d-flex align-items-center mb-4">
                        <div class="btn-lg-square bg-primary rounded-circle me-3">
                            <i class="fa fa-users text-white"></i>
                        </div>
                        <h1 class="mb-0" data-toggle=""></h1>
                    </div>
                    <h5 class="mb-3"><?= $data['accueil_' . $data['lang']]['propos_droite_UL_titre'] ?></h5>
                    <span><?= $data['accueil_' . $data['lang']]['propos_droite_UL_detail'] ?></span>
                </div>
                <div class="col-md-6 col-lg-6 wow fadeIn mb-5 " data-wow-delay="0.7s">
                    <div class="d-flex align-items-center mb-4">
                        <div class="btn-lg-square bg-primary rounded-circle me-3">
                            <i class="fa fa-users-cog text-white"></i>
                        </div>
                        <h1 class="mb-0" data-toggle=""></h1>
                    </div>
                    <h5 class="mb-3"><?= $data['accueil_' . $data['lang']]['propos_droite_UR_titre'] ?></h5>
                    <span><?= $data['accueil_' . $data['lang']]['propos_droite_UR_detail'] ?></span>
                </div>
                <div class="col-md-6 col-lg-6 wow fadeIn mb-2 " data-wow-delay="0.5s">
                    <div class="d-flex align-items-center mb-4">
                        <div class="btn-lg-square bg-primary rounded-circle me-3">
                            <i class="fa fa-award text-white"></i>
                        </div>
                        <h1 class="mb-0" data-toggle=""></h1>
                    </div>
                    <h5 class="mb-3"><?= $data['accueil_' . $data['lang']]['propos_droite_DL_titre'] ?></h5>
                    <span><?= $data['accueil_' . $data['lang']]['propos_droite_DL_detail'] ?></span>
                </div>
                <div class="col-md-6 col-lg-6 wow fadeIn mb-2 " data-wow-delay="0.7s">
                    <div class="d-flex align-items-center mb-4">
                        <div class="btn-lg-square bg-primary rounded-circle me-3">
                            <i class="fa fa-users-cog text-white"></i>
                        </div>
                        <h1 class="mb-0" data-toggle=""></h1>
                    </div>
                    <h5 class="mb-3"><?= $data['accueil_' . $data['lang']]['propos_droite_DR_titre'] ?></h5>
                    <span><?= $data['accueil_' . $data['lang']]['propos_droite_DR_detail'] ?></span>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp mb-5" data-wow-delay="0.1s" style="max-width: 1000px; visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
            <h4 class="text-primary"><?= $data['contact_' . $data['lang']]['item5'] ?></h4>
        </div>
        <div class="row pt-5 wow fadeInUp" data-wow-delay="0.5s">
            <div class="col-lg-5 offset-lg-1 col-12">
                <div class="d-flex align-items-center mb-5">
                    <span class="me-3 text-dark">
                        <i class="fas fa-check-circle fa-3x"></i>
                    </span>
                    <p class="m-0 fs-5 text-dark"><?= $data['contact_' . $data['lang']]['item6'] ?></p>
                </div>
                <div class="d-flex align-items-center mb-5">
                    <span class="me-3 text-dark">
                        <i class="fas fa-check-circle fa-3x"></i>
                    </span>
                    <p class="m-0 fs-5 text-dark"><?= $data['contact_' . $data['lang']]['item7'] ?></p>
                </div>
                <div class="d-flex align-items-center mb-5">
                    <span class="me-3 text-dark">
                        <i class="fas fa-check-circle fa-3x"></i>
                    </span>
                    <p class="m-0 fs-5 text-dark"><?= $data['contact_' . $data['lang']]['item8'] ?></p>
                </div>
                <div class="d-flex align-items-center mb-5">
                    <span class="me-3 text-dark">
                        <i class="fas fa-check-circle fa-3x"></i>
                    </span>
                    <p class="m-0 fs-5 text-dark"><?= $data['contact_' . $data['lang']]['item9'] ?></p>
                </div>
                <div class="d-flex align-items-center mb-5">
                    <span class="me-3 text-dark">
                        <i class="fas fa-check-circle fa-3x"></i>
                    </span>
                    <p class="m-0 fs-5 text-dark"><?= $data['contact_' . $data['lang']]['item10'] ?></p>
                </div>
            </div>
            <div class="col-lg-5 col-12">
                <div class="d-flex align-items-center mb-5">
                    <span class="me-3 text-dark">
                        <i class="fas fa-check-circle fa-3x"></i>
                    </span>
                    <p class="m-0 fs-5 text-dark"><?= $data['contact_' . $data['lang']]['item11'] ?></p>
                </div>
                <div class="d-flex align-items-center mb-5">
                    <span class="me-3 text-dark">
                        <i class="fas fa-check-circle fa-3x"></i>
                    </span>
                    <p class="m-0 fs-5 text-dark"><?= $data['contact_' . $data['lang']]['item12'] ?></p>
                </div>
                <div class="d-flex align-items-center mb-5">
                    <span class="me-3 text-dark">
                        <i class="fas fa-check-circle fa-3x"></i>
                    </span>
                    <p class="m-0 fs-5 text-dark"><?= $data['contact_' . $data['lang']]['item13'] ?>e</p>
                </div>
                <div class="d-flex align-items-center mb-5">
                    <span class="me-3 text-dark">
                        <i class="fas fa-check-circle fa-3x"></i>
                    </span>
                    <p class="m-0 fs-5 text-dark"><?= $data['contact_' . $data['lang']]['item14'] ?></p>
                </div>
                <div class="d-flex align-items-center mb-5">
                    <span class="me-3 text-dark">
                        <i class="fas fa-check-circle fa-3x"></i>
                    </span>
                    <p class="m-0 fs-5 text-dark"><?= $data['contact_' . $data['lang']]['item15'] ?></p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
    <div class="container about px-lg-0">
        <div class="row g-0 mx-lg-0">
            <div class="col-lg-6 ps-lg-0 wow fadeIn" data-wow-delay="0.1s" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="position-absolute img-fluid w-100 h-100" src="<?= base_url("assets/") ?>img/HYDROCAMP LOGO FINAL.PNG" alt="">
                </div>
            </div>
            <div class="col-lg-6 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                <div class="p-lg-5 pe-lg-0">
                    <p class="text-primary font-weight-light" style="font-size: xx-large;"><?= $data['accueil_' . $data['lang']]['propos'] ?></p>
                    <h1 class="mb-4"><?= $data['accueil_' . $data['lang']]['engagement'] ?></h1>
                    <p><?= $data['accueil_' . $data['lang']]['accueil_droite3'] ?></p>
                    <a href="<?= site_url('front/achievements'); ?>" class="btn btn-primary rounded-pill py-3 px-5 mt-3"><span class="m-3"><?= $data['accueil_' . $data['lang']]['button2'] ?></span> <i class="fa fa-arrow-right ms-2"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 615px;">
            <h1 class="text-primary"><?= $data['accueil_' . $data['lang']]['titre'] ?></h1>
            <p class="mb-4" style="width:fit-content;"><?= $data['accueil_' . $data['lang']]['apres titre'] ?></p>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded overflow-hidden">
                    <img class="img-fluid" style="height: 40vh;" src="<?= base_url("assets/") ?>img/eau.jpg" alt="">
                    <div class="position-relative p-4 pt-0">
                        <div class="service-icon">
                            <i class="fas fa-tint fa-3x"></i>
                        </div>
                        <h4 class="mb-3"><?= $data['accueil_' . $data['lang']]['eau'] ?></h4>
                        <p class="service-text"><?= $data['accueil_' . $data['lang']]['detail_eau'] ?></p>
                        <a class="small fw-medium" href="" data-bs-toggle="modal" data-bs-target="#monModal"><?= $data['accueil_' . $data['lang']]['button2'] ?><i class="fa fa-arrow-right ms-2"></i></a>
                        <!-- Modal EAU -->
                        <div class="modal fade" id="monModal">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content position-relative">
                                    <!-- En-tête du modal -->
                                    <div class="modal-header">
                                        <h4 class="modal-title"><?= $data['accueil_' . $data['lang']]['eau'] ?></h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>

                                    <!-- Contenu du modal -->
                                    <!-- <div class="modal-body">
                                        <img class="img-fluid" src="<?= base_url("assets/") ?>img/eau.jpg" alt="">
                                    </div> -->

                                    <!-- Contenu du modal -->
                                    <div class="modal-body">
                                        <p><?= $data['accueil_' . $data['lang']]['detail_eau'] ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item rounded overflow-hidden">
                    <img class="img-fluid" style="height: 40vh;" src="<?= base_url("assets/") ?>img/infra.jpg" alt="">
                    <div class="position-relative p-4 pt-0">
                        <div class="service-icon">
                            <i class="fas fa-network-wired fa-3x"></i>
                        </div>
                        <h4 class="mb-3"><?= $data['accueil_' . $data['lang']]['infrastructure'] ?></h4>
                        <p class="service-text"><?= $data['accueil_' . $data['lang']]['detail_infrastructure'] ?></p>
                        <a class="small fw-medium" href="" data-bs-toggle="modal" data-bs-target="#monModal2"><?= $data['accueil_' . $data['lang']]['button2'] ?><i class="fa fa-arrow-right ms-2"></i></a>
                        <!-- Modal INFRA -->
                        <div class="modal fade" id="monModal2">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content position-relative">
                                    <!-- En-tête du modal -->
                                    <div class="modal-header">
                                        <h4 class="modal-title"><?= $data['accueil_' . $data['lang']]['infrastructure'] ?></h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>

                                    <!-- Contenu du modal -->
                                    <!-- <div class="modal-body">
                                        <img class="img-fluid" src="<?= base_url("assets/") ?>img/infra.jpg" alt="">
                                    </div> -->

                                    <!-- Contenu du modal -->
                                    <div class="modal-body">
                                        <p><?= $data['accueil_' . $data['lang']]['detail_infrastructure'] ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item rounded overflow-hidden">
                    <img class="img-fluid" style="height: 40vh;" src="<?= base_url("assets/") ?>img/env.jpg" alt="">
                    <div class="position-relative p-4 pt-0">
                        <div class="service-icon">
                            <i class="fab fa-envira fa-3x"></i>
                        </div>
                        <h4 class="mb-3"><?= $data['accueil_' . $data['lang']]['env'] ?></h4>
                        <p class="service-text"><?= $data['accueil_' . $data['lang']]['detail_env'] ?></p>
                        <a class="small fw-medium" href="" data-bs-toggle="modal" data-bs-target="#monModal3"><?= $data['accueil_' . $data['lang']]['button2'] ?><i class="fa fa-arrow-right ms-2"></i></a>
                        <!-- Modal ENV -->
                        <div class="modal fade" id="monModal3">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content position-relative">
                                    <!-- En-tête du modal -->
                                    <div class="modal-header">
                                        <h4 class="modal-title"><?= $data['accueil_' . $data['lang']]['env'] ?></h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>

                                    <!-- Contenu du modal -->
                                    <!-- <div class="modal-body">
                                        <img class="img-fluid" src="<?= base_url("assets/") ?>img/env.jpg" alt="">
                                    </div> -->

                                    <!-- Contenu du modal -->
                                    <div class="modal-body">
                                        <p><?= $data['accueil_' . $data['lang']]['detail_env'] ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->
<script>
    function couperTexte(texte, longueurMax = 75) {
        if (texte.length <= longueurMax) {
            return texte;
        } else {
            return texte.slice(0, longueurMax) + "...";
        }
    }
    const serviceText = document.querySelectorAll("p.service-text");
    serviceText.forEach(item => {
        item.textContent = couperTexte(item.textContent);
    });
</script>
<?php $this->load->view("templates/footer"); ?>