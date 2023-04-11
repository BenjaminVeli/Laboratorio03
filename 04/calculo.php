<?php
  // Obtener los valores enviados por el formulario
  $numero1 = $_POST['numero1'];
  $numero2 = $_POST['numero2'];
  $numero3 = $_POST['numero3'];

  // Calcular el promedio
  $promedio = ($numero1 + $numero2 + $numero3) / 3;

  // Comprobar si el estudiante ha aprobado o reprobado
  if ($promedio >= 13) {
    $mensaje = "Aprobado";
  } else {
    $mensaje = "Reprobado";
  }
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultado del promedio-Ej04</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-5">
    <div class="card">
      <div class="card-header bg-primary">
        <div class="card-title text-white">Resultado del promedio</div>
      </div>
      <div class="card-body">
        <p>El promedio de los números ingresados es: <?php echo $promedio ?></p>
        <p>El estudiante está <?php echo $mensaje ?></p>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>