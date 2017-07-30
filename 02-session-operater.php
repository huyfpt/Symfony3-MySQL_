<?php

echo "<h2> số học </h2>";
echo "<br></br>";
$x = 50;
$y = $x % 3;
echo $y; // dư 2
echo "<br></br>";
$a1 = 1;
$b = $a1 + 3;
echo $y; // tổng 4
echo "<br></br>";
$s = 6;
$z = $s * 6;
echo $z; // tích 36
echo "<br></br>";
$s1 = 6;
$z1 = $s * 6;
echo $z; // thương 1
echo "<br></br>";
echo "<h2> toán tử gán </h2>";
$x = 5;
$x *= 5; // $x = $x * 5 
echo $x; // tích 25
$y = 10;
$y ++; // $y = $y +1;
echo $y; // tổng 11
echo "<br></br>";
echo "<h2> Demo x++ và ++x </h2>";
$x = 10;
$y = $x++; // $y = $y +1;
echo $y; // = 10
echo $x; //11
echo "<br></br>";
$x = 10;
$y = ++$x; // $y = $y +1;
echo $y; // = 11
echo $x; // =11



echo "<br>";

$a=5;
echo $a++ + $a– + –$a + ++$a + $a++ + ++$a – $a– + $a;

?>