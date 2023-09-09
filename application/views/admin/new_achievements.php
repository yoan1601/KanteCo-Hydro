<?php $this->load->view("templates/header_admin"); ?>
<div class="container-xxl py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <div class="mb-5" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
            <h1 class="text-secondary text-center">Nouvelle réalisation</h1>
        </div>
        <div class="pb-5 row">
            <form class="col-lg-10 offset-lg-1 col-12 needs-validation" action="<?= site_url('administrationHydroGroup/creer_achievement/') ?>" method="POST" enctype="multipart/form-data" novalidate>
                <div class="row" style="row-gap: 1.5rem;">
                    <div class="col-md-6">
                        <label for="iauteur">Auteur (*)</label>
                        <input required type="text" id="iauteur" class="form-control" name="auteur" placeholder="Auteur" style="height: 3.5rem;">
                        <div class="invalid-feedback">
                            Veuillez entrer un auteur.
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="ipays">Pays (*)</label>
                        <select class="form-select" style="height: 3.5rem;" name="pays" id="ipays">
                            <?php for ($i = 0; $i < count($data["pays"]); $i++) {
                                if ($data["pays"][$i]->nom_FR == "Madagascar") { ?>
                                    <option value="<?= $data["pays"][$i]->id ?>" selected><?= $data["pays"][$i]->nom_FR ?></option>
                                <?php } else { ?>
                                    <option value="<?= $data["pays"][$i]->id ?>"><?= $data["pays"][$i]->nom_FR ?></option>
                            <?php }
                            } ?>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="inommissionFR">Nom de la mission FR (*)</label>
                        <input required type="text" id="inommission" class="form-control" name="nom_mission_fr" placeholder="Nom de la mission FR" style="height: 3.5rem;">
                        <div class="invalid-feedback">
                            Veuillez entrer un nom de la mission FR.
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="inommissionEN">Nom de la mission EN (*)</label>
                        <input required type="text" id="inommissionEN" class="form-control" name="nom_mission_en" placeholder="Nom de la mission EN" style="height: 3.5rem;">
                        <div class="invalid-feedback">
                            Veuillez entrer un nom de la mission EN.
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="ilieu">Lieu (*)</label>
                        <input required type="text" id="ilieu" class="form-control" name="lieu" placeholder="Lieu" style="height: 3.5rem;">
                        <div class="invalid-feedback">
                            Veuillez entrer un lieu.
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="iautorite">Autorité contractante (*)</label>
                        <input required type="text" id="iautorite" class="form-control" name="autorite" placeholder="Autorité contractante" style="height: 3.5rem;">
                        <div class="invalid-feedback">
                            Veuillez entrer une autorité contractante.
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="ireference">Référence (*)</label>
                        <input required type="text" id="ireference" class="form-control" name="reference" placeholder="Référence" style="height: 3.5rem;">
                        <div class="invalid-feedback">
                            Veuillez entrer une référence.
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="iadresse">Adresse (*)</label>
                        <input required type="text" id="iadresse" class="form-control" name="adresse" placeholder="Adresse" style="height: 3.5rem;">
                        <div class="invalid-feedback">
                            Veuillez entrer une adresse.
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="idatedemarrage">Date de démarrage du projet (*)</label>
                        <input required type="date" id="idatedemarrage" class="form-control" name="demarrage" placeholder="Date de demarrage du projet" style="height: 3.5rem;">
                        <div class="invalid-feedback">
                            Veuillez entrer une date de démarrage du projet.
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="idateachevement">Date d’achèvement du projet (*)</label>
                        <input required type="date" id="idateachevement" class="form-control" name="achevement" placeholder="Date d’achèvement du projet" style="height: 3.5rem;">
                        <div class="invalid-feedback">
                            Veuillez entrer une date d’achèvement du projet.
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="iduree">Durée du projet (*)</label>
                        <input required type="number" id="iduree" class="form-control" name="duree" placeholder="Durée du projet" style="height: 3.5rem;">
                        <div class="invalid-feedback">
                            Veuillez entrer une durée du projet.
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="idatepublication">Date de publication (*)</label>
                        <input required type="date" id="idatepublication" class="form-control" name="publication" placeholder="Date de publication" style="height: 3.5rem;">
                        <div class="invalid-feedback">
                            Veuillez entrer une date de publication.
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="inumeroreference">Numero de la référence</label>
                        <input type="text" id="inumeroreference" class="form-control" name="numero_reference" placeholder="Numero de la référence" style="height: 3.5rem;">
                    </div>
                    <div class="col-md-6">
                        <label for="iemailreference">Email de la référence</label>
                        <input type="email" id="iemailreference" class="form-control" name="email_reference" placeholder="Email de la référence" style="height: 3.5rem;">
                    </div>
                    <div class="col-md-6">
                        <label for="icommentaireFR">Commentaire Français</label>
                        <textarea id="icommentaireFR" class="form-control editor3" name="commentaire_fr" placeholder="Commentaire FR" style="height: 150px"></textarea>
                    </div>
                    <div class="col-md-6">
                        <label for="icommentaireEN">Commentaire Anglais</label>
                        <textarea id="icommentaireEN" class="form-control editor4" name="commentaire_en" placeholder="Commentaire EN" style="height: 150px"></textarea>
                    </div>
                    <div class="col-md-6">
                        <label for="idescriptionFR">Description Français (*)</label>
                        <textarea id="idescriptionFR" required class="form-control editor1" name="descri_fr" placeholder="Description FR (*)" style="height: 150px"></textarea>
                        <div class="invalid-feedback">
                            Veuillez entrer une description en français.
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="idescriptionEN">Description Anglais (*)</label>
                        <textarea id="idescriptionEN" required class="form-control editor2" name="descri_en" placeholder="Description EN (*)" style="height: 150px"></textarea>
                        <div class="invalid-feedback">
                            Veuillez entrer une description en anglais.
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="ilogoautorite">Logo de l’autorité contractante</label>
                        <input type="file" id="ilogoautorite" class="form-control" name="logo_autorite" data-preview="preview1" placeholder="Logo de l’autorité contractante" style="height: 3.5rem;">

                        <div class="position-relative mt-3" style="width: 100%; height: 40vh;">
                            <img class="img-fluid w-100 h-100" style="object-fit: cover;" id="preview1" src="<?= base_url("assets/") ?>img/Image upload-bro.png" alt="">
                            <div class="position-absolute d-none top-0 w-100 h-100 d-flex align-items-center justify-content-center" style="background-color: #0000008f;">
                                <button class="btn btn-outline-light px-3 py-2 delete-button" data-preview="preview1">Supprimer</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="iimgcouverture">Image de couverture (*)</label>
                        <input required type="file" id="iimgcouverture" class="form-control" name="image_couverture" data-preview="preview2" placeholder="Image de couverture (*)" style="height: 3.5rem;">
                        <div class="invalid-feedback">
                            Veuillez entrer une image de couverture.
                        </div>

                        <div class="position-relative mt-3" style="width: 100%; height: 40vh;">
                            <img class="img-fluid w-100 h-100" style="object-fit: cover;" id="preview2" src="<?= base_url("assets/") ?>img/Image upload-bro.png" alt="">
                            <div class="position-absolute d-none top-0 w-100 h-100 d-flex align-items-center justify-content-center" style="background-color: #0000008f;">
                                <button class="btn btn-outline-light px-3 py-2 delete-button" data-preview="preview2">Supprimer</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="iimgpublication1">Images de publication 1</label>
                        <input type="file" id="iimgpublication1" class="form-control" name="image_publication1" data-preview="preview3" placeholder="Images de publication 1" style="height: 3.5rem;">

                        <div class="position-relative mt-3" style="width: 100%; height: 40vh;">
                            <img class="img-fluid w-100 h-100" style="object-fit: cover;" id="preview3" src="<?= base_url("assets/") ?>img/Image upload-bro.png" alt="">
                            <div class="position-absolute d-none top-0 w-100 h-100 d-flex align-items-center justify-content-center" style="background-color: #0000008f;">
                                <button class="btn btn-outline-light px-3 py-2 delete-button" data-preview="preview3">Supprimer</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="iimgpublication2">Images de publication 2</label>
                        <input type="file" id="iimgpublication2" class="form-control" name="image_publication2" data-preview="preview4" placeholder="Images de publication 2" style="height: 3.5rem;">

                        <div class="position-relative mt-3" style="width: 100%; height: 40vh;">
                            <img class="img-fluid w-100 h-100" style="object-fit: cover;" id="preview4" src="<?= base_url("assets/") ?>img/Image upload-bro.png" alt="">
                            <div class="position-absolute d-none top-0 w-100 h-100 d-flex align-items-center justify-content-center" style="background-color: #0000008f;">
                                <button class="btn btn-outline-light px-3 py-2 delete-button" data-preview="preview4">Supprimer</button>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <label for="iimgpublication3">Images de publication 3</label>
                        <input type="file" id="iimgpublication3" class="form-control" name="image_publication3" data-preview="preview5" placeholder="Images de publication 3" style="height: 3.5rem;">

                        <div class="position-relative mt-3" style="width: 100%; height: 40vh;">
                            <img class="img-fluid w-100 h-100" style="object-fit: cover;" id="preview5" src="<?= base_url("assets/") ?>img/Image upload-bro.png" alt="">
                            <div class="position-absolute d-none top-0 w-100 h-100 d-flex align-items-center justify-content-center" style="background-color: #0000008f;">
                                <button class="btn btn-outline-light px-3 py-2 delete-button" data-preview="preview5">Supprimer</button>
                            </div>
                        </div>
                    </div>
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