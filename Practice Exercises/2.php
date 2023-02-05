<?PHP
// Control Structures


// Question 1:
//Write a program that gets from input an integer number and then prints in the output if it's a positive number, negative number, or null.
// 1. only if the statement
// 2. if-else statement
// 3. ?: statement

// Question 2:
//Write a program that gets from input an integer number and then prints the ^2 of 
// it if the number is divided by 3, if not prints the double of the number.

// Question 3:
//Write a program that gets from input an integer number
// and then prints if this number is even or odd.

// Question 4:
//Write a program that gets from input a number and then prints in the
// output the level of this note on 20.


// Question 5:
//Write a program that gets from input a number of the day and then prints
// in the output its name using these two methods :
// 1. if else
// 2. switch case 
// For Example : 1---> Saturday , 5 ---> Thursday


//Results

// Question 1:
//Write a program that gets from input an integer number and then prints in the output if it's
// a positive number, negative number, or null.
// 1. only if the statement
// 2. if-else statement
// 3. ?: statement

// 1
// $value = readline('Enter an integer : ');
// if (isset($value)) {
//     if (is_numeric($value)) {
//         $intvalue = intval($value);
//         if ($intvalue > 0) {
//             echo $intvalue ." is a positive number";
//         }
//         if($intvalue < 0) {
//             echo $intvalue ." is a negative number";
//         } 
//         if($intvalue == 0) {
//             echo "NULL";
//         }
//     }
// }

// 2
// $value = readline('Enter an integer : ');
// if (isset($value)) {
//     if (is_numeric($value)) {
//         $intvalue = intval($value);
//         if ($intvalue > 0) {
//             echo $intvalue ." is a positive number";
//         } if($intvalue < 0) {
//             echo $intvalue ." is a negative number";
//         } else {
//             echo "NULL";
//         }
//     }
// }

// 3
// $value = readline('Enter an integer : ');
// if (isset($value)) {
//     if (is_numeric($value)) {
//         $intvalue = intval($value);
//         $output = ($intvalue > 0) ? ($intvalue . " is a positive number") : (($intvalue < 0) ? $intvalue . " is a negative number" : "NULL");
//         echo $output;
//     }
// }

// Question 2:
//Write a program that gets from input an integer number and then prints the ^2 of 
// it if the number is divided by 3, if not prints the double of the number.
// $value = readline("Enter an integer number : ");
// $value = intval($value);
// $result = ($value % 3 == 0) ? pow(2, $value) : $value * 2;
// echo $result;


// Question 3:
//Write a program that gets from input an integer number
// and then prints if this number is even or odd.

// $value = readline("Enter an integer number : ");
// $value = intval($value);
// $result = ($value % 2 == 0) ? $value . " is even" : $value . " is odd";
// echo $result;

// Question 4:
//Write a program that gets from input a number and then prints in the
// output the level of this note on 20.

// $value = readline("Enter a note /20 : ");
// $note = intval($value);
// if($note < 10){
//     echo "F";
// }
// if ($note >= 10 && $note < 12) {
//     echo "D";
// }
// if ($note >= 12 && $note < 14) {
//     echo "C";
// }
// if ($note >= 14 && $note < 16) {
//     echo "B";
// }
// if ($note >= 16 && $note <= 20) {
//     echo "A";
// }


// Question 5:
//Write a program that gets from input a number of the day and then prints
// in the output its name using these two methods :
// 1. if else
// 2. switch case 
// For Example : 1---> Sunday , 5 ---> Thursday

$value = readline("Enter the number of the day :");
$value = intval($value);
// 1 if-else
// if ($value == 1) {
//     echo "It is Sunday";
// } else if($value == 2) {
//     echo "It is Monday";
// } else if($value == 3) {
//     echo "It is Tuesday";
// }else if($value == 4) {
//     echo "It is Wednesday";
// }else if($value == 5) {
//     echo "It is Thursday";
// }else if($value == 6) {
//     echo "It is Friday";
// } else {
//     echo "It is Saturday";
// }

//2 Switch-case
switch ($value) {
    case 1:
        echo "It is Sunday";
        break;
    case 2:
        echo "It is Monday";
        break;
    case 3:
        echo "It is Tuesday";
        break;
    case 4:
        echo "It is Wednesday";
        break;
    case 5:
        echo "It is Thursday";
        break;
    case 6:
        echo "It is Friday";
        break;
    default:
        echo "It is Saturday";
}