<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Consulta de Resumen</title>
  <link rel="stylesheet" href="../Codigo_Css/simpleQuery.css">
</head>
<body>
  <?php
    include 'connection.php';
    
    echo "<br/>";

    echo "Consulta de Resumen";

    echo "<br/>";

    echo "Consulta SQL: SELECT Nombre, MAX(Precio) AS PrecioMaximo FROM Producto";

    echo "<br/>";

    $sql = "SELECT Nombre, MAX(Precio) AS PrecioMaximo FROM Producto";
    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
      echo "<table class='products-table'>
              <tr>
                <th>Producto</th>
                <th>Precio Máximo</th>
              </tr>";

      while ($row = $result->fetch_assoc()) {
          echo "<tr>
                  <td>" . $row["Nombre"] . "</td>
                  <td>" . $row["PrecioMaximo"] . "</td>
              </tr>";
      }

      echo "</table>";
    } else {
      echo "No se encontraron resultados.";
    }

    include 'closeConnection.php';

  ?>
</body>
</html>