<?php

function rowPrint($mult, $tag){
    echo "<tr>";
    for($a = 0; $a <=100; $a++){
        echo "<tag>" .. $a .. "</$tag>";
    }
    echo "</tr>";

}

function printer(){
    rowPrint(1,"th");
    
}


echo "<table>";
printer();
echo "</table>"

?>