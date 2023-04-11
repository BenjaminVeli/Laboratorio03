<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio5 - Resultado</title>
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
                            $num1 = $_POST['numero1'];
                            $num2 = $_POST['numero2'];
                            $num3 = $_POST['numero3'];
                            $mayor = $num1;
                            if ($num2 > $mayor) {
                                $mayor = $num2;
                            }
                            if ($num3 > $mayor) {
                                $mayor = $num3;
                            }
                        ?>
                        <div class="alert alert-primary" role="alert">
                            El mayor número ingresado es: <?php echo $mayor; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>

</html>
