<?php $this->load->view("templates/header"); ?>
<div class="container-fluid page-header-achievements py-5" style="
		background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
			url(<?= base_url('assets/') ?>img/<?= $data['realisation']['image_couverture']; ?>) center center no-repeat;background-size: cover;">
    <div class="container" style="padding-top: 6.5rem !important; padding-bottom: 1rem !important;">
        <h1 class="display-3 text-white pt-5 animated slideInDown" style="font-weight: 600; font-size: 55px;">
            <?= $data['realisation']['nom_mission_' . (strtoupper($data['lang']))]; ?>
        </h1>
    </div>
</div>
<div class="container-xxl py-5">
    <div class="container">
        <div class="d-flex justify-content-between flex-wrap fs-5 mb-5">
            <p class="text-dark">
                <span class="fw-bold"><?= $data['detail_achievements_' . $data['lang']]['item1'] ?></span>
                <?= $data['realisation']['date_publication_formatted_' . (strtoupper($data['lang']))]; ?>
            </p>
            <p class="ms-auto">
                <span class="fw-bold text-dark"><?= $data['detail_achievements_' . $data['lang']]['item3'] ?>  :</span>
                
                <?php if($data['realisation']['auteur'] != '') {echo $data['realisation']['auteur'];} else { ?>
                    <?= $data['detail_achievements_' . $data['lang']]['item4'] ?>
                <?php } ?>
            </p>
        </div>
        <div class="row g-5 mb-5">
            <div class="col-lg-6 col-12 my-auto">
                <h4 class="fs-3">
                    <!-- <b class="text-dark fw-bold"><?= $data['realisation']['nom_mission_' . (strtoupper($data['lang']))]; ?>
                    </b> -->
                </h4>
                <p class="fs-5 text-dark">
                    <?php if (isset($data['realisation']['commentaire_' . (strtoupper($data['lang']))])) { ?>
                        <?= $data['realisation']['commentaire_' . (strtoupper($data['lang']))] ?>
                    <?php } ?>
                </p>
            </div>

            <div id="carouselExampleControls" class="carousel slide col-lg-6 col-12" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <?php $active = true;
                    foreach ($data['realisation']['images'] as $key => $img) { ?>
                        <div class="carousel-item <?php if ($active) {
                                                        echo "active";
                                                    }
                                                    $active = false; ?>" style="height: 55vh;">
                            <img class="d-block img-fluid w-100 h-100" src="<?= base_url('assets/') ?>img/<?= $img['image'] ?>" alt="" style="object-fit: cover;">
                        </div>
                    <?php } ?>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p class="fs-5 text-dark">
                    <?= $data['realisation']['description_' . (strtoupper($data['lang']))] ?>
                    <b><?= $data['detail_achievements_' . $data['lang']]['item2'] ?> </b>
                </p>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("templates/footer"); ?>