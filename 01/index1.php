<?php

$mensaje = "Bienvenido al primer ejercicio";

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio01</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row mt-3">
            <h1><?php echo $mensaje ?></h1>
            <h2>
                <?php
                    echo "Desarrollo de Aplicaciones en Internet";
                ?>
            </h2>
        </div>
        <div class="row">
            <div class="col-6 col-md-9 col-lg-6 mt-5">
                <div class="card">
                    <div class="card-header bg-success">
                        <div class="card-title text-white">Ingreso de datos</div>
                    </div>
                    <div class="card-body">
                        <form id="formLogin" action="bienvenido.php" method="post">
                            <div class="form-group">
                                <label>Usuario:</label>
                                <input id="usuario" name="usuario" type="text" class="form-control" placeholder="Ingrese su nombre de usuario" required>
                            </div>
                            <div class="form-group mt-3">
                                <label>e-mail:</label>
                                <input id="e-mail" name="e-mail" type="email" class="form-control" placeholder="Ingrese su correo"required>
                            </div>
                            <div class="form-goup mt-3">
                                <button type="submit" class="btn btn-secondary col-12">Ingresar</button>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>