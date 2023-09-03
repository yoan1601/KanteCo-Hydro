<?php $this->load->view("templates/header_admin"); ?>
<div class="container-xxl py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <div class="mb-3" style="max-width: 600px; visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
            <h1 class="text-secondary">Liste des admins</h1>
        </div>
        <div class="d-flex flex-wrap mt-4">
            <form class="d-flex mb-3 me-auto" style="gap: 0.5rem" action="<?= site_url('administrationHydroGroup/list_admin/1'); ?>">
                <input type="text" class="form-control" value="<?= $data['keyword'] ?>" name="keyword" placeholder="Mot clé" style="height: 55px; width: 300px;" required>
                <button class="btn btn-lg btn-primary btn-lg-square rounded-circle"><i class="bi bi-search"></i></button>
            </form>
            <div>
                <a href="<?= site_url('administrationHydroGroup/new_admin/'); ?>" class="btn btn-primary py-3 px-5">Ajouter</a>
            </div>
        </div>
        <div class="py-5">
            <table class="table align-middle mb-0 bg-white table-hover">
                <thead class="bg-light">
                    <tr>
                        <th class="py-3 fs-5">Nom</th>
                        <th class="py-3 fs-5">Mails</th>
                        <th class="py-3 fs-5">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($i = 0; $i < count($data['admin']); $i++) { ?>
                        <tr>
                            <td class="py-3">
                                <p class="fw-normal fs-5 mb-0"><?= $data['admin'][$i]['nom'] ?></p>
                            </td>
                            <td class="py-3">
                                <p class="fw-normal fs-5 mb-0"><?= $data['admin'][$i]['mail'] ?></p>
                            </td>
                            <td class="py-3">
                                <div class="d-lg-flex d-none flex-wrap gap-2">
                                    <a href="" class="btn btn-outline-secondary py-2 px-3" data-bs-toggle="modal" data-bs-target="#ModalInfo-<?= $data['admin'][$i]['id'] ?>">
                                        Modifier
                                    </a>
                                    <a href="" class="btn btn-outline-danger py-2 px-3" data-bs-toggle="modal" data-bs-target="#monModal-<?= $data['admin'][$i]['id'] ?>">
                                        Supprimer
                                    </a>
                                </div>
                                <div class="d-lg-none d-flex flex-wrap" style="column-gap: 0.75rem">
                                    <a href="" class="" data-bs-toggle="modal" data-bs-target="#ModalInfo-<?= $data['admin'][$i]['id'] ?>">
                                        <i class="fas fa-edit text-secondary" style="font-size: 1.5em"></i>
                                    </a>
                                    <a href="" class="" data-bs-toggle="modal" data-bs-target="#monModal-<?= $data['admin'][$i]['id'] ?>">
                                        <i class="fas fa-trash text-danger" style="font-size: 1.5em"></i>
                                    </a>
                                </div>
                            </td>

                            <!-- Modal Supp -->
                            <div class="modal fade" id="monModal-<?= $data['admin'][$i]['id'] ?>">
                                <div class="modal-dialog modal-md">
                                    <div class="modal-content position-relative">
                                        <!-- En-tête du modal -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">Voulez-vous vraiment supprimer cet admin ?</h4>
                                        </div>

                                        <!-- Contenu du modal -->
                                        <div class="modal-body">
                                            <div class="d-flex align-items-center justify-content-center gap-3">
                                                <a href="<?= site_url('administrationHydroGroup/admin_delete/' . $data['admin'][$i]['id']) ?>" class="btn btn-danger px-4" style="padding-top: 0.75em;padding-bottom: 0.75em;">OUI</a>
                                                <a href="" class="btn btn-primary px-4" data-bs-dismiss="modal" style="padding-top: 0.75em;padding-bottom: 0.75em;">NON</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- Modal Info -->
                            <?php
                            if ($data['errors'] != false) { ?>
                                <div class="modal fade show" id="ModalInfo-<?= $data['admin'][$i]['id'] ?>" style="display: block;" aria-modal="true" role="dialog">
                                <?php } else { ?>
                                    <div class="modal fade" id="ModalInfo-<?= $data['admin'][$i]['id'] ?>">
                                    <?php } ?>
                                    <div class="modal-dialog modal-md">
                                        <div class="modal-content position-relative">
                                            <!-- En-tête du modal -->
                                            <div class="modal-header">
                                                <h4 class="modal-title">Modifier cet admin</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>

                                            <!-- Contenu du modal -->
                                            <div class="modal-body">
                                                <div class="fs-5">
                                                    <form class="col-12 col-lg-6" action="<?= site_url('administrationhydrogroup/modifier_admin') ?>" method="POST">
                                                        <input type="hidden" value="<?= $data['admin'][$i]['id'] ?>" name="id">
                                                        <div class="row g-3">
                                                            <div class="col-12">
                                                                <?php if ($data['errors'] != false && isset($data['errors']['Nom'])) { ?>
                                                                    <p style="color: red;"> <?= $data['errors']['Nom'] ?></p>
                                                                <?php } ?>
                                                                <div class="form-floating">
                                                                    <input required type="text" class="form-control" name="Nom" value="<?= $data['admin'][$i]['nom'] ?>" placeholder="Nom">
                                                                    <label for="">Nom (*)</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <?php if ($data['errors'] != false && isset($data['errors']['Telephone'])) { ?>
                                                                    <p style="color: red;"> <?= $data['errors']['Telephone'] ?></p>
                                                                <?php } ?>
                                                                <div class="form-floating">
                                                                    <input required type="text" class="form-control" name="Telephone" value="<?= $data['admin'][$i]['telephone'] ?>" placeholder="Telephone">
                                                                    <label for="">Téléphone (*)</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <?php if ($data['errors'] != false && isset($data['errors']['Mail'])) { ?>
                                                                    <p style="color: red;"> <?= $data['errors']['Mail'] ?></p>
                                                                <?php } ?>
                                                                <div class="form-floating">
                                                                    <input required type="email" class="form-control" name="Mail" value="<?= $data['admin'][$i]['mail'] ?>" placeholder="Mail">
                                                                    <label for="">Mail (*)</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <?php if ($data['errors'] != false && isset($data['errors']['mdp'])) { ?>
                                                                    <p style="color: red;"> <?= $data['errors']['mdp'] ?></p>
                                                                <?php } ?>
                                                                <div class="form-floating">
                                                                    <input required type="password" class="form-control" name="mdp" value="<?= $data['admin'][$i]['mot_de_passe'] ?>" placeholder="mdp">
                                                                    <label for="">Mot de passe (*)</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 mt-5 d-flex">
                                                                <button class="btn btn-primary py-3 px-5" type="submit">Valider</button>
                                                            </div>
                                                        </div>
                                                    </form>

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
                        <li class="page-item"><a class="page-link" href="<?= site_url('administrationHydroGroup/list_admin/' . $data['is_search'] . '/' . $data['page_en_cours'] - 1); ?>"><?= $data['page_en_cours'] - 1 ?></a></li>
                    <?php } ?>

                    <li class="page-item"><button class="page-link" style="color:white; background-color:#32c36c;"><?= $data['page_en_cours'] ?></button></li>

                    <?php if ($data['page_en_cours'] < $data['nbPages']) { ?>
                        <li class="page-item"><a class="page-link" href="<?= site_url('administrationHydroGroup/list_admin/' . $data['is_search'] . '/' . $data['page_en_cours'] + 1); ?>"><?= $data['page_en_cours'] + 1 ?></a></li>
                        <li class="page-item">
                            <a class="page-link" href="<?= site_url('administrationHydroGroup/list_admin/' . $data['is_search'] . '/' . $data['page_en_cours'] + 1); ?>" aria-label="Next">
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
<?php if ($data['errors'] != false) { ?>
    <div class="modal-backdrop fade show"></div>
<?php } ?>
<?php $this->load->view("templates/footer_admin"); ?>