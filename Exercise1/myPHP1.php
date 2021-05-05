<?php

function rowPrint($mult, $tag){
    echo "<tr>";
    for($a = 0; $a <=100; $a++){
        $val = $a * $mult;
        if($tag == "th" && $a == 0){
            echo "<tag> 0 </$tag>";
        }
        else if($tag != "th" && $a != 0){
            echo "<tag> $val </$tag>";
        }
    }
    echo "</tr> <br>";

}

function printer(){
    rowPrint(1,"th");
    for($a = 1; $a <=100; $a++){
        rowPrint($a,"td");
    }
    
}


echo "<table>";
printer();
echo "</table>"

?>