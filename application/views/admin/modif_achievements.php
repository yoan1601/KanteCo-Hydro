<?php $this->load->view("templates/header_admin"); ?>
<div class="container-xxl py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <div class="mb-5" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
            <h1 class="text-secondary text-center">Modification réalisation</h1>
        </div>
        <div class="pb-5 row">
            <form class="col-lg-10 offset-lg-1 col-12" action="<?= site_url('administrationHydroGroup/update_achievements') ?>" method="POST" enctype="multipart/form-data">
                <input type="hidden" value="<?= $data['one_realisation']['id'] ?>" name="id">
                <div class="row" style="row-gap: 2rem;">
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input value="<?= $data['one_realisation']['auteur'] ?>" type="text" class="form-control" name="auteur" placeholder="Auteur">
                            <label for="">Auteur (*)</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <!-- <select class="form-select pays_style" style="height: 55px;" name="pays" id="pays">
                            <option value="<?= $data['one_realisation']['idPays'] ?>"><?= $data['one_realisation']['nom_pays_FR'] ?></option>
                       </select> -->

                        <select class="form-select" style="height: 55px;" name="pays" id="">
                            <?php for ($i = 0; $i < count($data["pays"]); $i++) {
                                if ($data["pays"][$i]->id == $data['one_realisation']['idPays']) { ?>
                                    <option value="<?= $data["pays"][$i]->id ?>" selected><?= $data["pays"][$i]->nom_FR ?></option>
                                <?php } else { ?>
                                    <option value="<?= $data["pays"][$i]->id ?>"><?= $data["pays"][$i]->nom_FR ?></option>
                            <?php }
                            } ?>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input required value="<?= $data['one_realisation']['nom_mission_FR'] ?>" type="text" class="form-control" name="nom_mission_fr" placeholder="Nom de la mission FR">
                            <label for="">Nom de la mission FR (*)</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input required value="<?= $data['one_realisation']['nom_mission_EN'] ?>" type="text" class="form-control" name="nom_mission_en" placeholder="Nom de la mission EN">
                            <label for="">Nom de la mission EN (*)</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input required value="<?= $data['one_realisation']['lieu'] ?>" type="text" class="form-control" name="lieu" placeholder="Lieu">
                            <label for="">Lieu (*)</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input required value="<?= $data['one_realisation']['autorite_contractante'] ?>" type="text" class="form-control" name="autorite" placeholder="Autorité contractante">
                            <label for="">Autorité contractante (*)</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input required value="<?= $data['one_realisation']['reference'] ?>" type="text" class="form-control" name="reference" placeholder="Référence">
                            <label for="">Référence (*)</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input required value="<?= $data['one_realisation']['adresse'] ?>" type="text" class="form-control" name="adresse" placeholder="Adresse">
                            <label for="">Adresse (*)</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input required value="<?= $data['one_realisation']['date_demarrage'] ?>" type="date" class="form-control" name="demarrage" placeholder="Date de demarrage du projet">
                            <label for="">Date de démarrage du projet (*)</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input required value="<?= $data['one_realisation']['date_achevement'] ?>" type="date" class="form-control" name="achevement" placeholder="Date d’achèvement du projet">
                            <label for="">Date d’achèvement du projet (*)</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input required value="<?= $data['one_realisation']['duree'] ?>" type="number" class="form-control" name="duree" placeholder="Durée du projet">
                            <label for="">Durée du projet (*)</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input required value="<?= $data['one_realisation']['date_publication'] ?>" type="date" class="form-control" name="publication" placeholder="Date de publication">
                            <label for="">Date de publication (*)</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" value="<?= $data['one_realisation']['numero_reference'] ?>" class="form-control" name="numero_reference" placeholder="Numero de la référence">
                            <label for="">Numero de la référence</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="email" value="<?= $data['one_realisation']['email_reference'] ?>" class="form-control" name="email_reference" placeholder="Email de la référence">
                            <label for="">Email de la référence</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p class="mb-1">Commentaire Français</p>
                        <div class="form-floating">
                            <textarea id="editor3" class="form-control" name="commentaire_fr" placeholder="Commentaire FR" style="height: 150px"><?= $data['one_realisation']['commentaire_FR'] ?></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p class="mb-1">Commentaire Anglais</p>
                        <div class="form-floating">
                            <textarea id="editor4" class="form-control" name="commentaire_en" placeholder="Commentaire EN" style="height: 150px"><?= $data['one_realisation']['commentaire_FR'] ?></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p class="mb-1">Description Français</p>
                        <div class="form-floating">
                            <textarea id="editor1" required class="form-control" name="descri_fr" placeholder="Description FR (*)" style="height: 150px"><?= $data['one_realisation']['description_FR'] ?></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p class="mb-1">Description Anglais</p>
                        <div class="form-floating">
                            <textarea id="editor2" required class="form-control" name="descri_en" placeholder="Description EN (*)" style="height: 150px"><?= $data['one_realisation']['description_EN'] ?></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <p class="mb-1">Logo de l’autorité contractante</p>
                            <input type="file" class="form-control mb-3" name="logo_autorite" data-preview="preview1" placeholder="Logo de l’autorité contractante">
                            <div class="position-relative" style="width: 100%; height: 40vh;">
                                <img class="img-fluid w-100 h-100" style="object-fit: cover;" id="preview1" src="<?= base_url("assets/") ?>img/Image upload-bro.png" alt="">
                                <div class="position-absolute d-none top-0 w-100 h-100 d-flex align-items-center justify-content-center" style="background-color: #0000008f;">
                                    <button class="btn btn-outline-light px-3 py-2 delete-button" data-preview="preview1">Supprimer</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <p class="mb-1">Image de couverture (*)</p>
                            <input type="file" class="form-control mb-3" name="image_couverture" data-preview="preview2" placeholder="Image de couverture (*)">
                            <input type="hidden" value="<?= $data['one_realisation_images'][0]->id ?>" name="image_0">
                            <div class="position-relative" style="width: 100%; height: 40vh;">
                                <img class="img-fluid w-100 h-100" style="object-fit: cover;" id="preview2" src="<?= base_url("assets/") ?>img/<?= $data['one_realisation']['image_couverture'] ?>" alt="">
                                <div class="position-absolute top-0 w-100 h-100 d-flex align-items-center justify-content-center" style="background: #0000008f;">
                                    <button class="btn btn-outline-light px-3 py-2 delete-button" data-preview="preview2">Supprimer</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php for ($i = 1; $i < count($data['one_realisation_images']); $i++) { ?>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <p class="mb-1">Images de publication <?= $i ?></p>
                                <input type="file" class="form-control mb-3" name="image_publication<?= $i ?>" data-preview="preview<?= $i + 2 ?>" placeholder="Images de publication <?= $i ?>">
                                <input type="hidden" value="<?= $data['one_realisation_images'][$i]->id ?>" name="image_<?= $i ?>">
                                <div class="position-relative" style="width: 100%; height: 40vh;">
                                    <img class="img-fluid w-100 h-100" style="object-fit: cover;" id="preview<?= $i + 2 ?>" src="<?= base_url("assets/") ?>img/<?= $data['one_realisation_images'][$i]->image ?>" alt="">
                                    <div class="position-absolute top-0 w-100 h-100 d-flex align-items-center justify-content-center" style="background: #0000008f;">
                                        <button class="btn btn-outline-light px-3 py-2 delete-button" data-preview="preview<?= $i + 2 ?>">Supprimer</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <div class="col-12 d-flex justify-content-center">
                        <button class="btn btn-primary py-3 px-5" type="submit">Valider</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<style>
    .select2-container .select2-selection--single {
        height: 57px !important;
        border: 1px solid #ced4da;
        border-radius: 8px;
    }

    .select2-container--default .select2-selection--single .select2-selection__arrow b {
        left: -20%;
        border-width: 14px 9px 0px 9px;
        top: 87%;
        color: #9B9B9B;
    }

    .select2-container--default.select2-container--open .select2-selection--single .select2-selection__arrow b {
        border-width: 14px 9px 14px 9px;
        top: 38%;
        color: #9B9B9B;
    }

    .select2-container--default .select2-selection--single .select2-selection__rendered {
        color: #9B9B9B;
        line-height: 54px;
    }

    .select2-container .select2-selection--single .select2-selection__rendered {
        padding-left: 12px;
    }
</style>
<!-- <script>
    // Sélectionnez tous les champs de fichier par leur attribut "data-preview"
    var fileInputs = document.querySelectorAll('input[type="file"][data-preview]');

    // Parcourez chaque champ de fichier et ajoutez un gestionnaire d'événements "change"
    fileInputs.forEach(function(fileInput) {
        fileInput.addEventListener("change", function() {
            var previewId = fileInput.getAttribute("data-preview");
            var imagePreview = document.getElementById(previewId);

            // Vérifiez si un fichier a été sélectionné
            console.log(fileInput.files);
            if (fileInput.files.length > 0) {
                // Mettez à jour l'attribut src de l'image avec le fichier choisi
                var selectedFile = fileInput.files[0];
                var objectURL = URL.createObjectURL(selectedFile);
                imagePreview.src = objectURL;
            } else {
                // Si aucun fichier n'est sélectionné, réinitialisez l'image à sa source par défaut
                imagePreview.src = "<?= base_url("assets/") ?>img/Image upload-bro.png";
            }
        });
    });
</script> -->

<script>
    // Sélectionnez tous les champs de fichier par leur attribut "data-preview"
    var fileInputs = document.querySelectorAll('input[type="file"][data-preview]');

    // Parcourez chaque champ de fichier et ajoutez un gestionnaire d'événements "change"
    fileInputs.forEach(function(fileInput) {
        fileInput.addEventListener("change", function() {
            var previewId = fileInput.getAttribute("data-preview");
            var imagePreview = document.getElementById(previewId);

            // Récupérez le bouton "Supprimer" correspondant
            var deleteButton = document.querySelector('.delete-button[data-preview="' + previewId + '"]');
            var deleteButtonContainer = deleteButton.parentElement; // Récupérez le conteneur du bouton "Supprimer"

            // Vérifiez si un fichier a été sélectionné
            if (fileInput.files.length > 0) {
                // Mettez à jour l'attribut src de l'image avec le fichier choisi
                var selectedFile = fileInput.files[0];
                var objectURL = URL.createObjectURL(selectedFile);
                imagePreview.src = objectURL;

                // Affichez le bouton "Supprimer"
                deleteButtonContainer.classList.remove("d-none");
            } else {
                // Si aucun fichier n'est sélectionné, réinitialisez l'image à sa source par défaut
                imagePreview.src = "<?= base_url("assets/") ?>img/Image upload-bro.png";

                // Masquez seulement le conteneur du bouton "Supprimer" (l'arrière-plan restera visible)
                deleteButtonContainer.classList.add("d-none");
            }
        });
    });

    // Ajoutez un gestionnaire d'événements "click" aux boutons "Supprimer"
    var deleteButtons = document.querySelectorAll('.delete-button');
    deleteButtons.forEach(function(button) {
        button.addEventListener("click", function(e) {
            e.preventDefault();

            var previewId = button.getAttribute("data-preview");
            var imagePreview = document.getElementById(previewId);

            // Réinitialisez l'image à sa source par défaut
            imagePreview.src = "<?= base_url("assets/") ?>img/Image upload-bro.png";

            // Réinitialisez également le champ de fichier correspondant
            var fileInput = document.querySelector('input[type="file"][data-preview="' + previewId + '"]');
            fileInput.value = "";

            // Masquez seulement le conteneur du bouton "Supprimer" (l'arrière-plan restera visible)
            var deleteButtonContainer = button.parentElement;
            deleteButtonContainer.classList.add("d-none");
        });
    });
</script>


<?php $this->load->view("templates/footer_admin"); ?>