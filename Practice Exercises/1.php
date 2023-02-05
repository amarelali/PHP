<?php
//Question nb 1 :
// Write a program that gets 2 integer numbers a and b and prints in the output random number
// between a and b, then prints in output a^b and radical of b.

//Question nb 2 :
// Write a program that gets the age of the user and then prints in the output his age 
// after 10 years.

//Question nb 3 :
// Write a program that gets from the user the first letter of his last name and the first letter of his first name,
// then print in the output these two letters separated with a point.

//Question nb 4:
// Write a program that gets two integer numbers then calculates and prints in the output 
// their addition and their multiplication.

//Question nb 5:
// Write a program that calculates and print in the output number of seconds transformation to
// (hours, minutes,seconds) {value from user}

//Question nb 6:
// Write a program that gets from the user the temperature in Fahrenheit and prints in the output 
// this temperature in celsius
// Tc = 5/9 (Tf -32)



//Results :
//Question nb 1 :
// Write a program that gets 2 integer numbers a and b and prints in the output random number
// between a and b, then prints in output a^b and radical of b.

// $a = (int)readline("Enter an integer a :");
// $b = (int)readline("Enter an integer b :");

// echo "random number is : ". rand($a, $b) . "\n";
// echo "pow is : ". pow($a, $b) . "\n";
// echo "radical is : ". sqrt($b) . "\n";

//Question nb 2 :
// Write a program that gets the age of the user and then prints in the output his age 
// after 10 years.

// $age = (int)readline("Enter your age:");
// echo "Your age after 10 years is : ". ($age+=10) . "\n";

//Question nb 3 :
// Write a program that gets from the user the first letter of his last name and the first letter of his first name,
// then print in the output these two letters separated with a point.

// $firstName = readline('Enter your first Name :');
// $LastName = readline('Enter your last Name :');
// echo $firstName[0].".".$LastName[0];

//Question nb 4:
// Write a program that gets two integer numbers then calculates and prints in the output 
// their addition and their multiplication.

// $a = (int) readline("Enter a :");
// $b = (int) readline("Enter b :");

// echo "addition a + b =" . ($a + $b);
// echo "multiplication a * b =" . ($a * $b);

//Question nb 5:
// Write a program that calculates and print in the output number of seconds transformation to
// (hours, minutes,seconds) {value from user}

// $nbOfSeconds = (int) readline("Enter number of seconds :");
// $nbOfHours = ($nbOfSeconds / 3600);
// $nbOfMinutes = ($nbOfSeconds % 3600)/60;
// $restOfSeconds = ($nbOfSeconds % 3600) % 60;
// echo (int) $nbOfHours." h ; ".(int)$nbOfMinutes. " mins ; ".(int)$restOfSeconds ." secs";


//Question nb 6:
// Write a program that gets from the user the temperature in Fahrenheit and prints in the output 
// this temperature in celsius
// Tc = 5/9 (Tf -32)
$temperatureF = (int)readline("Enter temperature in Fahrenheit :");
$temperatureC = (5 / 9)*($temperatureF - 32);
echo "Celsius Temperature =" . $temperatureC."°C";