<?php
    $hour = 0;
    $minute = 0;
    $second = 0;
    do{
        while($minute <= 2) {
            for ($second = 0; $second <= 2; $second++) {
                echo "La hora es: $hour : $minute : $second <br/>";
                sleep(1);
            }
        $minute++;
        } 
        $hour++;
    }while($hour <= 2)
?>