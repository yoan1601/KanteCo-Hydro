<?php $this->load->view("templates/header"); ?>
<div class="container-fluid page-header-contact py-5 mb-5">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown"></h1>
    </div>
</div>
<div class="text-center mx-auto mb-3 wow fadeInUp pt-5" data-wow-delay="0.1s" style="max-width: 600px; visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
    <h1 class="text-primary"><?= $data['header_' . $data['lang']]['item5'] ?></h1>
    <p class="mb-4"><?= $data['contact_' . $data['lang']]['item16'] ?></p>
</div>
<div class="container-fluid bg-light overflow-hidden px-lg-0 my-5">
    <div class="container contact px-lg-0">
        <div class="row g-0 mx-lg-0">
            <div class="col-lg-6 contact-text py-5 wow fadeIn" data-wow-delay="0.5s">
                <div class="p-lg-5 ps-lg-0">
                    <h1 class="text-dark mb-5"><?= $data['contact_' . $data['lang']]['item17'] ?></h1>
                    <form action="" method="POST" id="contact">
                        <div class="row g-3">
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="contact" name="contact" placeholder="+261 34 00 000 00">
                                    <label for="name"><?= $data['contact_' . $data['lang']]['item1'] ?></label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" name="mail" placeholder="example@example.com">
                                    <label for="email"><?= $data['contact_' . $data['lang']]['item3'] ?></label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Lorem ipsum" id="message" name="message" style="height: 150px"></textarea>
                                    <label for="message"><?= $data['contact_' . $data['lang']]['item2'] ?></label>
                                </div>
                            </div>
                            <div class="col-12 d-flex justify-content-center mt-5">
                                <button class="btn btn-primary py-3 px-5" type="submit">
                                    <span class="">
                                        <?= $data['contact_' . $data['lang']]['item4'] ?>
                                    </span>
                                    <div class="spinner-border spinner-border-sm text-light ms-2 d-none" role="status" id="loadContact">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 pe-lg-0" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <iframe class="position-absolute w-100 h-100" style="object-fit: cover;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
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