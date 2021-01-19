<?php
$a = 2;
$b =2;

$a++;
echo "post incriment<br>";
echo $a;
echo "<br>";

echo "pre incriment<br>";
echo ++$b;

#condisational operators
$c = 3;
$d = 5;
echo "<br>";
echo $c < $d;
echo "<br>";
echo "<br>";

//if-else condisation
$x=3; $z=6;
echo "if-else<br>";
if ($x<$z) {
	echo "$x is smaller than $z";
}else{
	echo "$x is greater than $z";
}

//ELSE-IF
echo "<br>";
echo "<br>";
echo "Elseif<br>";

$result=20; 
if ($result<=30) {
	echo "FAIL";
}elseif($result<=40){
	echo "PASS";

}elseif ($result<=60) {
	echo "GOOD";
}else{
	echo "EXCELENT";
}

//SWITCH CASE
echo "<br>";
$day = 1;
switch ($day) {
	case '1':
		echo "this is a switch case ";
		break;
	case '2':
		echo "MON";
			break;	
	
	default:
		echo "WRONG VALUE";
		break;
}
echo "<br>";

//FOR LOOP
echo "<br>";
echo "FOR LOOP<br>";
for ($i=1; $i <=10 ; $i++) {
	echo "this is a for loop $i<br>"; 
}
echo "<br>";

//while loop
	echo "<h1>while loop</h1>";
	$a = 4;
while ( $a<= 10) {
	echo "this is a while loop $a<br>";
	$a++;
}

//strings
echo "<br>";
echo "<h2>strings</h2>";
$a = "payelsarkar";
$b = "India is my country";
$c = "KOLKATA";

echo strlen($a);
echo "<br>";
echo str_word_count($b);
echo "<br>";
echo strtoupper($a);
echo "<br>";
echo strtolower($c);
echo "<br>";

//FUNCTION type 1
 
sum();
function sum(){
	$a = 10;
	$b = 20;
	$c = $a+$b;
	echo "the result of two number is $c";
}
echo "<br>";
//FUNCTION type 2
function rum($x,$y){
	$c = $x+$y;
	return $c;
}
echo "this is sum function with return value = ".rum(5,10);
echo "<br>";
echo "<br>";

// index-ARRAY
$india = array("delhi","pune","mumbai");
echo "INDEX-ARRY<br>";
echo $india[2];
echo "<br>";

//Associative ARRAY
$place = array("capital"=>"delhi",
				"bestcity"=>"pune",
				"bollywood"=>"mumbai");
echo "ASSOCIATIVE ARRAY<br>";
echo $place["capital"];
echo "<br>";
//Associative ARRAY with FOR-EACH LOOP
foreach ($place as $payel) {
	echo "Associative Array with FOR-EACH LOOP $payel<br>";
}
echo "<br>";

//multidimensional array
$thapa = array(
	array("atul"),
	array("navi","luky"),
	array("ambani","adani","ambuja")
);
echo $thapa[0][0];
echo "<br>";
echo $thapa[1][1];
echo "<br>";
echo $thapa[2][2];




?>