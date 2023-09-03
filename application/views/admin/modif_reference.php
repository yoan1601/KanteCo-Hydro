<?php $this->load->view("templates/header_admin"); ?>
<div class="container-xxl py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <div class="mb-3" style="max-width: 600px; visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
            <h1 class="text-secondary">Modification reference</h1>
        </div>
        <div class="py-5 row">
            <form class="col-lg-8 col-12" action="<?= site_url('administrationHydroGroup/update_reference/') ?>" method="POST" enctype="multipart/form-data">
                <input type="hidden" value="<?= $data['one_reference']['id'] ?>" name="id">
                <div class="row g-3">
                <div class="col-md-6">
                        <div class="form-floating">
                            <input required type="text" class="form-control" value="<?= $data['one_reference']['nom'] ?>" name="nom" placeholder="">
                            <label for="">Nom de la reference (*)</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input required type="file" class="form-control mb-3" name="logo" data-preview="preview2" placeholder="Logo (*)">
                            <label for="">Logo (*)</label>
                            <img class="img-fluid" style="width: 100%; height: 40vh; object-fit: cover;" id="preview2" src="<?= base_url("assets/") ?>img/<?= $data['one_reference']['logo'] ?>" alt="N/A">
                        </div>
                    </div>
                    <div class="col-12 mt-5 d-flex">
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
            } else {
                // Si aucun fichier n'est sélectionné, réinitialisez l'image à sa source par défaut
                imagePreview.src = "<?= base_url("assets/") ?>img/Image upload-bro.png";
            }
        });
    });
</script>
<?php $this->load->view("templates/footer_admin"); ?>