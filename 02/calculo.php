<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mt-5">
                <div class="card">
                    <div class="card-header bg-primary">
                        <div class="card-title text-white">Resultado</div>
                    </div>
                    <div class="card-body">
                        <?php
                            $numero1 = $_POST["numero1"];
                            $numero2 = $_POST["numero2"];
                            $numero3 = $_POST["numero3"];
                            $numero4 = $_POST["numero4"];

                            $suma = $numero1 + $numero2;
                            $producto = $numero3 * $numero4;
                        ?>

                        <p>La suma de los dos primeros números ingresados es: <?php echo $suma; ?></p>
                        <p>El producto de los dos últimos números ingresados es: <?php echo $producto; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>

</html>
