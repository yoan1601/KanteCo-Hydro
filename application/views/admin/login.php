<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>HydroCamp</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet" />

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="<?= base_url("assets/") ?>lib/animate/animate.min.css" rel="stylesheet" />
    <link href="<?= base_url("assets/") ?>lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="<?= base_url("assets/") ?>lib/lightbox/css/lightbox.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url("assets/") ?>css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="<?= base_url("assets/") ?>css/style.css" rel="stylesheet" />

    <!-- icone onglet -->
    <link rel="icon" href="<?= base_url("assets/") ?>img/HYDROCAMP LOGO FINAL.PNG">

</head>

<body>
    <?php if (isset($data['error'])){ ?>
        <div id="error_login" data-message="error"></div>
    <?php }else{ ?>
        <div id="error_login" data-message="initial"></div>
    <?php } ?>
    <div class="global-container">
        <div class="card login-form">
            <div class="card-body">
                <div class="text-center mx-auto" style="max-width: 600px;">
                    <h1 class="text-primary mb-4 text-dark">Login admin</h1>
                </div>
                <div class="card-text">

                    <form action="<?= site_url("AdministrationHydroGroup/check_login") ?>" class="needs-validation" method="POST" novalidate>
                        <div class="row g-3">
                            <div class="col-12">
                                <label for="iemail">Votre email</label>
                                <input type="email" class="form-control" style="height: 3.5rem;" id="iemail" name="email" placeholder="example@example.com" required>
                                <div class="invalid-feedback">
                                    Veuillez entrer une adresse e-mail.
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="ipassword">Mot de passe</label>
                                <input type="password" class="form-control" style="height: 3.5rem;" id="ipassword" name="password" placeholder="Mot de passe" required>
                                <div class="invalid-feedback">
                                    Veuillez entrer un mot de passe.
                                </div>
                            </div>
                            <div class="col-12 d-flex justify-content-center">
                                <button class="btn btn-primary py-3 px-5 w-100" type="submit">Se connecter</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="position-fixed top-0 end-0 p-3" style="z-index: 9999">
        <div id="LoginToast" class="toast bg-white hide" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <strong class="me-auto fs-6">Login Administrateur</strong>
                <small class="text-muted fs-6">Maintenant</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body fs-6 text-danger">
                L'adresse e-mail ou le mot de passe que vous avez saisi est incorrect. Veuillez réessayer.
            </div>
        </div>
    </div>

    <style>
        html,
        body {
            height: 100%;
        }

        .global-container {
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f5f5f5;
        }

        form {
            font-size: 14px;
        }

        .card-body {
            padding: 3rem 3rem;
        }

        .card-title {
            font-weight: 300;
        }


        .login-form {
            width: 450px;
            margin: 20px;
        }

        .sign-up {
            text-align: center;
            padding: 20px 0 0;
        }

        .alert {
            margin-bottom: -30px;
            font-size: 13px;
            margin-top: 20px;
        }
    </style>

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
    </script>
</body>

</html>