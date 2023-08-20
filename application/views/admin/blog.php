<?php $this->load->view("templates/header_admin"); ?>
<div class="container-xxl py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <div class="mb-3" style="max-width: 600px; visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
            <h1 class="text-secondary">Liste blogs</h1>
        </div>
        <div class="d-flex flex-wrap mt-4">
            <form class="d-flex mb-3 me-auto" style="gap: 0.5rem" action="<?= site_url(''); ?>">
                <input type="text" class="form-control" name="keyword" placeholder="Mot clé" style="height: 55px; width: 300px;" required>
                <button class="btn btn-lg btn-primary btn-lg-square rounded-circle"><i class="bi bi-search"></i></button>
            </form>
            <div>
                <a href="<?= site_url('administrationHydroGroup/new_blog/'); ?>" class="btn btn-primary py-3 px-5">Ajouter</a>
            </div>
        </div>
        <div class="py-5">
            <table class="table align-middle mb-0 bg-white">
                <thead class="bg-light">
                    <tr>
                        <th class="py-3 fs-5">Date de publication</th>
                        <th class="py-3 fs-5">Titre de blog</th>
                        <th class="py-3 fs-5">Auteur</th>
                        <th class="py-3 fs-5">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($i = 0; $i < 5; $i++) { ?>
                        <tr>
                            <td class="py-3">
                                <p class="fw-normal fs-5 mb-0">2023-07-01</p>
                            </td>
                            <td class="py-3">
                                <p class="fw-normal fs-5 mb-0">L'importance de la biodiversité</p>
                            </td>
                            <td class="py-3">
                                <p class="fw-normal fs-5 mb-0">Jane Doe</p>
                            </td>
                            <td class="py-3">
                                <a href="" class="ms-4">
                                    <i class="fas fa-edit text-secondary" style="font-size: 1.5em"></i>
                                </a>
                                <a href="" class="ms-4">
                                    <i class="fas fa-trash text-danger" style="font-size: 1.5em"></i>
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

        <div class="row mt-5">
            <nav>
                <ul class="pagination justify-content-center pagination-lg">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                </ul>
            </nav>
            <p class="fw-bold text-center">Résultats : 12</p>
        </div>
    </div>
</div>
<?php $this->load->view("templates/footer_admin"); ?>