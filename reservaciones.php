<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require 'public/modules/styles.html';?>
    <title>Hacer reservación</title>
</head>

<body>
    <?php require 'public/modules/navbar.php';?>
    <div id="reservacion_app_vue" class="container mt-3 mb-3">
        <div class="d-flex justify-content-center">
            <p class="h4">Hacer Reservación</p>
        </div>
        <div class="d-flex justify-content-center">

            <div class="rounded border border-primary p-4 col-12 d-flex flex-wrap">
                <div class="col-7">
                    <img src="public/img/reserva.webp" class="rounded img-fluid" alt="Responsive image">
                </div>
                <div class="col-5">
                    <p class="h5">Completa el siguiente formulario:</p>
                    <div class="form-group">
                        <label for="">Ingresa tu nombre completo:</label>
                        <input type="text" class="form-control">
                        <label for="">Ingresa tu número de teléfono:</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                    </div>
                    <div class="form-group">
                        <label for="">Ingresa el tamaño de reservación:</label>
                        <v-select v-model="reservacion" @input="setSelected1" :options="tipos" label="tipoNombre">
                        </v-select>
                    </div>
                    <div class="form-group" v-if="reservacion.tipoCode!=null">
                        <p class="lead">Sillas por mesa:</p>
                        <v-select @input="setSelected2" :options="sillas" label="nSilla"> </v-select>
                        <br>
                        <button class="btn btn-primary btn-block">Hacer reservación</button>

                    </div>
                </div>
            </div>
        </div>
    </div>



    <?php require 'public/modules/scripts.html';?>
    <script src="public/js/reservaciones.js"></script>
</body>

</html>