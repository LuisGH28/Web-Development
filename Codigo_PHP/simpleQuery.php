<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Consulta Basica</title>
  <link rel="stylesheet" href="../Codigo_Css/simpleQuery.css">
</head>
<body>
  <?php
    //In the following file i'll pass the following query to php
    //Select Producto.Nombre, Producto.Presentacion_Producto, Producto.Precio From Producto order by Precio;

    //First i'ma import the file connection.php
    include 'connection.php';

    //Now i make to start with the query
    $sql = "SELECT Producto.Nombre, Producto.Presentacion_Producto, Producto.Precio FROM Producto ORDER BY Precio";
    $result = $mysqli->query($sql);

    
    if ($result->num_rows > 0) {
      echo "<table class='products-table'>";
      echo "<tr><th>Nombre</th><th>Presentación</th><th>Precio</th></tr>";
      
      while($row = $result->fetch_assoc()) {
          echo "<tr>";
          echo "<td>" . $row["Nombre"]. "</td>";
          echo "<td>" . $row["Presentacion_Producto"]. "</td>";
          echo "<td>" . $row["Precio"]. "</td>";
          echo "</tr>";
      }
      
      echo "</table>";
    } else {
      echo "No se encontraron resultados :(";
    }
  
    //Now include the file who close the connection
    include 'closeConnection.php';
  ?>
</body>
</html>

