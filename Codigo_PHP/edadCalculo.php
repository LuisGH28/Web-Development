<?php
  //Get the month and year of birth
  echo "Ingresa tu mes de nacimiento (1-12): ";
  $month = trim(fgets(STDIN));
  echo "Ingresa tu año de nacimiento: ";
  $year = trim(fgets(STDIN));

  //Calculating age with functions
  $currentDate = date('Y-m-d');
  $birthday = $year . '-' . $month;
  $age = date_diff(date_create($birthday), date_create($currentDate))->y;

  echo "Tienes $age años de edad";
?>