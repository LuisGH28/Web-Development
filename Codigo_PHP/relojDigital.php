<?php
    while (true) {
        for ($hour = 0; $hour <= 2; $hour++) {
            for ($minute = 0; $minute <= 2; $minute++) {
                for ($second = 0; $second <= 2; $second++) {
                    echo "La hora es: $hour : $minute : $second <br/>";
                    sleep(1);
                }
            } 
        }
    }

?>