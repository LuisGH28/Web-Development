<?php
  echo 'Conexión cerrada exitosamente :)';
  session_start();
  $mysqli = $_SESSION['conexion'];

  $mysqli->close();
?>

