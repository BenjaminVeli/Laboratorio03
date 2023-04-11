<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparación de números-ej03</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-primary">
                        <h4 class="card-title text-white">Comparación de números</h4>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label for="numero1">Número 1:</label>
                                <input type="number" name="numero1" id="numero1" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="numero2">Número 2:</label>
                                <input type="number" name="numero2" id="numero2" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Calcular</button>
                        </form>
                        <?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            $numero1 = $_POST["numero1"];
                            $numero2 = $_POST["numero2"];
                            if ($numero2 != 0) {
                                if ($numero1 > $numero2) {
                                    $suma = $numero1 + $numero2;
                                    $resta = $numero1 - $numero2;
                                    echo "<p class='mt-3'>La suma de los dos números es: $suma</p>";
                                    echo "<p>La diferencia entre los dos números es: $resta</p>";
                                } else {
                                    $producto = $numero1 * $numero2;
                                    $division = $numero1 / $numero2;
                                    echo "<p class='mt-3'>El producto de los dos números es: $producto</p>";
                                    echo "<p>La división del primer número entre el segundo número es: $division</p>";
                                }
                            } else {
                                echo "<p class='mt-3 text-danger'>Error: El segundo número no puede ser cero.</p>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
