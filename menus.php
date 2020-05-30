<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require 'public/modules/styles.html';?>
    <title>El Buen Paladar - Menús</title>
</head>
<body>
    <?php require 'public/modules/navbar.php';?>
    <div class="container mt-5">
    <div class="d-flex justify-content-center">
        <p class="h4">Nuestros Menús</p>
    </div>
    <div class="mt-3 ">
        <div class="d-flex flex-wrap justify-content-center">
            <a href="sopas" class="sombra-sm rounded sopas-box mr-4 col-lg-3 col-md-4 col-sm-6 mt-3">
                <img src="public/img/sopas.webp" class="rounded img-fluid" alt="Responsive image">
            </a>
            <a href="entradas" class="sombra-sm rounded sopas-box1 mr-4 col-lg-3 col-md-4 col-sm-6 mt-3">
                <img src="public/img/entrada.webp" class="rounded img-fluid" alt="Responsive image">
            </a>
            <a href="fuertes" class="sombra-sm rounded sopas-box2 mr-4 col-lg-3 col-md-4 col-sm-6 mt-3">
                <img src="public/img/fuertes.webp" class="rounded img-fluid" alt="Responsive image">
            </a>
            <a href="especialidades" class="sombra-sm rounded sopas-box3 mr-4 col-lg-3 col-md-4 col-sm-6 mt-3">
                <img src="public/img/especialidades.webp" class="rounded img-fluid" alt="Responsive image">
            </a>
            <a href="peques" class="sombra-sm rounded sopas-box4 mr-4 col-lg-3 col-md-4 col-sm-6 mt-3">
                <img src="public/img/ninos.webp" class="rounded img-fluid" alt="Responsive image">
            </a>
            <a href="bebidas" class="sombra-sm rounded sopas-box5 mr-4 col-lg-3 col-md-4 col-sm-6 mt-3">
                <img src="public/img/bebidas.webp" class="rounded img-fluid" alt="Responsive image">
            </a>
        </div>
    </div>
    </div>


<?php require 'public/modules/scripts.html';?>
</body>
</html>