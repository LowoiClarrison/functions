<?php
//while loop
$num1=20;
while($num1>=5){
    echo "The number is: $num1 <br>";
    $num1-=5;
    echo "<br>";
}

//do while
$num2=20;
do {
    echo "The number is: $num2 <br>";
    $num2-=2;
}while($num2>=2);
echo "<br>";

//for loop
for ($age=18; $age>=0;$age-=9) {
    echo "The age allowed is: $age <br>";
}