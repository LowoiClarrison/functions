<?php
//indexed array
$cars = array("BMW","Volvo","Subaru");
echo "I love to own a " . $cars[0]. ".";
echo "<br>";

//associative array
$age = array("Aboi"=>"24", "Benja"=>"25","Etaan"=>"30");
echo "Aboi is ". $age['Aboi'] ." years old.";
echo "<br>";

//foreach loop
$age = array("Aboi"=>"24", "Benja"=>"25","Etaan"=>"30");
foreach ($age as $x => $x_value){
    echo "key=" . $x .", value=" . $x_value;
    echo "<br>";
}

//multidimensional array
$cars = array(
array("Volvo",10,20),
array("BMW",15,30),
array("Subaru",14,10),
array("Range Rover",12,16)
);
echo $cars[0][0]. ": In stock: ".$cars[0][1]. ", sold: ". $cars[0][2].".<br>";
echo $cars[1][0]. ": In stock: ".$cars[1][1]. ", sold: ". $cars[1][2].".<br>";
echo $cars[2][0]. ": In stock: ".$cars[2][1]. ", sold: ". $cars[2][2].".<br>";
echo $cars[3][0]. ": In stock: ".$cars[3][1]. ", sold: ". $cars[3][2].".<br>";