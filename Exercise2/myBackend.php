<?php

$q1 = $_POST["q1"];
$q2 = $_POST["q2"];
$q3 = $_POST["q3"];
$q4 = $_POST["q4"];
$q5 = $_POST["q5"];
$answers = ["Sam","The Boston Molasses Disaster","19","Lord Kelvin","A"];

function getResults($answers){
    $q1 = $_POST["q1"];
    $q2 = $_POST["q2"];
    $q3 = $_POST["q3"];
    $q4 = $_POST["q4"];
    $q5 = $_POST["q5"];
    $vals = [$q1,$q2,$q3,$q4,$q5];
    
    $correct = 0;
    for($a = 0; $a < 5; $a++){
        if($vals[$a] == $answers[$a]){
            $correct++;
        }
    }
    return($correct);
}

echo "<span style='font-size:50px'>";
echo "Question 1: Which name has the least amount of letters?<br>";
echo "&nbsp &nbsp&nbsp &nbspYou answered: " . $q1 .  "<br>";
echo "&nbsp &nbsp&nbsp &nbspCorrect answer: " . $answers[0] .  "<br><br>";

echo "Question 2: Which significant event occured in 1918?<br>";
echo "&nbsp &nbsp&nbsp &nbspYou answered: " . $q2 .  "<br>";
echo "&nbsp &nbsp&nbsp &nbspCorrect answer: " . $answers[1] .  "<br><br>";

echo "Question 3: My twin lives at the reverse of my house number. The difference between our house numbers ends in two. What are the lowest possible numbers of our house?<br>";
echo "&nbsp &nbsp&nbsp &nbspYou answered: " . $q3 .  "<br>";
echo "&nbsp &nbsp&nbsp &nbspCorrect answer: " . $answers[2] .  "<br><br>";

echo "Question 4: Which Scientist had a noteworthy beard?<br>";
echo "&nbsp &nbsp&nbsp &nbspYou answered: " . $q4 .  "<br>";
echo "&nbsp &nbsp&nbsp &nbspCorrect answer: " . $answers[3] .  "<br><br>";

echo "Question 5: Lowest key on an 88 key piano?<br>";
echo "&nbsp &nbsp&nbsp &nbspYou answered: " . $q5 .  "<br>";
echo "&nbsp &nbsp&nbsp &nbspCorrect answer: " . $answers[4] .  "<br><br>";

$num = getResults($answers);
$percent = ($num/5)*100;
echo "Correct: " . $num . "/5<br>";
echo "Percent: " . $percent . "%";
echo "</span>";
?>