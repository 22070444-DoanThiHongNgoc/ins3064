<?php
// Gọi file function.php để dùng các hàm đã viết
include 'function.php';

// Test hàm sum
$a = 5;
$b = 10;
echo "Sum of $a and $b is: " . sum($a, $b) . "<br><br>";

// Test hàm swap
$a = 3;
$b = 7;
echo "Before swap: a = $a, b = $b<br>";
swap($a, $b);
?>
