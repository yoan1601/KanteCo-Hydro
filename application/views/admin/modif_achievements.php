<?php $this->load->view("templates/header_admin"); ?>
<div class="container-xxl py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <div class="mb-3" style="max-width: 600px; visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
            <h1 class="text-secondary">Modification réalisation</h1>
        </div>
        <div class="py-5 row">
            <form class="col-lg-8 col-12" action="<?= site_url('administrationHydroGroup/update_achievements') ?>" method="POST" enctype="multipart/form-data">
                <input type="hidden" value="<?= $data['one_realisation']['id'] ?>" name="id">
                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input value="<?= $data['one_realisation']['auteur'] ?>" type="text" class="form-control" name="auteur" placeholder="Auteur">
                            <label for="">Auteur (*)</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <select class="form-select" style="height: 55px;" name="pays" id="">
                            <option value="<?= $data['one_realisation']['idPays'] ?>"><?= $data['one_realisation']['nom_pays_FR'] ?></option>
                            <?php for ($i = 0; $i < count($data["pays"]); $i++) { ?>
                                <option value="<?= $data["pays"][$i]->id ?>"><?= $data["pays"][$i]->nom_FR ?></option>
                            <?php } ?>
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
                            <input type="file" class="form-control mb-3" name="image_couverture" data-preview="preview2" placeholder="Image de couverture (*)">
                            <input type="hidden" value="<?= $data['one_realisation_images'][0]->id ?>" name="image_0">
                            <label for="">Image de couverture (*)</label>
                            <img class="img-fluid" style="width: 100%; height: 40vh; object-fit: cover;" id="preview2" src="<?= base_url("assets/") ?>img/<?= $data['one_realisation']['image_couverture'] ?>" alt="">
                        </div>
                    </div>
                    <?php for ($i = 1; $i <count($data['one_realisation_images']); $i ++){ ?>
                        <div class="col-md-6">
                        <div class="form-floating mb-5">
                            <input type="file" class="form-control mb-3" name="image_publication<?= $i ?>" data-preview="preview3" placeholder="Images de publication <?= $i ?>">
                            <input type="hidden" value="<?= $data['one_realisation_images'][$i]->id ?>" name="image_<?= $i ?>">
                            <label for="">Images de publication <?= $i ?></label>
                            <img class="img-fluid" style="width: 100%; height: 40vh; object-fit: cover;" id="preview3" src="<?= base_url("assets/") ?>img/<?= $data['one_realisation_images'][$i]->image ?>" alt="">
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="col-12 mt-5 d-flex">
                    <button class="btn btn-primary py-3 px-5" type="submit">Valider</button>
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