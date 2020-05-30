<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type='text/javascript'
        src='https://platform-api.sharethis.com/js/sharethis.js#property=5ec18106a356d90013c4b129&product=sticky-share-buttons&cms=sop'
        async='async'></script>
    <?php require 'public/modules/styles.html';?>
    <title>El Buen Paladar - Ubicación</title>
</head>

<body>
    <?php require 'public/modules/navbar.php';?>
    <div class="container mt-5">
        <p class="h4">Nuestra Ubicación</p>
        <div class="col-10">
            <div class="col-6">
                <p class="lead">Google Maps</p>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13446.077865265665!2d-88.28421622626486!3d13.241593529835873!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f7b239a0997b641%3A0x9a4e351ce40fdf69!2sComplejo%20Educativo%20Cant%C3%B3n%20Samuria!5e0!3m2!1ses-419!2ssv!4v1589740405479!5m2!1ses-419!2ssv"
                    width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0" class="rounded border-primary border"></iframe>
            </div>
            <p class="lead">Compartir</p>
            <div class="mb-5 sharethis-inline-share-buttons">
            </div>
        </div>
    </div>



    <?php require 'public/modules/scripts.html';?>
</body>

</html>