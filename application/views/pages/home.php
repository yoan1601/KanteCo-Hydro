<?php $this->load->view("templates/header"); ?>
    <!-- Carousel Start -->
    <div class="container-fluid p-0 pb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative" data-dot="<img src='<?= base_url("assets/") ?>img/carousel-1.jpg'>">
                <img class="img-fluid" src="<?= base_url("assets/") ?>img/carousel-1.jpg" alt="">
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h1 class="display-2 text-white animated slideInDown">Pioneers Of Solar And Renewable Energy</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-3">Vero elitr justo clita lorem. Ipsum dolor at sed stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea elitr.</p>
                                <a href="" class="btn btn-primary rounded-pill py-3 px-5 animated slideInLeft"><?= $data['accueil_'.$data['lang']]['button'] ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative" data-dot="<img src='<?= base_url("assets/") ?>img/carousel-2.jpg'>">
                <img class="img-fluid" src="<?= base_url("assets/") ?>img/carousel-2.jpg" alt="">
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h1 class="display-2 text-white animated slideInDown">Pioneers Of Solar And Renewable Energy</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-3">Vero elitr justo clita lorem. Ipsum dolor at sed stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea elitr.</p>
                                <a href="" class="btn btn-primary rounded-pill py-3 px-5 animated slideInLeft"><?= $data['accueil_'.$data['lang']]['button'] ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative" data-dot="<img src='<?= base_url("assets/") ?>img/carousel-3.jpg'>">
                <img class="img-fluid" src="<?= base_url("assets/") ?>img/carousel-3.jpg" alt="">
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h1 class="display-2 text-white animated slideInDown">Pioneers Of Solar And Renewable Energy</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-3">Vero elitr justo clita lorem. Ipsum dolor at sed stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea elitr.</p>
                                <a href="" class="btn btn-primary rounded-pill py-3 px-5 animated slideInLeft"><?= $data['accueil_'.$data['lang']]['button'] ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-left mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="text-primary"><?= $data['accueil_'.$data['lang']]['who'] ?></h6>
                <h1 class="mb-4"><?= $data['accueil_'.$data['lang']]['answer'] ?></h1>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-8 wow fadeInUp" data-wow-delay="0.1s">
                    <p><?= $data['accueil_'.$data['lang']]['accueil_droite1'] ?></p>
                    <p><?= $data['accueil_'.$data['lang']]['accueil_droite2'] ?></p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
        <div class="container about px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 ps-lg-0 wow fadeIn" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="<?= base_url("assets/") ?>img/about.jpg" style="object-fit: cover;" alt="">
                    </div>
                </div>
                <div class="col-lg-6 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 pe-lg-0">
                        <h6 class="text-primary"><?= $data['accueil_'.$data['lang']]['propos'] ?></h6>
                        <h1 class="mb-4"><?= $data['accueil_'.$data['lang']]['combien1'] ?> <?= $data['accueil_'.$data['lang']]['expert_permanent'] ?> & <?= $data['accueil_'.$data['lang']]['combien2'] ?> <?= $data['accueil_'.$data['lang']]['consultant'] ?></h1>
                        <p><?= $data['accueil_'.$data['lang']]['accueil_droite3'] ?></p>
                        <a href="" class="btn btn-primary rounded-pill py-3 px-5 mt-3"><?= $data['accueil_'.$data['lang']]['button2'] ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="text-primary"><?= $data['accueil_'.$data['lang']]['titre'] ?></h6>
                <h1 class="mb-4"><?= $data['accueil_'.$data['lang']]['apres titre'] ?></h1>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded overflow-hidden">
                        <img class="img-fluid" src="<?= base_url("assets/") ?>img/img-600x400-1.jpg" alt="">
                        <div class="position-relative p-4 pt-0">
                            <div class="service-icon">
                                <i class="fas fa-tint fa-3x"></i>
                            </div>
                            <h4 class="mb-3"><?= $data['accueil_'.$data['lang']]['eau'] ?></h4>
                            <p><?= $data['accueil_'.$data['lang']]['detail_eau'] ?></p>
                            <a class="small fw-medium" href=""><?= $data['accueil_'.$data['lang']]['button2'] ?><i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded overflow-hidden">
                        <img class="img-fluid" src="<?= base_url("assets/") ?>img/img-600x400-2.jpg" alt="">
                        <div class="position-relative p-4 pt-0">
                            <div class="service-icon">
                                <i class="fas fa-network-wired fa-3x"></i>
                            </div>
                            <h4 class="mb-3"><?= $data['accueil_'.$data['lang']]['infrastructure'] ?></h4>
                            <p><?= $data['accueil_'.$data['lang']]['detail_infrastructure'] ?></p>
                            <a class="small fw-medium" href=""><?= $data['accueil_'.$data['lang']]['button2'] ?><i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded overflow-hidden">
                        <img class="img-fluid" src="<?= base_url("assets/") ?>img/img-600x400-3.jpg" alt="">
                        <div class="position-relative p-4 pt-0">
                            <div class="service-icon">
                                <i class="fab fa-envira fa-3x"></i>
                            </div>
                            <h4 class="mb-3"><?= $data['accueil_'.$data['lang']]['env'] ?></h4>
                            <p><?= $data['accueil_'.$data['lang']]['detail_env'] ?></p>
                            <a class="small fw-medium" href=""><?= $data['accueil_'.$data['lang']]['button2'] ?><i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <div class="container-xxl">

    </div>
<?php $this->load->view("templates/footer"); ?>