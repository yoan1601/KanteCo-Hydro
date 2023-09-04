<?php $this->load->view("templates/header_admin"); ?>
<div class="container-xxl py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <div class="mb-5" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
            <h1 class="text-secondary text-center">Modification blog</h1>
        </div>
        <div class="pb-5 row">
            <form class="col-lg-10 offset-lg-1 col-12" action="<?= site_url('administrationHydroGroup/update_blog/') ?>" method="POST" enctype="multipart/form-data">
                <input type="hidden" value="<?= $data['one_blog']['id'] ?>" name="id">
                <div class="row" style="row-gap: 2rem;">
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input required type="text" class="form-control" value="<?= $data['one_blog']['auteur'] ?>" name="auteur" placeholder="Auteur">
                            <label for="">Auteur (*)</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input required type="date" class="form-control" value="<?= $data['one_blog']['date_publication'] ?>" name="date_publication" placeholder="Date de publication">
                            <label for="">Date de publication (*)</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" class="form-control" value="<?= $data['one_blog']['titre_FR'] ?>" name="titre_fr" placeholder="Titre du blog FR">
                            <label for="">Titre du blog FR</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" class="form-control" value="<?= $data['one_blog']['titre_EN'] ?>" name="titre_en" placeholder="Titre du blog EN">
                            <label for="">Titre du blog EN</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p class="mb-1">Texte de publication Français</p>
                        <div class="form-floating">
                            <textarea id="editor1" class="form-control" name="detail_fr" placeholder="Texte de publication FR (*)" style="height: 150px"><?= $data['one_blog']['detail_FR'] ?></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p class="mb-1">Texte de publication Anglais</p>
                        <div class="form-floating">
                            <textarea id="editor2" class="form-control" name="detail_en" placeholder="Texte de publication EN (*)" style="height: 150px"><?= $data['one_blog']['detail_EN'] ?></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <p class="mb-1">Image de couverture (*)</p>
                            <input required type="file" class="form-control mb-3" name="image_couverture" data-preview="preview1" placeholder="Image de couverture (*)">
                            <input type="hidden" value="<?= $data['one_blog_images'][0]->id ?>" name="image_0">

                            <div class="position-relative" style="width: 100%; height: 40vh;">
                                <img class="img-fluid w-100 h-100" style="object-fit: cover;" id="preview1" src="<?= base_url("assets/") ?>img/<?= $data['one_blog']['image_couverture'] ?>" alt="">
                                <div class="position-absolute top-0 w-100 h-100 d-flex align-items-center justify-content-center" style="background-color: #0000008f;">
                                    <button class="btn btn-outline-light px-3 py-2 delete-button" data-preview="preview1">Supprimer</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php for ($i = 1; $i < count($data['one_blog_images']); $i++) { ?>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <p class="mb-1">Images de publication <?= $i ?></p>
                                <input type="file" class="form-control mb-3" name="image_publication<?= $i ?>" data-preview="preview<?= $i + 1 ?>" placeholder="Images de publication <?= $i ?>">
                                <input type="hidden" value="<?= $data['one_blog_images'][$i]->id ?>" name="image_<?= $i ?>">

                                <div class="position-relative" style="width: 100%; height: 40vh;">
                                    <img class="img-fluid w-100 h-100" style="object-fit: cover;" id="preview<?= $i + 1 ?>" src="<?= base_url("assets/") ?>img/<?= $data['one_blog_images'][$i]->image ?>" alt="">
                                    <div class="position-absolute top-0 w-100 h-100 d-flex align-items-center justify-content-center" style="background-color: #0000008f;">
                                        <button class="btn btn-outline-light px-3 py-2 delete-button" data-preview="preview<?= $i + 1 ?>">Supprimer</button>
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