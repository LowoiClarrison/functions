<?php
//user-defined function
function mycollege(){
    echo "My college is eMobilis Mobile Technology Institute";
}
mycollege();

//functions with arguments
function firefoxnames($firstname,$lastname,$age){
    echo "My first name is $firstname, second name is $lastname and my age is $age years old <br>";
}
echo "<br>";
Firefoxnames(firstname: "Leon",lastname: "Rono",age: 30);
Firefoxnames(firstname: "Glenn", lastname: "Aboi",age:23);
Firefoxnames(firstname: "Isaac", lastname:"Kipruto",age:26);
echo "<br>";

//function 2
function myBooks($author,$bookname,$year){
    echo " $author. $bookname. Published in $year <br>";
}
myBooks("Robbert Kiyosaki.",bookname:"Rich Dad Poor Dad.", year:  "1990");
myBooks("Jay Shetty", bookname:"Think Like A Monk.", year: "2019");
myBooks("Dale Carnegie",bookname:"How To Win Friends And Influence People.", year: "1996");
