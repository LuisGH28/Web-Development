<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Conexion a la Base de Datos</title>
</head>
<body>
  <?php 
   $mysqli = new mysqli('localhost', 'root', '', '');

    if ($mysqli->connect_error) {
      die('No se pudo conectar a la Base de Datos, lo siento: ' . $mysqli->connect_error);
    }

    echo '¡Conexión exitosa!';
  ?>
</body>
</html>