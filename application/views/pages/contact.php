<?php $this->load->view("templates/header"); ?>
<div class="container-fluid page-header-contact py-5 mb-5">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown"></h1>
    </div>
</div>
<div class="text-center mx-auto mb-3 wow fadeInUp pt-5" data-wow-delay="0.1s" style="max-width: 600px; visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
    <h1 class="text-primary" style="font-weight: lighter;"><?= $data['header_' . $data['lang']]['item5'] ?></h1>
    <p class="mb-4"><?= $data['contact_' . $data['lang']]['item16'] ?></p>
</div>
<div class="container-fluid bg-light overflow-hidden px-lg-0 my-5">
    <div class="container contact px-lg-0">
        <div class="row g-0 mx-lg-0">
            <div class="col-lg-6 contact-text py-5 wow fadeIn" data-wow-delay="0.5s">
                <div class="p-lg-5 ps-lg-0">
                    <h1 class="text-dark mb-5"><?= $data['contact_' . $data['lang']]['item17'] ?></h1>
                    <form action="" method="POST" class="needs-validation" id="contact" novalidate>
                        <div class="row g-3">
                            <div class="col-12">
                                <label for="icontact"><?= $data['contact_' . $data['lang']]['item1'] ?></label>
                                <input type="text" class="form-control" style="height: 3.5rem;" id="icontact" name="contact" placeholder="+261 34 00 000 00" required>
                                <div class="invalid-feedback">
                                    Veuillez entrer un numéro de contact.
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="iemail"><?= $data['contact_' . $data['lang']]['item3'] ?></label>
                                <input type="email" class="form-control" style="height: 3.5rem;" id="iemail" name="mail" placeholder="example@example.com" required>
                                <div class="invalid-feedback">
                                    Veuillez entrer une adresse e-mail.
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="imessage"><?= $data['contact_' . $data['lang']]['item2'] ?></label>
                                <textarea class="form-control" placeholder="Lorem ipsum" id="imessage" name="message" style="height: 150px" required></textarea>
                                <div class="invalid-feedback">
                                    Veuillez entrer un message.
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
                    <iframe class="position-absolute w-100 h-100" style="object-fit: cover;" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3774.653215097533!2d47.50869967520109!3d-18.90245958226671!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1s67%20Ha%20Avaratra-Antsinana!5e0!3m2!1sfr!2smg!4v1694161348350!5m2!1sfr!2smg" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
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