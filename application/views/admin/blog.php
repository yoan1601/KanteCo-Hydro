<?php $this->load->view("templates/header_admin"); ?>
<div class="container-xxl py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <div class="mb-3" style="max-width: 600px; visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
            <h1 class="text-secondary">Liste blogs</h1>
        </div>
        <div class="d-flex flex-wrap mt-4">
            <form class="d-flex mb-3 me-auto" style="gap: 0.5rem" action="<?= site_url('administrationHydroGroup/blog/1'); ?>">
                <input type="text" class="form-control" value="<?= $data['keyword'] ?>" name="keyword" placeholder="Mot clé" style="height: 55px; width: 300px;" required>
                <button class="btn btn-lg btn-primary btn-lg-square rounded-circle"><i class="bi bi-search"></i></button>
            </form>
            <div>
                <a href="<?= site_url('administrationHydroGroup/new_blog/'); ?>" class="btn btn-primary py-3 px-5">Ajouter
                    <i class="fas fa-plus ms-2"></i>
                </a>
            </div>
        </div>
        <div class="py-5 table-responsive">
            <table class="table table-bordered align-middle mb-0 bg-white table-hover text-dark">
                <thead class="bg-light">
                    <tr>
                        <th class="py-3">Date de publication</th>
                        <th class="py-3">Titre de blog</th>
                        <th class="py-3">Auteur</th>
                        <th class="py-3">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($i = 0; $i < count($data['blog']); $i++) { ?>
                        <tr>
                            <td class="py-3">
                                <?= $data['blog'][$i]['date_publication'] ?>
                            </td>
                            <td class="py-3">
                                <?= $data['blog'][$i]['titre_FR'] ?>
                            </td>
                            <td class="py-3">
                                <?= $data['blog'][$i]['auteur'] ?>
                            </td>
                            <td class="py-3">
                                <div class="d-lg-flex d-none flex-wrap gap-2">
                                    <a href="<?= site_url('administrationHydroGroup/modif_blog/' . $data['blog'][$i]['id']) ?>" class="btn btn-outline-secondary py-2 px-3">
                                        Modifier
                                        <i class="fas fa-edit text-secondary ms-2 hover-light"></i>
                                    </a>
                                    <a href="" class="btn btn-outline-danger py-2 px-3" data-bs-toggle="modal" data-bs-target="#monModal-<?= $data['blog'][$i]['id'] ?>">
                                        Supprimer
                                        <i class="fas fa-trash text-danger ms-2 hover-light"></i>
                                    </a>
                                </div>
                                <div class="d-lg-none d-flex flex-wrap" style="column-gap: 0.75rem">
                                    <a href="<?= site_url('administrationHydroGroup/modif_blog/' . $data['blog'][$i]['id']) ?>" class="">
                                        <i class="fas fa-edit text-secondary" style="font-size: 1.25em"></i>
                                    </a>
                                    <a href="" class="" data-bs-toggle="modal" data-bs-target="#monModal-<?= $data['blog'][$i]['id'] ?>">
                                        <i class="fas fa-trash text-danger" style="font-size: 1.25em"></i>
                                    </a>
                                </div>
                            </td>

                            <!-- Modal Supp -->
                            <div class="modal fade" id="monModal-<?= $data['blog'][$i]['id'] ?>">
                                <div class="modal-dialog modal-md">
                                    <div class="modal-content position-relative">
                                        <!-- En-tête du modal -->
                                        <div class="modal-header">
                                            <h4 style="font-weight:lighter;">Voulez-vous vraiment supprimer ce blog ?</h4>
                                        </div>
                                        <div>
                                            <p class="fw-normal fs-5 my-3 text-center"><?= $data['blog'][$i]['titre_FR'] ?></p>
                                        </div>
                                        <!-- Contenu du modal -->
                                        <div class="modal-body">
                                            <div class="d-flex align-items-center justify-content-center gap-3">
                                                <a href="<?= site_url('administrationHydroGroup/blog_delete/' . $data['blog'][$i]['id']) ?>" class="btn btn-danger px-4" style="padding-top: 0.75em;padding-bottom: 0.75em;">OUI</a>
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
                        <li class="page-item"><a class="page-link" href="<?= site_url('administrationHydroGroup/blog/' . $data['is_search'] . '/' . $data['page_en_cours'] - 1); ?>"><?= $data['page_en_cours'] - 1 ?></a></li>
                    <?php } ?>

                    <li class="page-item"><button class="page-link" style="color:white; background-color:#32c36c;"><?= $data['page_en_cours'] ?></button></li>

                    <?php if ($data['page_en_cours'] < $data['nbPages']) { ?>
                        <li class="page-item"><a class="page-link" href="<?= site_url('administrationHydroGroup/blog/' . $data['is_search'] . '/' . $data['page_en_cours'] + 1); ?>"><?= $data['page_en_cours'] + 1 ?></a></li>
                        <li class="page-item">
                            <a class="page-link" href="<?= site_url('administrationHydroGroup/blog/' . $data['is_search'] . '/' . $data['page_en_cours'] + 1); ?>" aria-label="Next">
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