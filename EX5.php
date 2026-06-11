<?php

echo "<h2>Using For Loop </h2>";
for ($i = 5; $i <= 10; $i++) 
    {
    echo $i . " ";
    }

echo "<hr>";

echo "<h2>Using Each Loop </h2>";

$numbers = array(5, 6, 7, 8, 9, 10);

foreach ($numbers as $num) {
    echo $num . "<br>";
}

?>