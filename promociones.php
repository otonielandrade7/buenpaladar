<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require 'public/modules/styles.html';?>
    <title>El Buen Paladar - Promociones</title>
</head>

<body>
    <?php require 'public/modules/navbar.php';?>
    <div class="container mt-3">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner rounded">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="https://via.placeholder.com/720x175" alt="First slide">
                </div>
                <div class="carousel-item ">
                    <img class="d-block w-100" src="https://via.placeholder.com/720x175" alt="First slide">
                </div>
                <div class="carousel-item ">
                    <img class="d-block w-100" src="https://via.placeholder.com/720x175" alt="First slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="d-flex justify-content-center flex-wrap mt-4">
            <div class="col-lg-9 col-md-11 border border-primary shadow-sm p-3 m-2 rounded d-flex flex-wrap">
                <div class="col-lg-5 col-md-5 col-sm-12">
                    <img src="public/img/pizza.webp" class="img-fluid rounded" alt="Responsive image">
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12">
                    <p class="h4"><strong class="">Pizza Clasica a Mitad de Precio</strong></p>
                    <p class="lead">Todos los lunes y miercoles nuestras pizzas clasicas de 8 porciones a mitad de
                        precio.</p>
                </div>
            </div>
            <div class="col-lg-9 col-md-11 border border-primary shadow-sm p-3 m-2 rounded d-flex flex-wrap">
                <div class="col-lg-5 col-md-5 col-sm-12">
                    <img src="public/img/pasta.webp" class="img-fluid rounded" alt="Responsive image">
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12">
                    <p class="h4"><strong class="">Martes de pastas</strong></p>
                    <p class="lead">Nuestro Spaghetti, Fettuccine, Capellini, Ravioli y Lasagnas estan con 25% de descuento los martes.</p>
                </div>
            </div>
            <div class="col-lg-9 col-md-11 border border-primary shadow-sm p-3 m-2 rounded d-flex flex-wrap">
                <div class="col-lg-5 col-md-5 col-sm-12">
                    <img src="public/img/burger.webp" class="img-fluid rounded" alt="Responsive image">
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12">
                    <p class="h4"><strong class="">Hamburguesas al 2x1</strong></p>
                    <p class="lead">Todos los Sabados de 3:00pm a 9:00pm nuestras hamburguesas estan al 2x1.</p>
                </div>
            </div>
            <div class="col-lg-9 col-md-11 border border-primary shadow-sm p-3 m-2 rounded d-flex flex-wrap">
                <div class="col-lg-5 col-md-5 col-sm-12">
                    <img src="public/img/salad.webp" class="img-fluid rounded" alt="Responsive image">
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12">
                    <p class="h4"><strong class="">Ensaladas a mitad de precio</strong></p>
                    <p class="lead">Los Juevees tenemos todas nuestras ensaladas a mitad de precio, ya sea con pollo, queso, ensalada cessar, etc.</p>
                </div>
            </div>
          
        </div>







    </div>



    <?php require 'public/modules/scripts.html';?>
</body>

</html>