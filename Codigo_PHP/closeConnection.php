<?php
  echo '<h1> Conexión cerrada exitosamente :) </h1>';
  session_start();
  $mysqli = $_SESSION['conexion'];

  $mysqli->close();
?>

