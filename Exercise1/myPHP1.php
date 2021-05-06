<?php

function rowPrint($mult, $tag){
    echo "<tr>";
    if($tag == "th"){
        echo "<th> &nbsp &nbsp </th>";
        for($a = 1; $a <=100; $a++){
            echo "<th> $a </th>";
        }
        
    }
    else{
        echo "<$tag> $mult </$tag>";
        for($a = 1; $a <=100; $a++){
            $val = $a * $mult;
            echo "<$tag> $val </$tag>";
        }
       
    }
    
    echo "</tr>";

}

function printer(){
    rowPrint(1,"th");
    for($a = 1; $a <=100; $a++){
        rowPrint($a,"td");
    }
    
}


echo "<table style=marigin-top:null>";
printer();
echo "</table>";

?>