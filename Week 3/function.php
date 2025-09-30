<?php
function sum($a, $b) {
    return $a + $b;
}

function swap($a, $b) {
    $temp = $a;
    $a = $b;
    $b = $temp;

    echo "Value of a is " . $a . "<br>";
    echo "Value of b is " . $b;
}
?>
