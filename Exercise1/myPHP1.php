<?php

function printer(){
    for($a = 0; $a <= 100; $a++){
        echo "$a ";
        for($b = 1; $b <=100; $b++){
            echo "$b ";
        }
        echo "<br>";
    }
}

printer();

?>