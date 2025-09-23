<?php
$x = isset($_GET["x"]) ? $_GET["x"] : 10;
$y = isset($_GET["y"]) ? $_GET["y"] : 11;

echo "x == y: " . ($x == $y) . "<br/>";
echo "x != y: " . ($x != $y) . "<br/>";
echo "x < y: " . ($x < $y) . "<br/>";
echo "x > y: " . ($x > $y) . "<br/>";
echo "x <= y: " . ($x <= $y) . "<br/>";
echo "x >= y: " . ($x >= $y) . "<br/>";
?>