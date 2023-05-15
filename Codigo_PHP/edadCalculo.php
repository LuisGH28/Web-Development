<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
    //Get the month and year of birth of the form of html
    $birthMonth =  $_GET['month'];
    $yearBirth = $_GET['year'];

    //Get the current month and year
    $currentMonth = date('n');
    $currentYear = date('Y');

    $age = $currentYear - $yearBirth;

    //check if the birthday hasn't yet arrived
    if ($birthMonth > $currentMonth) {
        $age--;
    }


    echo "Tienes $age años de edad";
  ?>
</body>
</html>

