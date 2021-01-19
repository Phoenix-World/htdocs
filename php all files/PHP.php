<?php
echo "<h2>hello sun :)</h2>";
echo "<br>";
echo "Find Number Power<br>";
$base = 7;
$power = 2;
$powerofNumber = pow($base, $power);
echo $powerofNumber;
echo "<br>";

echo "Find Number Power type2<br>";
$NumberPower = pow(13, 2);
echo $NumberPower;

//FIND AREA IN PHP
//CIRCLE
echo "<br>";
$pai = 3.141;
$red =5; //redius
$areaofCricle = $pai*$red*$red;
echo $areaofCricle;

//TRIANGLE
echo "<br>";
$base = 3;
$height = 5;
$areaofTriangle = (1/2)*$base*$height;
echo $areaofTriangle;

//SQUARE
echo "<br>";
$a = 5;
$areaofSquare = $a*$a;
echo $areaofSquare;

//RECTANGLE
echo "<br>";
$length = 5;
$width = 3;
$areaofRectangle = $length*$width;
echo $areaofRectangle;

?>