<?php $this->load->view("templates/header"); ?>
<div class="container-fluid page-header-achievements py-5" style="
		background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
			url(<?= base_url('assets/') ?>img/achiev4_2.jpg) center center no-repeat;background-size: cover;">
    <div class="container" style="padding-top: 6.5rem !important; padding-bottom: 1rem !important;">
        <h1 class="display-3 text-white pt-5 animated slideInDown" style="font-weight: 600; font-size: 55px;">
        <?= $data['blog']['titre_' . (strtoupper($data['lang']))]; ?>
        </h1>
    </div>
</div>
<div class="container-xxl py-5">
    <div class="container">
        <div class="d-flex fs-5 mb-5">
            <p>
                <span class="fw-bold text-dark"><?= $data['detail_achievements_' . $data['lang']]['item1'] ?></span>
                <?= $data['blog']['date_publication_formatted_' . (strtoupper($data['lang']))]; ?>
            </p>
            <p class="ms-auto">
                <span class="fw-bold text-dark"><?= $data['detail_achievements_' . $data['lang']]['item3'] ?> :</span>
                <?= $data['blog']['auteur']; ?>
            </p>
        </div>
        <div class="row g-5 mb-5">
            <div class="col-lg-6 col-12 my-auto">
                <h4 class="fs-3">
                    <b class="text-dark fw-bold"><?= $data['blog']['titre_' . (strtoupper($data['lang']))]; ?>
                    </b>
                </h4>
                <p class="fs-5 text-dark">
                <?php if(isset($data['blog']['detail_' . (strtoupper($data['lang']))])) { ?> 
                        <?= $data['blog']['detail_' . (strtoupper($data['lang']))] ?>
                    <?php } ?>
                </p>
            </div>
            <div class="col-lg-6 col-12 overflow-hidden" style="height: 60vh;">
                <img class="img-fluid w-100" src="<?= base_url('assets/') ?>img/achiev4_2.jpg" alt="">
            </div>
            <div class="col-lg-6 col-12 overflow-hidden" style="height: 60vh;">
                <img class="img-fluid w-100" src="<?= base_url('assets/') ?>img/achiev3.jpg" alt="">
            </div>
            <div class="col-lg-6 col-12 overflow-hidden" style="height: 60vh;">
                <img class="img-fluid w-100" src="<?= base_url('assets/') ?>img/achiev3_1.jpg" alt="">
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("templates/footer"); ?>