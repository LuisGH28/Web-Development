<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Conexión a la Base de Datos</title>
</head>
<body>
  <?php
    //create a session fot save it  
    session_start();

    //now i'ma declare variables to call the data of the html
    $localhost = $_POST['server'];
    $user = $_POST['user'];
    $pw = $_POST['password'];
    $database = $_POST['db'];

    //verifying if all 
    if (empty($localhost) || empty($user) || empty($database)) {
      echo "Por favor, complete todos los campos del formulario.";
      exit;
    }

    //create a connecction
    $mysqli = new mysqli($localhost, $user, $pw, $database);

    if ($mysqli->connect_error) {
      die('No se pudo conectar a la Base de Datos, lo siento: ' . $mysqli->connect_error);
    }

    echo "<h1> ¡Conexión exitosa! :) </h1> <br/>";

    echo 'Ahora se va a cerrar la conexión por medio del archivo closeConnection.php';

    //in this part save the connection 
    $_SESSION['conexion'] = $mysqli;

    include 'closeConnection.php';
  ?>
</body>
</html>



