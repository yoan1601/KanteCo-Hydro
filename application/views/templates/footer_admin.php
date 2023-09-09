<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url("assets/") ?>lib/wow/wow.min.js"></script>
<script src="<?= base_url("assets/") ?>lib/easing/easing.min.js"></script>
<script src="<?= base_url("assets/") ?>lib/waypoints/waypoints.min.js"></script>
<script src="<?= base_url("assets/") ?>lib/counterup/counterup.min.js"></script>
<script src="<?= base_url("assets/") ?>lib/owlcarousel/owl.carousel.min.js"></script>
<script src="<?= base_url("assets/") ?>lib/isotope/isotope.pkgd.min.js"></script>
<script src="<?= base_url("assets/") ?>lib/lightbox/js/lightbox.min.js"></script>
<script src="<?php echo base_url('assets/ckeditor/ckeditor.js'); ?>"></script>

<!-- Template Javascript -->
<script src="<?= base_url("assets/") ?>js/main.js"></script>
<!-- Script Envoie mail -->

<!-- Inclure le code JavaScript qui initialise CKEditor -->
<script>
    $(document).ready(function() {
        $('#pays').select2({
            allowClear: true,
            ajax: {
                url: "http://localhost/KanteCo-Hydro/index.php/administrationHydroGroup/get_pays",
                type: 'get',
                dataType: 'json',
                data: (params) => {
                    return {
                        search: params.term,
                    }
                },
                processResults: (data, params) => {
                    const results = data.map(item => {
                        return {
                            id: item.id,
                            text: item.nom_FR,
                        };
                    });
                    return {
                        results: results,
                    }
                }
            }
        });

    });


    const editor1 = document.querySelector('.editor1');
    const editor2 = document.querySelector('.editor2');
    const editor3 = document.querySelector('.editor3');
    const editor4 = document.querySelector('.editor4');


    if (editor1) {
        ClassicEditor
            .create(document.querySelector('.editor1'))
            .catch(error => {
                console.error(error);
            });
    }
    if (editor2) {
        ClassicEditor
            .create(document.querySelector('.editor2'))
            .catch(error => {
                console.error(error);
            });
    }
    if (editor3) {
        ClassicEditor
            .create(document.querySelector('.editor3'))
            .catch(error => {
                console.error(error);
            });
    }
    if (editor4) {
        ClassicEditor
            .create(document.querySelector('.editor4'))
            .catch(error => {
                console.error(error);
            });
    }


    (function() {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
    })()
</script>
</body>

</html>