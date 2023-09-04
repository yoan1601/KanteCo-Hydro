<?php $this->load->view("templates/header_admin"); ?>
<div class="container-xxl py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <div class="mb-3" style="max-width: 600px; visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
            <h1 class="text-secondary">Liste references</h1>
        </div>
        <div class="d-flex flex-wrap mt-4">
            <form class="d-flex mb-3 me-auto" style="gap: 0.5rem" action="<?= site_url('administrationHydroGroup/reference/1'); ?>">
                <input type="text" class="form-control" value="<?= $data['keyword'] ?>" name="keyword" placeholder="Mot clé" style="height: 55px; width: 300px;" required>
                <button class="btn btn-lg btn-primary btn-lg-square rounded-circle"><i class="bi bi-search"></i></button>
            </form>
            <div>
                <a href="<?= site_url('administrationHydroGroup/new_reference/'); ?>" class="btn btn-primary py-3 px-5">Ajouter</a>
            </div>
        </div>
        <div class="py-5">
            <table class="table align-middle mb-0 bg-white">
                <thead class="bg-light">
                    <tr>
                        <th class="py-3 fs-5">Logo</th>
                        <th class="py-3 fs-5">Reference</th>
                        <th class="py-3 fs-5">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($i = 0; $i < count($data['reference']); $i++) { ?>
                        <tr>
                            <td class="py-3">
                                <div class="" style="height: 5vh; width: 2.5vw;">
                                    <img class="img-fluid" style="height: 100%; width:100%; object-fit: cover;" src="<?= base_url("assets/") ?>img/<?= $data['reference'][$i]['logo'] ?>" alt="N/A">
                                </div>
                            </td>
                            <td class="py-3">
                                <p class="fw-normal fs-5 mb-0"><?= $data['reference'][$i]['nom'] ?></p>
                            </td>
                            <td class="py-3">
                                <div class="d-lg-flex d-none flex-wrap gap-2">
                                    <a href="<?= site_url('administrationHydroGroup/modif_reference/' . $data['reference'][$i]['id']) ?>" class="btn btn-outline-secondary py-2 px-3">
                                        Modifier
                                    </a>
                                    <a href="" class="btn btn-outline-danger py-2 px-3" data-bs-toggle="modal" data-bs-target="#monModal-<?= $data['reference'][$i]['id'] ?>">
                                        Supprimer
                                    </a>
                                </div>
                                <div class="d-lg-none d-flex flex-wrap" style="column-gap: 0.75rem">
                                    <a href="<?= site_url('administrationHydroGroup/modif_reference/' . $data['reference'][$i]['id']) ?>" class="">
                                        <i class="fas fa-edit text-secondary" style="font-size: 1.5em"></i>
                                    </a>
                                    <a href="" class="" data-bs-toggle="modal" data-bs-target="#monModal-<?= $data['reference'][$i]['id'] ?>">
                                        <i class="fas fa-trash text-danger" style="font-size: 1.5em"></i>
                                    </a>
                                </div>
                            </td>

                            <!-- Modal Supp -->
                            <div class="modal fade" id="monModal-<?= $data['reference'][$i]['id'] ?>">
                                <div class="modal-dialog modal-md">
                                    <div class="modal-content position-relative">
                                        <!-- En-tête du modal -->
                                        <div class="modal-header">
                                            <h4 style="font-weight:lighter;">Voulez-vous vraiment supprimer cette reference ?</h4>
                                        </div>
                                        <div>
                                            <p class="fw-normal fs-5 my-3 text-center"><?= $data['reference'][$i]['nom'] ?></p>
                                        </div>
                                        <!-- Contenu du modal -->
                                        <div class="modal-body">
                                            <div class="d-flex align-items-center justify-content-center gap-3">
                                                <a href="<?= site_url('administrationHydroGroup/reference_delete/' . $data['reference'][$i]['id']) ?>" class="btn btn-danger px-4" style="padding-top: 0.75em;padding-bottom: 0.75em;">OUI</a>
                                                <a href="" class="btn btn-primary px-4" data-bs-dismiss="modal" style="padding-top: 0.75em;padding-bottom: 0.75em;">NON</a>
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
                    <?php if ($data['page_en_cours'] > 1) { ?>
                        <li class="page-item">
                            <a class="page-link" href="<?= $data['page_en_cours'] - 1 ?>" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="<?= site_url('administrationHydroGroup/reference/' . $data['is_search'] . '/' . $data['page_en_cours'] - 1); ?>"><?= $data['page_en_cours'] - 1 ?></a></li>
                    <?php } ?>

                    <li class="page-item"><button class="page-link" style="color:white; background-color:#32c36c;"><?= $data['page_en_cours'] ?></button></li>

                    <?php if ($data['page_en_cours'] < $data['nbPages']) { ?>
                        <li class="page-item"><a class="page-link" href="<?= site_url('administrationHydroGroup/reference/' . $data['is_search'] . '/' . $data['page_en_cours'] + 1); ?>"><?= $data['page_en_cours'] + 1 ?></a></li>
                        <li class="page-item">
                            <a class="page-link" href="<?= site_url('administrationHydroGroup/reference/' . $data['is_search'] . '/' . $data['page_en_cours'] + 1); ?>" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </nav>
            <p class="fw-bold text-center">Résultats : <?= $data['nb_resultat'] ?></p>
        </div>
    </div>
</div>
<?php $this->load->view("templates/footer_admin"); ?>