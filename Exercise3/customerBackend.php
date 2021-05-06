<?php

$user = $_POST["user"];
$pass = $_POST["pass"];
$c = $_POST["c"];
$ch = $_POST["ch"];
$e = $_POST["e"];
$h = $_POST["h"];
$ship = $_POST["q3"];

function createTable($cheese,$corn,$egg,$ham,$shipping){
    echo "<table>";
    
    echo "<tr>";
    echo "<th> &nbsp &nbsp </th>"
    echo "<th> Quantity </th>"
    echo "<th> Cost per item </th>"
    echo "<th> Sub Total </th>"
    echo "</tr>";

    $var1 = 5.99*$cheese
    echo "<tr>";
    echo "<td.alt> Cheese </td.alt>"
    echo "<td> $cheese </td>"
    echo "<td> $5.99 </td>"
    echo "<td> $var </td>"
    echo "</tr>";

    $var2 = 3.99*$corn
    echo "<tr>";
    echo "<td.alt> Corn </td.alt>"
    echo "<td> $corn </td>"
    echo "<td> $3.99 </td>"
    echo "<td> $var </td>"
    echo "</tr>";

    $var3 = 9.99*$egg
    echo "<tr>";
    echo "<td.alt> Corn </td.alt>"
    echo "<td> $egg </td>"
    echo "<td> $9.99 </td>"
    echo "<td> $var </td>"
    echo "</tr>";

    $var4 = 19.99*$ham
    echo "<tr>";
    echo "<td.alt> Ham </td.alt>"
    echo "<td> $ham </td>"
    echo "<td> $3.99 </td>"
    echo "<td> $var </td>"
    echo "</tr>";

    echo "<tr>";
    echo "<td> &nbsp &nbsp </td>"
    echo "<td> Quantity </td>"
    echo "<td> Cost per item </td>"
    echo "<td> Sub Total </td>"
    echo "</tr>";






    echo "</table>";
}

function totalCost($cheese,$corn,$egg,$ham,$shipping){

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