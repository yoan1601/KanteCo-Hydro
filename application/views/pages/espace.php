<?php $this->load->view("templates/header"); ?>
<div class="container-xxl py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <div class="mb-3" style="max-width: 600px; visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
            <h1 class="text-secondary">Liste des devis</h1>
        </div>
        <div class="row mt-n2">
            <form class="row g-3" action="<?= site_url(''); ?>">
                <div class="col-lg-3 col-12">
                    <input type="text" class="form-control" name="keyword" placeholder="Mot clé" style="height: 55px;" required>
                </div>
                <button class="btn btn-lg btn-primary btn-lg-square rounded-circle"><i class="bi bi-search"></i></button>
            </form>
        </div>
        <div class="py-5">
            <table class="table align-middle mb-0 bg-white">
                <thead class="bg-light">
                    <tr>
                        <th class="py-3">Type du projet</th>
                        <th class="py-3">Montant estimé</th>
                        <th class="py-3">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($i = 0; $i < 4; $i++) { ?>
                        <tr>
                            <td class="py-3">
                                <p class="fw-normal fs-5 mb-0">Forrage</p>
                            </td>
                            <td class="py-3">
                                <p class="fw-normal fs-5 mb-0">125.000 Ar</p>
                            </td>
                            <td class="py-3">
                                <a href="" class="me-4" data-bs-toggle="modal" data-bs-target="#ModalInfo">
                                    <i class="fas fa-info-circle text-info" style="font-size: 1.5em"></i>
                                </a>
                            </td>

                            <!-- Modal Info -->
                            <div class="modal fade" id="ModalInfo">
                                <div class="modal-dialog modal-md">
                                    <div class="modal-content position-relative">
                                        <!-- En-tête du modal -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">Forrage</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>

                                        <!-- Contenu du modal -->
                                        <div class="modal-body">
                                            <div class="fs-5">
                                                <p><strong>Description : </strong>OK</p>
                                                <p><strong>Montant Estimé : </strong>125.000 Ar</p>
                                                <p><strong>Email du client : </strong>bob.brown@example.com</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
<?php $this->load->view("templates/footer"); ?>