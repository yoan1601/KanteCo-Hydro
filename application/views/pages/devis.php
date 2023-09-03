<?php $this->load->view("templates/header"); ?>
<div class="container-fluid page-header-devis py-5 mb-5">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown"></h1>
    </div>
</div>
<div class="text-center mx-auto mb-3 wow fadeInUp pt-5" data-wow-delay="0.1s" style="max-width: 600px; visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
    <h1 class="text-primary"><?= $data['footer_' . $data['lang']]['button_devis'] ?></h1>
    <p class="mb-4"><?= $data['devis_' . $data['lang']]['item1'] ?></p>
</div>
<div class="container-fluid bg-light overflow-hidden px-lg-0 my-5">
    <div class="container contact px-lg-0">
        <div class="row g-0 mx-lg-0 d-flex align-items-center">
            <div class="col-lg-6 contact-text py-5 wow fadeIn" data-wow-delay="0.5s">
                <div class="p-lg-5 ps-lg-0">
                    <form action="" method="POST" id="devis">
                        <div class="row g-3">
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="type_projet" placeholder="<?= $data['devis_' . $data['lang']]['item9'] ?>">
                                    <label for=""><?= $data['devis_' . $data['lang']]['item9'] ?> (*)</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" name="description_projet" placeholder="Lorem ipsum" style="height: 150px"></textarea>
                                    <label for=""><?= $data['devis_' . $data['lang']]['item10'] ?> (*)</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="number" class="form-control" name="montant" placeholder="Montant estimé">
                                    <label for=""><?= $data['devis_' . $data['lang']]['item11'] ?></label>
                                </div>
                            </div>
                            <div class="col-12 mt-5 d-flex justify-content-center">
                                <button class="btn btn-primary py-3 px-5" type="submit">
                                    <span class="">
                                        <?= $data['devis_' . $data['lang']]['item12'] ?>
                                    </span>
                                    <div class="spinner-border spinner-border-sm text-light ms-2 d-none" role="status" id="loadDevis">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 py-5 wow fadeIn" data-wow-delay="0.5s">
                <div class="p-lg-5 ps-lg-0">
                    <h2 class="text-dark mb-5"><?= $data['devis_' . $data['lang']]['item2'] ?></h2>
                    <div class="d-flex mb-4">
                        <div class="d-flex align-items-center justify-content-center bg-primary rounded-pill" style="width: 3.75rem; height: 3.75rem">
                            <b class="text-white">1</b>
                        </div>
                        <div class="ms-3 w-75">
                            <h5><?= $data['devis_' . $data['lang']]['item3'] ?></h5>
                            <p><?= $data['devis_' . $data['lang']]['item4'] ?></p>
                        </div>
                    </div>
                    <div class="d-flex mb-4">
                        <div class="d-flex align-items-center justify-content-center bg-primary rounded-pill" style="width: 3.75rem; height: 3.75rem">
                            <b class="text-white">2</b>
                        </div>
                        <div class="ms-3 w-75">
                            <h5><?= $data['devis_' . $data['lang']]['item5'] ?></h5>
                            <p><?= $data['devis_' . $data['lang']]['item6'] ?></p>
                        </div>
                    </div>
                    <div class="d-flex mb-4">
                        <div class="d-flex align-items-center justify-content-center bg-primary rounded-pill" style="width: 3.75rem; height: 3.75rem">
                            <b class="text-white">3</b>
                        </div>
                        <div class="ms-3 w-75">
                            <h5><?= $data['devis_' . $data['lang']]['item7'] ?></h5>
                            <p><?= $data['devis_' . $data['lang']]['item8'] ?></p>
                        </div>
                    </div>
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
<?php $this->load->view("templates/footer"); ?>