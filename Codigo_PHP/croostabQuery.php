;<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Consulta de Tablas Cruzadas</title>
  <link rel="stylesheet" href="../Codigo_Css/simpleQuery.css">
</head>
<body>
  <?php
    include 'connection.php';

    echo "<br/>";

    echo "Consulta de tablas cruzadas";
    echo "<br/>";

    echo "Consulta SQL: SELECT Producto,
              SUM(CASE WHEN Fecha = '2023-04-05' THEN Cantidad ELSE 0 END) AS Venta_05,
              SUM(CASE WHEN Fecha = '2023-04-07' THEN Cantidad ELSE 0 END) AS Venta_07
              FROM Ticket
              GROUP BY Producto";

    echo "<br/>";
    
    $query = "SELECT Producto,
              SUM(CASE WHEN Fecha = '2023-04-05' THEN Cantidad ELSE 0 END) AS Venta_05,
              SUM(CASE WHEN Fecha = '2023-04-07' THEN Cantidad ELSE 0 END) AS Venta_07
              FROM Ticket
              GROUP BY Producto";

    $result = $mysqli->query($query);

    // Verificar si se obtuvieron resultados
    if ($result->num_rows > 0) {
        echo "<table class='products-table'>";
        echo "<tr>";
        echo "<th>Producto</th>";
        echo "<th>Venta_05</th>";
        echo "<th>Venta_07</th>";
        echo "</tr>";

        // Iterar sobre los resultados y mostrarlos
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["Producto"] . "</td>";
            echo "<td>" . $row["Venta_05"] . "</td>";
            echo "<td>" . $row["Venta_07"] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "No se encontraron resultados.";
    }

    include 'closeConnection.php';
  ?>
</body>
</html>