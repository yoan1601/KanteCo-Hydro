<?php $this->load->view("templates/header"); ?>
<div class="container-fluid page-header-achievements py-5" style="
		background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
			url(<?= base_url('assets/') ?>img/achiev1.jpg) center center no-repeat;background-size: cover;">
    <div class="container" style="padding-top: 6.5rem !important; padding-bottom: 1rem !important;">
        <h1 class="display-3 text-white pt-5 animated slideInDown" style="font-weight: 600; font-size: 55px;">
            Construction d’aire d’assainissement et équipement de pompage solaire dans
            la commune Ejeda
        </h1>
    </div>
</div>
<div class="container-xxl py-5">
    <div class="container">
        <div class="d-flex fs-5 mb-5">
            <p>
                <span class="fw-bold text-dark"><?= $data['detail_achievements_' . $data['lang']]['item1'] ?> </span>
                22 Juillet 2023
            </p>
            <p class="ms-auto">
                <span class="fw-bold text-dark"><?= $data['detail_achievements_' . $data['lang']]['item3'] ?>  :</span>
                Monja Manonjosoa
            </p>
        </div>
        <div class="row g-5 mb-5">
            <div class="col-lg-6 col-12 my-auto">
                <h4 class="fs-3">
                    <b class="text-dark fw-bold">Nouvelle réalisation
                        écologique : </b>Un système
                    novateur de gestion des
                    eaux pluviales.
                </h4>
                <p class="fs-5 text-dark">
                    Restez informé des dernières avancées
                    en matière de développement durable
                    avec HYDROCAMP GROUP. Découvrez
                    notre dernière réalisation qui
                    révolutionne la gestion des eaux
                    pluviales, offrant une approche
                    écologique pour la protection de
                    l'environnement tout en répondant aux
                    besoins des communautés locales.
                </p>
            </div>
            <div class="col-lg-6 col-12 overflow-hidden" style="height: 60vh;">
                <img class="img-fluid w-100" src="<?= base_url('assets/') ?>img/achiev1.jpg" alt="">
            </div>
            <div class="col-lg-6 col-12 overflow-hidden" style="height: 60vh;">
                <img class="img-fluid w-100" src="<?= base_url('assets/') ?>img/achiev2_2.jpg" alt="">
            </div>
            <div class="col-lg-6 col-12 overflow-hidden" style="height: 60vh;">
                <img class="img-fluid w-100" src="<?= base_url('assets/') ?>img/achiev3_1.jpg" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 col-12">
                <p class="fs-5 text-dark">
                    Nous sommes heureux de partager avec vous notre récente réalisation, une innovation
                    écologique dans la gestion des eaux pluviales.
                    <br />
                    <br />

                    Dans notre quête pour promouvoir un avenir durable, nous avons développé un
                    système novateur qui vise à préserver l'environnement tout en répondant aux défis liés
                    aux changements climatiques.
                    <br />
                    <br />

                    Notre équipe d'experts a mis en œuvre une approche écologique et intégrée qui
                    collecte et traite efficacement les eaux pluviales, réduisant ainsi les risques
                    d'inondations et de pollution tout en rechargeant les réserves d'eau souterraines. Ce
                    projet a été conçu pour s'adapter aux besoins spécifiques de la région, en prenant en
                    compte les caractéristiques géographiques et les préoccupations environnementales
                    locales.
                    <br />

                    Nouvelle réalisation
                    écologique : Un système
                    novateur de gestion des
                    eaux pluviales.
                    <br />
                    <br />

                    <b><?= $data['detail_achievements_' . $data['lang']]['item2'] ?> </b>
                </p>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("templates/footer"); ?>