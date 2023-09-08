<?php $this->load->view("templates/header"); ?>
<div class="container-fluid page-header-reference py-5 mb-5">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown"></h1>
    </div>
</div>
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px; visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
            <h1 class="text-primary" style="font-weight: lighter;"><?= $data['reference_'.$data['lang']]['item1'] ?></h1>
            <p class="mb-4"><?= $data['reference_'.$data['lang']]['item2'] ?></p>
        </div>
        <div class="row g-0 mx-lg-0">
            <div class="col-lg-12 feature-text py-2 wow fadeIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
                <div class="py-lg-5 ps-lg-0">
                    <div class="row g-4">
                        <?php for ($i=0; $i < count($data['compagnies']); $i++) { ?>
                        <?php
                            $delay = 0.1 + (0.2 * $i);
                        ?>
                        <div class="mb-2 col-lg-3">
                            <div class="d-flex flex-column align-items-center wow fadeInUp" data-wow-delay="<?= $delay ?>s">
                                <div class="" style="height: 20vh;">
                                    <img class="img-fluid" style="height: 100%; width:100%;" src="<?= base_url("assets/") ?>img/<?= $data['compagnies'][$i]->logo ?>" alt="">
                                </div>
                                <div class="text-center">
                                    <h4 class="mt-5"><?= $data['compagnies'][$i]->nom ?></h4>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("templates/footer"); ?>