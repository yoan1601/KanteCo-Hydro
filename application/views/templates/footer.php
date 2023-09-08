<div class="container-fluid wow fadeIn" data-wow-delay="0.1s" style="background-color: #f6f7f8;">
    <div class="container py-5">
        <div class="row g-5 justify-content-center">
            <div class="col-lg-9 d-flex align-items-center" style="gap: 2rem;">
                <i class="fas fa-comments-dollar fa-6x" style="color: #32c36c;"></i>
                <h5 style="font-weight: lighter;">
                    <?= $data['footer_' . $data['lang']]['item1'] ?>
                </h5>
            </div>
            <div class="col-lg-3">
                <?php if ($data['session'] != false) { ?>
                    <a href="<?= site_url("front/devis") ?>" class="btn btn-primary py-3 px-5"><?= $data['footer_' . $data['lang']]['button_devis'] ?><i class="fa fa-arrow-right ms-3"></i></a>
                <?php } else { ?>
                    <a href="<?= site_url("front/sign_in") ?>" class="btn btn-primary py-3 px-5"><?= $data['footer_' . $data['lang']]['button_devis'] ?><i class="fa fa-arrow-right ms-3"></i></a>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<!-- Footer Start -->
<div class="container-fluid bg-dark text-body footer mt-0 pt-lg-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-4 col-md-6">
                <h5 class="text-white mb-4"><?= $data['footer_' . $data['lang']]['address'] ?></h5>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Antananarivo I-Région Analamanga</p>
                <p class="mb-2"><i class="fas fa-building me-3"></i>2103 Bis 67 Ha Avaratra-Antsinana</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+261 34 97 802 31 / +261 34 59 708 76</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>contact@hydrocamp-group.com</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-square btn-outline-light btn-social" href="https://www.facebook.com/profile.php?id=100083307903911"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-outline-light btn-social" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-square btn-outline-light btn-social" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-square btn-outline-light btn-social" href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-5 col-md-6">
                <h5 class="text-white mb-4"><?= $data['footer_' . $data['lang']]['item3'] ?></h5>

                <div class="row">
                    <div class="col-lg-6">
                        <a class="btn btn-link" href="<?= site_url('front'); ?>"><?= $data['header_' . $data['lang']]['item1'] ?></a>
                        <a class="btn btn-link" href="<?= site_url('front/reference'); ?>"><?= $data['header_' . $data['lang']]['item2'] ?></a>
                        <a class="btn btn-link" href="<?= site_url('front/achievements'); ?>"><?= $data['header_' . $data['lang']]['item3'] ?></a>
                    </div>
                    <div class="col-lg-6">
                        <a class="btn btn-link" href="<?= site_url('front/blog'); ?>"><?= $data['header_' . $data['lang']]['item4'] ?></a>
                        <a class="btn btn-link" href="<?= site_url('front/contact'); ?>"><?= $data['header_' . $data['lang']]['item5'] ?></a>
                        <a class="btn btn-link" href="<?= site_url('front/sign_in'); ?>"><?= $data['header_' . $data['lang']]['item6'] ?></a>
                    </div>
                </div>

            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-white mb-4">Newsletter</h5>
                <p><?= $data['footer_' . $data['lang']]['item4'] ?></p>
                <div class="position-relative mx-auto" style="max-width: 400px;">
                    <form action="" method="post" id="newsLetter">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="email" name="email" placeholder="<?= $data['footer_' . $data['lang']]['mail'] ?>" required>
                        <button type="submit" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">
                            <span class="">
                                <?= $data['footer_' . $data['lang']]['inscription'] ?>
                            </span>
                            <div class="spinner-border spinner-border-sm text-light ms-2 d-none" role="status" id="loadNewsLetter">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a href="https://hydrocamp-group.com/">www.hydro-camp.com</a>, All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                    <br />Distributed By:
                    <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="position-fixed top-0 end-0 p-3" style="z-index: 9999">
    <div id="newsletterToast" class="toast bg-white hide" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
            <strong class="me-auto fs-6">Newsletter</strong>
            <small class="text-muted fs-6">Maintenant</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body fs-6 text-success">
            Vous êtes maintenant inscrit à notre newsletter.
        </div>
    </div>
</div>

<div class="position-fixed top-0 end-0 p-3" style="z-index: 9999">
    <div id="devisToast" class="toast bg-white hide" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
            <strong class="me-auto fs-6">Devis</strong>
            <small class="text-muted fs-6">Maintenant</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body fs-6 text-success">
            Enregistrement du devis avec succès.
        </div>
    </div>
</div>

<div class="position-fixed top-0 end-0 p-3" style="z-index: 9999">
    <div id="contactToast" class="toast bg-white hide" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
            <strong class="me-auto fs-6">Contact</strong>
            <small class="text-muted fs-6">Maintenant</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body fs-6 text-success">
            Enregistrement avec succès.
        </div>
    </div>
</div>

<!-- Footer End -->

<!-- Back to Top -->
<a href="#" role="button" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url("assets/") ?>lib/wow/wow.min.js"></script>
<script src="<?= base_url("assets/") ?>lib/easing/easing.min.js"></script>
<script src="<?= base_url("assets/") ?>lib/waypoints/waypoints.min.js"></script>
<script src="<?= base_url("assets/") ?>lib/counterup/counterup.min.js"></script>
<script src="<?= base_url("assets/") ?>lib/owlcarousel/owl.carousel.min.js"></script>
<script src="<?= base_url("assets/") ?>lib/isotope/isotope.pkgd.min.js"></script>
<script src="<?= base_url("assets/") ?>lib/lightbox/js/lightbox.min.js"></script>

<!-- Template Javascript -->
<script src="<?= base_url("assets/") ?>js/main.js"></script>

<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
    })()

    function validateForm(form) {
        var isValid = true;

        // Sélectionnez tous les champs de formulaire dans le formulaire donné
        var formFields = form.find('input, textarea, select');

        formFields.each(function() {
            if (!this.checkValidity()) {
                isValid = false;
            }
        });

        return isValid;
    }


    $(document).ready(function() {

        // Formulaire newsLetter
        $('#newsLetter').submit(function(e) {
            e.preventDefault();
            $('#loadNewsLetter').removeClass("d-none");

            // Récupérez les données du formulaire
            var formData = $(this).serialize();

            $.ajax({
                type: 'POST',
                url: '<?= site_url("utilisateur/send_news_letter") ?>', // Remplacez par l'URL de votre script de traitement
                data: formData,
                success: function(response) {
                    let msg = JSON.parse(response);
                    if (msg["state"] === 'success') {
                        // Affichez le toast en cas de succès
                        var newsletterToast = new bootstrap.Toast(document.getElementById('newsletterToast'));
                        newsletterToast.show();

                        // Réinitialisez le formulaire
                        $('#newsLetter')[0].reset();
                        $('#loadNewsLetter').addClass("d-none");

                    } else {
                        // Gérez les erreurs ici
                    }
                }
            });
        });

        // Formulaire devis
        $('#devis').submit(function(e) {
            e.preventDefault();

            if (validateForm($('#devis'))) {
                $('#loadDevis').removeClass("d-none");

                // Récupérez les données du formulaire
                var formData = $(this).serialize();

                $.ajax({
                    type: 'POST',
                    url: '<?= site_url('devis/send_devis') ?>', // Remplacez par l'URL de votre script de traitement
                    data: formData,
                    success: function(response) {
                        let msg = JSON.parse(response);
                        if (msg["state"] === 'success') {
                            // Affichez le toast en cas de succès
                            var devisToast = new bootstrap.Toast(document.getElementById('devisToast'));
                            devisToast.show();

                            // Réinitialisez le formulaire
                            $('#devis')[0].reset();
                            $('#devis').removeClass("was-validated");
                            $('#loadDevis').addClass("d-none");

                        } else {
                            // Gérez les erreurs ici
                        }
                    }
                });
            }
        });

        // Formulaire contact
        $('#contact').submit(function(e) {
            e.preventDefault();

            if (validateForm($('#contact'))) {
                $('#loadContact').removeClass("d-none");

                // Récupérez les données du formulaire
                var formData = $(this).serialize();

                $.ajax({
                    type: 'POST',
                    url: '<?= site_url("contact/send_contact") ?>', // Remplacez par l'URL de votre script de traitement
                    data: formData,
                    success: function(response) {
                        let msg = JSON.parse(response);
                        if (msg["state"] === 'success') {
                            // Affichez le toast en cas de succès
                            var contactToast = new bootstrap.Toast(document.getElementById('contactToast'));
                            contactToast.show();

                            // Réinitialisez le formulaire
                            $('#contact')[0].reset();
                            $('#contact').removeClass("was-validated");
                            $('#loadContact').addClass("d-none");

                        } else {
                            // Gérez les erreurs ici
                        }

                    }
                });
            }
        });
    });
</script>
</body>

</html>