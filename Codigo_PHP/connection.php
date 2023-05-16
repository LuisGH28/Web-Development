<?php
  session_start();
  $mysqli = new mysqli('localhost', 'root', '1234', '13_GHL');

  if ($mysqli->connect_error) {
    die('No se pudo conectar a la Base de Datos, lo siento: ' . $mysqli->connect_error);
  }

  echo '¡Conexión exitosa! :)';


  //how i gotta close the connection in other file, imma save
  //the connection in a session variable, the following way
      

  $_SESSION['conexion'] = $mysqli;
?>
