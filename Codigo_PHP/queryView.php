<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Consulta con Vistat</title>
  <link rel="stylesheet" href="../Codigo_Css/simpleQuery.css">
</head>
<body>
  <?php
    include 'connection.php';
    echo "<br/>";

    echo "Consulta de vista";

    echo "<br/>";

    echo "Vista SQL: create view precioProductos as Select Producto.Nombre, Producto.Presentacion_Producto, Producto.Precio From Producto order by Precio;";

    echo "Consulta: select * from precioProductos;";
    echo "<br/>";
    $sql = "SELECT * FROM precioProductos";
    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
      echo "<table class='products-table'>
              <tr>
                <th>Nombre</th>
                <th>Presentación</th>
                <th>Precio</th>
              </tr>";

      while ($row = $result->fetch_assoc()) {
          echo "<tr>
                  <td>" . $row["Nombre"] . "</td>
                  <td>" . $row["Presentacion_Producto"] . "</td>
                  <td>" . $row["Precio"] . "</td>
                </tr>";
      }

      echo "</table>";
    } else {
      echo "No se encontraron datos en la vista";
    }

  include 'closeConnection.php';
  ?>
</body>
</html>