<?php

function printer(){
    for($a = 0; $a <= 100; $a++){
        if($a == 0){
            echo " ";
            $m = 1;
            for($b = 1; $b <=100; $b++){
                echo "$b ";
            }
            echo "<br>";
        }
        else{
            echo "$a ";
            $m = $a;
            for($b = 1; $b <=100; $b++){
                $val = $b * $m;
                echo "$val ";
            }
            echo "<br>";
        }
        
    }
}

printer();

?>