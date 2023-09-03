<?php $this->load->view("templates/header"); ?>
<div class="container-xxl py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <div class="mb-3" style="max-width: 600px; visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
            <h1 class="text-secondary"><?= $data['espace_' . $data['lang']]['titre'] ?></h1>
        </div>
        <div class="d-flex flex-wrap mt-4">
            <form class="d-flex mb-3 me-auto" style="gap: 0.5rem" action="<?= site_url('front/espace/1'); ?>">
                <input type="text" class="form-control" name="keyword" placeholder="<?= $data['espace_' . $data['lang']]['keyWord'] ?>" style="height: 55px; width: 300px;" required>
                <button class="btn btn-lg btn-primary btn-lg-square rounded-circle"><i class="bi bi-search"></i></button>
            </form>
        </div>
        <div class="py-5">
            <table class="table align-middle mb-0 bg-white table-hover">
                <thead class="bg-light">
                    <tr>
                        <th class="py-3"><?= $data['devis_' . $data['lang']]['item9'] ?></th>
                        <th class="py-3"><?= $data['devis_' . $data['lang']]['item11'] ?></th>
                        <th class="py-3">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($i = 0; $i < count($data['devis']); $i++) { ?>
                        <tr>
                            <td class="py-3">
                                <p class="fw-normal fs-5 mb-0"><?= $data['devis'][$i]['type_projet'] ?></p>
                            </td>
                            <td class="py-3">
                                <p class="fw-normal fs-5 mb-0"><?= $data['devis'][$i]['montant_estime'] ?> Ar</p>
                            </td>
                            <td class="py-3">
                                <div class="d-lg-flex d-none flex-wrap gap-2">
                                    <a href="" class="btn btn-outline-secondary py-2 px-3" data-bs-toggle="modal" data-bs-target="#ModalInfo-<?= $data['devis'][$i]['id'] ?>">
                                        Detail
                                    </a>
                                </div>
                                <div class="d-lg-none d-flex flex-wrap" style="column-gap: 0.75rem">
                                    <a href="" class="" data-bs-toggle="modal" data-bs-target="#ModalInfo-<?= $data['devis'][$i]['id'] ?>">
                                        <i class="fas fa-info-circle text-secondary" style="font-size: 1.5em"></i>
                                    </a>
                                </div>
                            </td>

                            <!-- Modal Info -->
                            <div class="modal fade" id="ModalInfo-<?= $data['devis'][$i]['id'] ?>">
                                <div class="modal-dialog modal-md">
                                    <div class="modal-content position-relative">
                                        <!-- En-tête du modal -->
                                        <div class="modal-header">
                                            <h4 class="modal-title"><?= $data['devis'][$i]['type_projet'] ?></h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>

                                        <!-- Contenu du modal -->
                                        <div class="modal-body">
                                            <div class="fs-5">
                                                <p><strong>Description : </strong><?= $data['devis'][$i]['description_projet'] ?></p>
                                                <p><strong>Montant Estimé : </strong><?= $data['devis'][$i]['montant_estime'] ?> Ar</p>
                                                <p><strong>Email du client : </strong><?= $data['devis'][$i]['mail'] ?></p>
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
                        <li class="page-item"><a class="page-link" href="<?= site_url('front/espace/' . $data['is_search'] . '/' . $data['page_en_cours'] - 1); ?>"><?= $data['page_en_cours'] - 1 ?></a></li>
                    <?php } ?>

                    <li class="page-item"><button class="page-link" style="color:white; background-color:#32c36c;"><?= $data['page_en_cours'] ?></button></li>

                    <?php if ($data['page_en_cours'] < $data['nbPages']) { ?>
                        <li class="page-item"><a class="page-link" href="<?= site_url('front/espace/' . $data['is_search'] . '/' . $data['page_en_cours'] + 1); ?>"><?= $data['page_en_cours'] + 1 ?></a></li>
                        <li class="page-item">
                            <a class="page-link" href="<?= site_url('front/espace/' . $data['is_search'] . '/' . $data['page_en_cours'] + 1); ?>" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </nav>
            <p class="fw-bold text-center"><?= $data['realisation_' . $data['lang']]['item4'] ?> : <?= $data['nb_resultat'] ?></p>
        </div>
    </div>
</div>
<?php $this->load->view("templates/footer"); ?>