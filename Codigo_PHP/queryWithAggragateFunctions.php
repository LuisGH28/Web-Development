<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Consulta con Funciones Agregas</title>
  <link rel="stylesheet" href="../Codigo_Css/simpleQuery.css">
</head>
<body>
  <?php
    //include the file connecton.php
    include 'connection.php';

    //make the query
    $producto = "Capuchino";

    
    $query = "SELECT SUM(Total) as totalSum, Producto
          FROM Ticket
          WHERE Producto = '$producto'";

    $result = $mysqli->query($query);

    // Verificar si se obtuvieron resultados
    if ($result->num_rows > 0) {
      echo "<table class='products-table'>";
      echo "<tr>";
      echo "<th>Total</th>";
      echo "<th>Producto</th>";
      echo "</tr>";

      // Iterar sobre los resultados y mostrarlos
      while ($row = $result->fetch_assoc()) {
          echo "<tr>";
          echo "<td>" . $row["totalSum"] . "</td>";
          echo "<td>" . $row["Producto"] . "</td>";
          echo "</tr>";
      }

      echo "</table>";
    } else {
      echo "No se encontraron resultados.";
    }

    //close the connection
    include 'closeConnection.php';
  ?>
</body>
</html>