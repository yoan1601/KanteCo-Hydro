<?php $this->load->view("templates/header_admin"); ?>
<div class="container-xxl py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <div class="mb-5" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
            <h1 class="text-secondary text-center">Modification blog</h1>
        </div>
        <div class="pb-5 row">
            <form class="col-lg-10 offset-lg-1 col-12 needs-validation" action="<?= site_url('administrationHydroGroup/update_blog/') ?>" method="POST" enctype="multipart/form-data" novalidate>
                <input type="hidden" value="<?= $data['one_blog']['id'] ?>" name="id">
                <div class="row" style="row-gap: 1.5rem;">

                    <div class="col-md-6">
                        <label for="iauteur">Auteur (*)</label>
                        <input required type="text" id="iauteur" class="form-control" value="<?= $data['one_blog']['auteur'] ?>" name="auteur" placeholder="Auteur" style="height: 3.5rem;">
                        <div class="invalid-feedback">
                            Veuillez entrer un auteur.
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="idatepublication">Date de publication (*)</label>
                        <input required type="date" id="idatepublication" class="form-control" value="<?= $data['one_blog']['date_publication'] ?>" name="date_publication" placeholder="Date de publication" style="height: 3.5rem;">
                        <div class="invalid-feedback">
                            Veuillez entrer une date de publication.
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="ititreFR">Titre du blog FR (*)</label>
                        <input required id="ititreFR" type="text" class="form-control" value="<?= $data['one_blog']['titre_FR'] ?>" name="titre_fr" placeholder="Titre du blog FR" style="height: 3.5rem;">
                        <div class="invalid-feedback">
                            Veuillez entrer un titre du blog FR.
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="ititreEN">Titre du blog EN (*)</label>
                        <input required id="ititreEN" type="text" class="form-control" value="<?= $data['one_blog']['titre_EN'] ?>" name="titre_en" placeholder="Titre du blog EN" style="height: 3.5rem;">
                        <div class="invalid-feedback">
                            Veuillez entrer un titre du blog EN.
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="itexteFR">Details Français (*)</label>
                        <textarea required id="itexteFR" class="form-control editor1" name="detail_fr" placeholder="Texte de publication FR" style="height: 150px"><?= $data['one_blog']['detail_FR'] ?></textarea>
                        <div class="invalid-feedback">
                            Veuillez entrer un texte de publication FR.
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="itexteEN">Details Anglais (*)</label>
                        <textarea required id="itexteEN" class="form-control editor2" name="detail_en" placeholder="Texte de publication EN" style="height: 150px"><?= $data['one_blog']['detail_EN'] ?></textarea>
                        <div class="invalid-feedback">
                            Veuillez entrer un texte de publication EN.
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="iimgcouverture">Image de couverture (*)</label>
                        <input required type="file" id="iimgcouverture" class="form-control" name="image_couverture" data-preview="preview1" placeholder="Image de couverture (*)" style="height: 3.5rem;">
                        <input id="image_couverture_supp" type="hidden" value="" name="image_couverture_supp">
                        <div class="invalid-feedback">
                            Veuillez entrer une image de couverture.
                        </div>

                        <div class="position-relative mt-3" style="width: 100%; height: 40vh;">
                            <img class="img-fluid w-100 h-100" style="object-fit: cover;" id="preview1" src="<?= base_url("assets/") ?>img/<?= $data['one_blog']['image_couverture'] ?>" alt="">
                            <div class="position-absolute top-0 w-100 h-100 d-flex align-items-center justify-content-center" style="background-color: #0000008f;">
                                <button class="btn btn-outline-light px-3 py-2 delete-button" data-php-value="<?= $data['one_blog']['image_couverture'] ?>" data-preview="preview1">Supprimer</button>
                            </div>
                        </div>
                    </div>

                    <?php for ($i = 0; $i < count($data['one_blog_images']); $i++) { ?>
                        <div class="col-md-6">
                            <label for="iimgpublication<?= $i + 1 ?>">Images de publication <?= $i + 1 ?> (*)</label>
                            <input required id="iimgpublication<?= $i + 1 ?>" type="file" class="form-control" name="image_publication<?= $i ?>" data-preview="preview<?= $i + 2 ?>" placeholder="Images de publication <?= $i ?>" style="height: 3.5rem;">
                            <input type="hidden" value="<?= $data['one_blog_images'][$i]->id ?>" name="image_<?= $i ?>">
                            <div class="invalid-feedback">
                                Veuillez entrer une image de publication <?= $i + 1 ?>.
                            </div>

                            <div class="position-relative mt-3" style="width: 100%; height: 40vh;">
                                <img class="img-fluid w-100 h-100" style="object-fit: cover;" id="preview<?= $i + 2 ?>" src="<?= base_url("assets/") ?>img/<?= $data['one_blog_images'][$i]->image ?>" alt="">
                                <div class="position-absolute top-0 w-100 h-100 d-flex align-items-center justify-content-center" style="background-color: #0000008f;">
                                    <input type="hidden" id="image_<?= $i ?>_supp" name="image_<?= $i ?>_supp" value="">
                                    <button class="btn btn-outline-light px-3 py-2 delete-button" data-php-value="<?= $data['one_blog_images'][$i]->id ?>" data-preview="preview<?= $i + 2 ?>">Supprimer</button>
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
    deleteButtons.forEach(function(button, index) {
        button.addEventListener("click", function(e) {
            e.preventDefault();

            var previewId = button.getAttribute("data-preview");
            var imagePreview = document.getElementById(previewId);
            var image_id = button.getAttribute("data-php-value");
            if (index > 0) {
                console.log('image_' + (index - 1) + '_supp');
                document.getElementById('image_' + (index - 1) + '_supp').value = image_id;
            } else {
                document.getElementById('image_couverture_supp').value = image_id;

            }

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