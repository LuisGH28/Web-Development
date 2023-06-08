<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Consulta Multitabla</title>
  <link rel="stylesheet" href="../Codigo_Css/simpleQuery.css">
</head>
<body>
  <?php
    //First i'ma include the file that connect to the database
    include 'connection.php';

    echo "<br/>";

    echo "Consulta de multitabla";
    echo "<br/>";

    echo "Consulta SQL: SELECT Ticket.idTicket, Ticket.Producto, Ticket.Cantidad, Producto_Ticket.Presentacion, Ticket.Fecha, Ticket.Total
          FROM Ticket
          INNER JOIN Producto_Ticket ON Ticket.idTicket = Producto_Ticket.idTicket";
        
    echo "<br/>";
    //Now insert the script that make the query
    $query = "SELECT Ticket.idTicket, Ticket.Producto, Ticket.Cantidad, Producto_Ticket.Presentacion, Ticket.Fecha, Ticket.Total
          FROM Ticket
          INNER JOIN Producto_Ticket ON Ticket.idTicket = Producto_Ticket.idTicket";

    $result = $mysqli->query($query);

    // Verificar si se obtuvieron resultados
    if ($result->num_rows > 0) {
        echo "<table class='products-table'>";
        echo "<tr>";
        echo "<th>ID Ticket</th>";
        echo "<th>Producto</th>";
        echo "<th>Cantidad</th>";
        echo "<th>Presentacion</th>";
        echo "<th>Fecha</th>";
        echo "<th>Total</th>";
        echo "</tr>";

        // Iterar sobre los resultados y mostrarlos
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["idTicket"] . "</td>";
            echo "<td>" . $row["Producto"] . "</td>";
            echo "<td>" . $row["Cantidad"] . "</td>";
            echo "<td>" . $row["Presentacion"] . "</td>";
            echo "<td>" . $row["Fecha"] . "</td>";
            echo "<td>" . $row["Total"] . "</td>";
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