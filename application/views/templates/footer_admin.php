<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
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

<script src="<?= base_url("assets/") ?>js/mail.js"></script>
<!-- Inclure le code JavaScript qui initialise CKEditor -->
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor1' ) )
            .catch( error => {
                console.error( error );
            } );
        ClassicEditor
            .create( document.querySelector( '#editor2' ) )
            .catch( error => {
                console.error( error );
            } );
        ClassicEditor
            .create( document.querySelector( '#editor3' ) )
            .catch( error => {
                console.error( error );
            } );
        ClassicEditor
            .create( document.querySelector( '#editor4' ) )
            .catch( error => {
                console.error( error );
            } );

    </script>
</body>

</html>