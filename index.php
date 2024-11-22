<?php
$my_name = "Emamode";
$myName = "matthew";
echo "<br> my name is $my_name";
$my_name = "matthew";
echo"<br>";
var_dump($my_name);
$yearsOfExperience = 5; 
echo "<br>";
var_dump($yearsOfExperience);
$Height = 6.1;
echo  "<br>";
var_dump($Height);
$isMale = true;
var_dump ($isMale);
echo "<br>";

// array
$fullName =array("Emamode", "Matthew", "Akpohineta");
var_dump($fullName);
echo "<br>";
echo "my first name is $fullName[0] and my surname is $fullName[2]";

// 28/10/2024
// null
$Nothing = null;
echo "<br>";
var_dump ($Nothing);
// constant
define("pi", 3.142);
echo "<br>";
echo "pi";
 echo "<br>";
var_dump(pi);

//const gravityAcceleration = 10;
define("gravityAcceleration", 20);
echo "<br>";
var_dump(gravityAcceleration);
echo "<br>";

//31/10/24
//operators
//arithmetic operators
//addition operators
$x = 10;
$y = 5;
echo "<br>";
echo $x+$y;
echo "<br>";
echo $x-$y;
echo "<br>";
echo $x*$y;
echo "<br>";
echo $x/$y;
echo "<br>";

//modulus operations
echo $x%$y;
echo "<br>";
echo $x ** $y;
echo "<br>";

//increment and decrement operator
$x++;
echo $x;
echo "<br>";
echo " 08117455335";
echo "<br>";

//1/11/24
//decrement operator
$x--;
echo $x;

//assignment operator
$a = 100;
$b = 50;

//addition assignment
$a += $b;
echo "<br>";
echo $a;

//subtraction assignment
$a -= $b;
echo "<br>";
echo $a;

// divisional assignment
$a /= $b;
echo "<br>";
echo $a;

// multiplication assignment
$a *= $b;
echo "<br>";
echo $a;

echo "<br>";
 
// logical operators
//Examples of logical operator are : AND(&&), OR (||), XOR , NOT(!)
 
if ($a == 100 && $b == 50) {
echo "we are good to go.";
}
echo "<br>";
if ($a == 100 || $b == 55) {
echo "we are good to go.";
}
echo "<br>";
if ($a == 100 xor $b == 55) {
echo "we are good to go.";
}
echo "<br>";
if (!($a == 101)) {
echo "we are good to go.";
}
if (!($a == 101)) {
echo "we are good to go.";
}

//  7/4/24

//  PHP Conditional statements
// there are four notable conditional statements in PHP

// if statement

// if else statement

// else if statement

// switch statement


// IF STATEMENT
// __________

//  the if statement is the most important statements in PHP

// Example:
// _______

if(7>3) {
   echo "have a good day";
}

echo "<br>";
//  variable decleratiion
$my_name = "matthew";

$present_time = date (format: "H:i");
  
echo "<br>";

echo "present_time: $present_time <br>";
  




if ($present_time >= 00.00 && $present_time < 12.00){
echo "<h3> Good morning, $my_name! </h3";
}

elseif ($present_time >= 12.00 && $present_time <14.00){
echo "<h3> goodafternoon, $my_name! </h3>";
}
elseif ($present_time >= 16.00 && $present_time < 23.00){
   echo "<h3> Good night, $my_name! </h3>";
}

else {
   echo "<h3> hello, $my_name! </h3>";
}


// 8/11/24
//   switch statement
// _________

$today = date (format: "D");
// echo "today is: $today <br>";


switch ($today) {
     case "Mon":
     echo "Hello everybody, it's Monday. Have a great week";
     break;
     case "Tue":
      echo "hello everybody, it's tuesday. Do have a wonderful week!";
     break;
     case "Wed":
      echo "hello everybody, it's wednesday. Do have a splendid week!";
     break;
     case "Thurs":
      echo "hello everybody, it's thursday. Do have a miraculous week!";
     break;
     case "Fri":
      echo "hello everybody, it's friday. Do have a Joyous week!";
     break;
     case "Sat":
      echo "hello everybody, it's saturday. Do have a great week!";
     break;
     case "Sun":
      echo "hello everybody, it's sunday. Do have a glorious week!";
     break;
     default:
        echo "sorry, this is not a day in the week!";
        break;

   }

   //  Php loops
   
   // --while loops

   $j = 1;
   while ($j < 9) {
      echo $j;
      $j++;
   }

//  11/11/2024
// Php loops

// create an app that print number 1 to 100, print fixx for 
// multiples of 3, and buzz fotr multiple of 5, print fizzbuzz
// for multiple of 15
for ($numbers =1; $numbers <=100; $numbers++) 
   if($numbers % 3 == 0) {
      echo "fizz <br>";
   }



/*$numbers = 1;
while ($numbers <= 10) {
   echo $numbers."<br>";
   $numbers++;
} */

// do while loop
/* $numbers = 1;
do {
   echo $numbers."<br>";
   $numbers++;
}while ($numbers <= 10 ) */

// for loops

for ($numbers = 1; $numbers <= 10; $numbers++) {
   echo $numbers."<br>";
}

// for each

/*$cars = array("BMW", "ferrari", "lexus", "toyota");
echo "i love $cars[0] <br>";
echo "i love $cars[1] <br>";
echo "i love $cars[2] <br>";
echo "i love $cars[3] <br>";*/

$cars = array ("BMW", "lexus", "peagout", "venza");
foreach ($cars as $cars) {
   echo "i love $cars <br>";
}
 
// 15/11/24
// Array
$domesticanimal = array ('Dog', 'Cat', 'Horse', 'Goat', 'cow');
$cities = ["Asaba", "Warri", "Ughelli", "Sapele", "Agbor", "Patani", "Udu"];
echo "<br>" . $domesticanimal [0] . '<br>'; 


//  index array
// association array
// multi-dimentional array

// count
echo count($domesticanimal) . '<br>';

// array_push
array_push($cities, 'Abraka');

var_dump($cities);

$cities[2] = 'sapele';
echo '<br>';
var_dump($cities);


// associative array
$phone = ['brand' => 'iphone', 'model'=> '14 pro', 'color'=> 'white', 'ROM'=> 256];
echo '<br>';
var_dump($phone);
$phone["model"] = '15 pro';
echo '<br>';
var_dump($phone);

// 18/11/24
// fuction
function greetMe() {
   echo "<br> good afternoon";
}
greetMe();










?>
