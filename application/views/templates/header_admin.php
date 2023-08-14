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
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 shadow-sm" style="box-shadow: 0 0.125rem 0.25rem rgba(0,0,0,0.075) !important;">
        <div class="navbar-brand d-flex align-items-center">
            <a href="index.html" class=" d-flex align-items-center border-end px-4 px-lg-5">
                <img src="<?= base_url("assets/") ?>img/HYDROCAMP LOGO FINAL.PNG" alt="" width="70">
            </a>
            <h5 class="ms-4 text-primary">Admin backoffice</h5>
        </div>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="<?= site_url(''); ?>" class="nav-item nav-link">Realisations</a>
                <a href="<?= site_url(''); ?>" class="nav-item nav-link">Blog</a>
                <a href="<?= site_url(''); ?>" class="nav-item nav-link">Mails</a>
                <a href="<?= site_url(''); ?>" class="nav-item nav-link">Contact</a>
                <a href="<?= site_url('administrationHydroGroup/devis'); ?>" class="nav-item nav-link">Devis</a>
            </div>
            <a href="<?= site_url("administrationHydroGroup/log_out") ?>" class="btn btn-warning rounded-0 py-4 px-lg-5 d-none d-lg-block ms-3">Se déconnecter<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->