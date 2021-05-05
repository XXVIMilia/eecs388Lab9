<?php

function rowPrint($mult, $tag){
    echo "<tr>";
    if($tag == "th"){
        echo "<tag> &nbsp </$tag>";
        for($a = 1; $a <=100; $a++){
            echo "<tag> $val </$tag>";
        }
        
    }
    else{
        echo "<tag> $mult </$tag>";
        for($a = 1; $a <=100; $a++){
            $val = $a * $mult;
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