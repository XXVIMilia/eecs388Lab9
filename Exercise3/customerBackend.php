<?php

$user = $_POST["user"];
$pass = $_POST["pass"];
$c = $_POST["c"];
$ch = $_POST["ch"];
$e = $_POST["e"];
$h = $_POST["h"];
$ship = $_POST["q1"];

function createTable($cheese,$corn,$egg,$ham,$s){
    echo "<table>";
    
    echo "<tr>";
    echo "<th> &nbsp &nbsp </th>";
    echo "<th> Quantity </th>";
    echo "<th> Cost per item </th>";
    echo "<th> Sub Total </th>";
    echo "</tr>";

    $var1 = 5.99*$cheese;
    echo "<tr>";
    echo "<td class='alt'> Cheese </td>";
    echo "<td> $cheese </td>";
    echo "<td> $5.99 </td>";
    echo "<td> $var1 </td>";
    echo "</tr>";

    $var2 = 3.99*$corn;
    echo "<tr>";
    echo "<td class='alt'> Corn </td>";
    echo "<td> $corn </td>";
    echo "<td> $3.99 </td>";
    echo "<td> $var2 </td>";
    echo "</tr>";

    $var3 = 9.99*$egg;
    echo "<tr>";
    echo "<td class='alt'> Corn </td.alt>";
    echo "<td> $egg </td>";
    echo "<td> $9.99 </td>";
    echo "<td> $var3 </td>";
    echo "</tr>";

    $var4 = 19.99*$ham;
    echo "<tr>";
    echo "<td class='alt'> Ham </td>";
    echo "<td> $ham </td>";
    echo "<td> $19.99 </td>";
    echo "<td> $var4 </td>";
    echo "</tr>";

    $var5 = $_POST["q1"];
    $text = $_POST["q1"];

    if($_POST["q1"] == "fifty"){
        $var5 = 50;
        $text = '$50.00 over night shipping';
    }
    else if($_POST["q1"] == "free"){
        $var5 = 0;
        $text = 'Free 7 Day Shipping';
    }
    else if($_POST["q1"] == "five"){
        $var5 = 5;
        $text = '$5 Three Day Shipping';
    }

    echo "<tr>";
    echo "<td class = alt> Shipping </td>";
    echo "<td colspan='2'> $text </td>";
    echo "<td> $var5 </td>";
    echo "</tr>";

    $var6 = $var1 + $var2 + $var3 + $var4 + $var5;
    echo "<tr>";
    echo "<td class = alt colspan='3'> Total Cost </td>";
    echo "<td class = alt> $var6 </td>";
    echo "</tr>";


    echo "</table>";
}


echo "<!DOCTYPE html>";
echo "<html>";
echo "<head>";
echo "<script type='text/javascript' src='formChecker.js'>";
echo "</script>";
echo "<link href='style.css'
            rel='stylesheet'
            type='text/css'/>";
echo "</head>";

echo "<h1> Thank You for your purchase, $user</h1>";
echo "<h2> Submitted Password, $pass</h2>";
echo "<h3> Order Summary below:</h3>";
createTable($ch,$c,$e,$h,$ship);
        
echo "</html>";

?>