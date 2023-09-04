<?php $this->load->view("templates/header_admin"); ?>
<div class="container-xxl py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <div class="mb-5" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
            <h1 class="text-secondary text-center">Nouvelle reference</h1>
        </div>
        <div class="pb-5 row">
            <form class="col-12 col-lg-6 offset-lg-3" action="<?= site_url('administrationHydroGroup/creer_reference/') ?>" method="POST" enctype="multipart/form-data">
                <div class="row" style="row-gap: 2rem;">
                    <div class="col-12">
                        <div class="form-floating">
                            <input required type="text" class="form-control" name="nom" placeholder="nom">
                            <label for="">Nom de la reference (*)</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating mb-5">
                            <p class="mb-1">Logo (*)</p>
                            <input required type="file" class="form-control mb-3" name="logo" data-preview="preview3" placeholder="logo">
                            <img class="img-fluid d-none" style="width: 100%; height: 40vh; object-fit: cover;" id="preview3" src="<?= base_url("assets/") ?>img/Image upload-bro.png" alt="">
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

            // Vérifiez si un fichier a été sélectionné
            if (fileInput.files.length > 0) {
                // Mettez à jour l'attribut src de l'image avec le fichier choisi
                var selectedFile = fileInput.files[0];
                var objectURL = URL.createObjectURL(selectedFile);
                imagePreview.src = objectURL;
                imagePreview.classList.toggle("d-none");
            } else {
                // Si aucun fichier n'est sélectionné, réinitialisez l'image à sa source par défaut
                imagePreview.src = "<?= base_url("assets/") ?>img/Image upload-bro.png";
                imagePreview.classList.toggle("d-none");
            }
        });
    });
</script>
<?php $this->load->view("templates/footer_admin"); ?>