<?php $this->load->view("templates/header"); ?>
<div class="container-fluid page-header-achievements py-5 mb-5">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown"></h1>
    </div>
</div>
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-3 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px; visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
            <h1 class="text-primary">Blog</h1>
            <p class="mb-4"><?= $data['blog_' . $data['lang']]['item1'] ?></p>
        </div>
        <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.3s">
            <form class="row g-3" action="<?= site_url('front/blogs/1'); ?>">
                <div class="col-lg-3 col-12 offset-lg-3">
                    <input type="text" class="form-control" name="keyword" placeholder="<?= $data['realisation_' . $data['lang']]['item2'] ?>" style="height: 55px;" required>
                </div>
                <div class="col-lg-3 col-12">
                    <select class="form-select" style="height: 55px;" name="year" required>
                        <option selected><?= $data['realisation_' . $data['lang']]['item3'] ?></option>
                        <?php for ($i = 0; $i < count($data['allYears']); $i++) { ?>
                            <option value="<?= $data['allYears'][$i]->annee_publication ?>"><?= $data['allYears'][$i]->annee_publication ?></option>
                        <?php } ?>
                    </select>
                </div>
                <button class="btn btn-lg btn-primary btn-lg-square rounded-circle"><i class="bi bi-search"></i></button>
            </form>
        </div>
        <div class="row g-5 py-5 ps-lg-0 portfolio-container wow fadeInUp" data-wow-delay="0.5s">
            <?php for ($i = 0; $i < count($data['blogs']); $i++) { ?>
                <div class="col-lg-4 col-md-6 portfolio-item">
                    <div class="portfolio-img rounded overflow-hidden">
                        <div class="couverture" style="height: 36vh; width: 26vw;">
                            <img class="img-fluid" style="height: 100%; width: 100%;object-fit: cover;" src="<?= base_url("assets/") ?>img/<?= $data['blogs'][$i]['image_couverture']; ?>" alt="">
                            <img class="img-fluid" style="height: 100%; width: 100%;object-fit: cover;" src="<?= base_url("assets/") ?>img/<?= $data['blogs'][$i]['image_couverture']; ?>" alt="">
                        </div>
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="<?= base_url("assets/") ?>img/<?= $data['blogs'][$i]['image_couverture']; ?>" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="<?= site_url("front/detail_blog") ?>"><i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="pt-3">
                        <div class="d-flex fs-6 mb-1">
                            <p class="text-dark">
                                <?= $data['blogs'][$i]['date_publication_' . $data['lang']] ?>
                            </p>
                            <p class="ms-auto text-dark fw-bold">
                                <?= $data['detail_achievements_' . $data['lang']]['item3'] ?> :
                                <span class="text-dark fw-light"><?= $data['blogs'][$i]['auteur'] ?></span>

                            </p>
                        </div>
                        <h4><?= $data['blogs'][$i]['titre_' . strtoupper($data['lang'])] ?></h4>
                        <p><?= $data['blogs'][$i]['detail_' . strtoupper($data['lang'])] ?></p>
                    </div>
                </div>
            <?php } ?>

        </div>

        <hr />

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
                        <li class="page-item"><a class="page-link" href="<?= site_url('front/blogs/' . $data['is_search'] . '/' . $data['page_en_cours'] - 1); ?>"><?= $data['page_en_cours'] - 1 ?></a></li>
                    <?php } ?>

                    <li class="page-item"><button class="page-link" style="color:white; background-color:#32c36c;"><?= $data['page_en_cours'] ?></button></li>

                    <?php if ($data['page_en_cours'] < $data['nbPages']) { ?>
                        <li class="page-item"><a class="page-link" href="<?= site_url('front/blogs/' . $data['is_search'] . '/' . $data['page_en_cours'] + 1); ?>"><?= $data['page_en_cours'] + 1 ?></a></li>
                        <li class="page-item">
                            <a class="page-link" href="<?= site_url('front/blogs/' . $data['is_search'] . '/' . $data['page_en_cours'] + 1); ?>" aria-label="Next">
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