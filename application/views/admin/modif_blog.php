<?php $this->load->view("templates/header_admin"); ?>
<div class="container-xxl py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <div class="mb-3" style="max-width: 600px; visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
            <h1 class="text-secondary">Modification blog</h1>
        </div>
        <div class="py-5 row">
            <form class="col-lg-8 col-12" action="<?= site_url('administrationHydroGroup/update_blog/') ?>" method="POST" enctype="multipart/form-data">
                <input type="hidden" value="<?= $data['one_blog']['id'] ?>" name="id">
                <div class="row g-3">
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
                        <div class="form-floating">
                            <textarea required class="form-control" name="detail_fr" placeholder="Texte de publication FR" style="height: 150px"><?= $data['one_blog']['detail_FR'] ?></textarea>
                            <label for="">Texte de publication FR (*)</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-5">
                            <textarea required class="form-control" name="detail_en" placeholder="Texte de publication EN" style="height: 150px"><?= $data['one_blog']['detail_EN'] ?></textarea>
                            <label for="">Texte de publication EN (*)</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input required type="file" class="form-control mb-3" name="image_couverture" data-preview="preview2" placeholder="Image de couverture (*)">
                            <input type="hidden" value="<?= $data['one_blog_images'][0]->id ?>" name="image_0">
                            <label for="">Image de couverture (*)</label>
                            <img class="img-fluid" style="width: 100%; height: 40vh; object-fit: cover;" id="preview2" src="<?= base_url("assets/") ?>img/<?= $data['one_blog']['image_couverture'] ?>" alt="">
                        </div>
                    </div>
                    <?php for ($i = 1; $i <count($data['one_blog_images']); $i ++){ ?>
                        <div class="col-md-6">
                        <div class="form-floating mb-5">
                            <input type="file" class="form-control mb-3" name="image_publication<?= $i ?>" data-preview="preview3" placeholder="Images de publication <?= $i ?>">
                            <input type="hidden" value="<?= $data['one_blog_images'][$i]->id ?>" name="image_<?= $i ?>">
                            <label for="">Images de publication <?= $i ?></label>
                            <img class="img-fluid" style="width: 100%; height: 40vh; object-fit: cover;" id="preview3" src="<?= base_url("assets/") ?>img/<?= $data['one_blog_images'][$i]->image ?>" alt="">
                        </div>
                    </div>
                    <?php } ?>
                    <!-- <div class="col-md-6">
                        <div class="form-floating mb-5">
                            <input type="file" class="form-control mb-3" name="image_publication1" data-preview="preview3" placeholder="Images de publication 1">
                            <label for="">Images de publication 1</label>
                            <img class="img-fluid" style="width: 100%; height: 40vh; object-fit: cover;" id="preview3" src="<?= base_url("assets/") ?>img/carousel-3.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-5">
                            <input type="file" class="form-control mb-3" name="image_publication2" data-preview="preview4" placeholder="Images de publication 2">
                            <label for="">Images de publication 2</label>
                            <img class="img-fluid" style="width: 100%; height: 40vh; object-fit: cover;" id="preview4" src="<?= base_url("assets/") ?>img/carousel-2.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-5">
                            <input type="file" class="form-control mb-3" name="image_publication3" data-preview="preview5" placeholder="Images de publication 3">
                            <label for="">Images de publication 3</label>
                            <img class="img-fluid" style="width: 100%; height: 40vh; object-fit: cover;" id="preview5" src="<?= base_url("assets/") ?>img/Image upload-bro.png" alt="">
                        </div>
                    </div> -->
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