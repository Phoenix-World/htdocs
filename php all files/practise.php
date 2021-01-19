<?php

echo "hello world";
echo "<br>";
echo "Payel Sarkar <br>";

#variables
$a = "Payel Sarkar";
$b = "web devloper";
echo "My name is a " .$a;
echo "<br>";
echo "I shall be a " .$b;

#constant
define("FACEBOOK", "socialmedia");
echo "<br>";
echo FACEBOOK;

//Arithmetic operators
$a = 10;
$b = 2;
$c = $a+$b;
$d = $a-$b;
$e = $a*$b;
$f = $a/$b;
echo "<br>";
echo $c;
echo "<br>";
echo $d;
echo "<br>";
echo $e;
echo "<br>";
echo $f;

$i = 13;
$x = 2;
$z = $i%$x;
$w = $i ** $x;
echo "<br>";
echo $z;
echo "<br>";
echo $w;
echo "<br>";

#data types
$fname = "lily";
var_dump($fname);


?>