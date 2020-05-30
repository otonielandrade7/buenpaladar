<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require 'public/modules/styles.html';?>
    <title>El Buen Paladar - Contacto</title>
</head>

<body>
    <?php require 'public/modules/navbar.php';?>
    <div class="container mt-3">
        <div class="d-flex justify-content-center">
            <p class="h4">Contactanos</p>
        </div>
        <div class="d-flex justify-content-center">
            <div class="col-10 rounded border-primary border shadow-sm p-3 d-flex flew-wrap">
                <div class="col-6">
                    <p class="h5"><strong>Envianos un correo</strong></p>
                    <div class="form-group">
                        <label for="">Tu nombre:</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Tu correo:</label>
                        <input type="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Motivo:</label>
                        <textarea class="form-control" name="" id="" rows="5"></textarea>
                    </div>
                </div>
                <div class="col-6 align-self-center">
                    <p class="h5"><strong>Nuestras Redes Sociales</strong></p>

                    <div class="form-group">
                        <a href="https://www.facebook.com/" target="_blank" class="btn btn-block btn-info">Visita
                            nuestra página de Facebook</a>
                    </div>
                    <div class="form-group">
                        <a href="https://api.whatsapp.com/send?phone=50376835722" target="_blank"
                            class="btn btn-block btn-success">Envianos un Whatsapp</a>
                    </div>
                    <p class="h5"><strong>Nuestros Numeros</strong></p>
                    <div class="">
                    <div class="form-group d-flex justify-content-center">
                        <p class="lead">503 7676-7676</p>
                    </div>
                    <div class="form-group d-flex justify-content-center">
                        <p class="lead">503 2525-2525</p>
                    </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <?php require 'public/modules/scripts.html';?>
</body>

</html>