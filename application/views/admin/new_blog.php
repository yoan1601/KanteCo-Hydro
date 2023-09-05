<?php $this->load->view("templates/header_admin"); ?>
<div class="container-xxl py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <div class="mb-5" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
            <h1 class="text-secondary text-center">Nouveau blog</h1>
        </div>
        <div class="pb-5 row">
            <form class="col-lg-10 offset-lg-1 col-12" id="envoyer_blog" action="<?= site_url('administrationHydroGroup/creer_blog/') ?>" method="POST" enctype="multipart/form-data">
                <div class="row" style="row-gap: 2rem;">
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input required type="text" class="form-control" name="auteur" placeholder="Auteur">
                            <label for="">Auteur (*)</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input required type="date" class="form-control" name="date_publication" placeholder="Date de publication">
                            <label for="">Date de publication (*)</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input required type="text" class="form-control" name="titre_fr" placeholder="Titre du blog FR">
                            <label for="">Titre du blog FR (*)</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input required type="text" class="form-control" name="titre_en" placeholder="Titre du blog EN">
                            <label for="">Titre du blog EN (*)</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p class="mb-1">Details Français</p>
                        <div class="form-floating">
                            <textarea id="editor1" class="form-control" name="detail_fr" placeholder="Texte de publication FR (*)" style="height: 150px"></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p class="mb-1">Details Anglais</p>
                        <div class="form-floating">
                            <textarea id="editor2" class="form-control" name="detail_en" placeholder="Texte de publication EN (*)" style="height: 150px"></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <p class="mb-1">Image de couverture (*)</p>
                            <input required type="file" class="form-control mb-3" name="image_couverture" data-preview="preview1" placeholder="Image de couverture (*)">

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
                            <p class="mb-1">Images de publication 1 (*)</p>
                            <input required type="file" class="form-control mb-3" name="image_publication1" data-preview="preview2" placeholder="Images de publication 1">

                            <div class="position-relative" style="width: 100%; height: 40vh;">
                                <img class="img-fluid w-100 h-100" style="object-fit: cover;" id="preview2" src="<?= base_url("assets/") ?>img/Image upload-bro.png" alt="">
                                <div class="position-absolute d-none top-0 w-100 h-100 d-flex align-items-center justify-content-center" style="background-color: #0000008f;">
                                    <button class="btn btn-outline-light px-3 py-2 delete-button" data-preview="preview2">Supprimer</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <p class="mb-1">Images de publication 2 (*)</p>
                            <input required type="file" class="form-control mb-3" name="image_publication2" data-preview="preview3" placeholder="Images de publication 2">

                            <div class="position-relative" style="width: 100%; height: 40vh;">
                                <img class="img-fluid w-100 h-100" style="object-fit: cover;" id="preview3" src="<?= base_url("assets/") ?>img/Image upload-bro.png" alt="">
                                <div class="position-absolute d-none top-0 w-100 h-100 d-flex align-items-center justify-content-center" style="background-color: #0000008f;">
                                    <button class="btn btn-outline-light px-3 py-2 delete-button" data-preview="preview3">Supprimer</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <p class="mb-1">Images de publication 3 (*)</p>
                            <input required type="file" class="form-control mb-3" name="image_publication3" data-preview="preview4" placeholder="Images de publication 3">

                            <div class="position-relative" style="width: 100%; height: 40vh;">
                                <img class="img-fluid w-100 h-100" style=" object-fit: cover;" id="preview4" src="<?= base_url("assets/") ?>img/Image upload-bro.png" alt="">
                                <div class="position-absolute d-none top-0 w-100 h-100 d-flex align-items-center justify-content-center" style="background-color: #0000008f;">
                                    <button class="btn btn-outline-light px-3 py-2 delete-button" data-preview="preview4">Supprimer</button>
                                </div>
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