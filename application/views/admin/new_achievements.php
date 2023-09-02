<?php $this->load->view("templates/header_admin"); ?>
<div class="container-xxl py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <div class="mb-3" style="max-width: 600px; visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
            <h1 class="text-secondary">Nouvelle réalisation</h1>
        </div>
        <div class="py-5 row">
            <form class="col-lg-8 col-12" action="<?= site_url('administrationHydroGroup/creer_achievement/') ?>" method="POST" enctype="multipart/form-data">
                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input required type="text" class="form-control" name="auteur" placeholder="Auteur">
                            <label for="">Auteur (*)</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <select class="form-select" style="height: 55px;" name="pays" id="">
                            <option value="">Pays</option>
                            <?php for ($i = 0; $i < count($data["pays"]); $i++) { ?>
                                <option value="<?= $data["pays"][$i]->id ?>"><?= $data["pays"][$i]->nom_FR ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input required type="text" class="form-control" name="nom_mission_fr" placeholder="Nom de la mission FR">
                            <label for="">Nom de la mission FR (*)</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input required type="text" class="form-control" name="nom_mission_en" placeholder="Nom de la mission EN">
                            <label for="">Nom de la mission EN (*)</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input required type="text" class="form-control" name="lieu" placeholder="Lieu">
                            <label for="">Lieu (*)</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input required type="text" class="form-control" name="autorite" placeholder="Autorité contractante">
                            <label for="">Autorité contractante (*)</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input required type="text" class="form-control" name="reference" placeholder="Référence">
                            <label for="">Référence (*)</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input required type="text" class="form-control" name="adresse" placeholder="Adresse">
                            <label for="">Adresse (*)</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input required type="date" class="form-control" name="demarrage" placeholder="Date de demarrage du projet">
                            <label for="">Date de démarrage du projet (*)</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input required type="date" class="form-control" name="achevement" placeholder="Date d’achèvement du projet">
                            <label for="">Date d’achèvement du projet (*)</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input required type="number" class="form-control" name="duree" placeholder="Durée du projet">
                            <label for="">Durée du projet (*)</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input required type="date" class="form-control" name="publication" placeholder="Date de publication">
                            <label for="">Date de publication (*)</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" class="form-control" name="numero_reference" placeholder="Numero de la référence">
                            <label for="">Numero de la référence</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="email" class="form-control" name="email_reference" placeholder="Email de la référence">
                            <label for="">Email de la référence</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p>Commentaire fr</p>
                        <div class="form-floating">
                            <textarea id="editor3" class="form-control" name="commentaire_fr" placeholder="Commentaire FR" style="height: 150px"></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p>Commentaire en</p>
                        <div class="form-floating">
                            <textarea id="editor4" class="form-control" name="commentaire_en" placeholder="Commentaire EN" style="height: 150px"></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p>Description fr</p>
                        <div class="form-floating">
                            <textarea id="editor1" required class="form-control" name="descri_fr" placeholder="Description FR (*)" style="height: 150px"></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p>Description en</p>
                        <div class="form-floating">
                            <textarea id="editor2" required class="form-control" name="descri_en" placeholder="Description EN (*)" style="height: 150px"></textarea>
                            <!-- <label for="">Description EN (*)</label> -->
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating mb-5">
                            <input type="file" class="form-control mb-3" name="logo_autorite" data-preview="preview1" placeholder="Logo de l’autorité contractante">
                            <label for="">Logo de l’autorité contractante</label>
                            <img class="img-fluid" style="width: 100%; height: 40vh; object-fit: cover;" id="preview1" src="<?= base_url("assets/") ?>img/Image upload-bro.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input required type="file" class="form-control mb-3" name="image_couverture" data-preview="preview2" placeholder="Image de couverture (*)">
                            <label for="">Image de couverture (*)</label>
                            <img class="img-fluid" style="width: 100%; height: 40vh; object-fit: cover;" id="preview2" src="<?= base_url("assets/") ?>img/Image upload-bro.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-5">
                            <input type="file" class="form-control mb-3" name="image_publication1" data-preview="preview3" placeholder="Images de publication 1">
                            <label for="">Images de publication 1</label>
                            <img class="img-fluid" style="width: 100%; height: 40vh; object-fit: cover;" id="preview3" src="<?= base_url("assets/") ?>img/Image upload-bro.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-5">
                            <input type="file" class="form-control mb-3" name="image_publication2" data-preview="preview4" placeholder="Images de publication 2">
                            <label for="">Images de publication 2</label>
                            <img class="img-fluid" style="width: 100%; height: 40vh; object-fit: cover;" id="preview4" src="<?= base_url("assets/") ?>img/Image upload-bro.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-5">
                            <input type="file" class="form-control mb-3" name="image_publication3" data-preview="preview5" placeholder="Images de publication 3">
                            <label for="">Images de publication 3</label>
                            <img class="img-fluid" style="width: 100%; height: 40vh; object-fit: cover;" id="preview5" src="<?= base_url("assets/") ?>img/Image upload-bro.png" alt="">
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