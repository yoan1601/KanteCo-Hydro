<div class="container-fluid" style="background-color: #f6f7f8;">
    <div class="container py-5">
        <div class="row g-5 justify-content-center">
            <div class="col-lg-9 d-flex align-items-center" style="gap: 2rem;">
                <i class="fas fa-comments-dollar fa-6x" style="color: #32c36c;"></i>
                <h4 style="font-weight: lighter;">
                    <?= $data['footer_' . $data['lang']]['item1'] ?>
                </h4>
            </div>
            <div class="col-lg-3">
                <button class="btn btn-primary py-3 px-5" type="submit"><?= $data['footer_' . $data['lang']]['button_devis'] ?><i class="fa fa-arrow-right ms-3"></i></button>
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
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>101 Antananarivo, Madagascar</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+261 34 00 000 00</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>contact@hydrocamp.com</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-square btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-outline-light btn-social" href=""><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-square btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-square btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
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
                        <a class="btn btn-link" href="<?= site_url('front/'); ?>"><?= $data['header_' . $data['lang']]['item4'] ?></a>
                        <a class="btn btn-link" href="<?= site_url('front/contact'); ?>"><?= $data['header_' . $data['lang']]['item5'] ?></a>
                        <a class="btn btn-link" href="<?= site_url('front/sign_in'); ?>"><?= $data['header_' . $data['lang']]['item6'] ?></a>
                    </div>
                </div>

            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-white mb-4">Newsletter</h5>
                <p><?= $data['footer_' . $data['lang']]['item4'] ?></p>
                <div class="position-relative mx-auto" style="max-width: 400px;">
                    <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="<?= $data['footer_' . $data['lang']]['mail'] ?>">
                    <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2"><?= $data['footer_' . $data['lang']]['inscription'] ?></button>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a href="#">www.hydro-camp.com</a>, All Right Reserved.
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
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


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
</body>

</html>