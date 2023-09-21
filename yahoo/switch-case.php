<?php

// $day = 3;

// switch ($day) {
//     case 1: case 2: case 3:
//         echo "Monday";
//         break;

//         // echo "Sunday";
//         // break;

//         // echo "Tuesday";
//         // break;
//     case 4:
//         echo "Wednesday";
//         break;
//     case 5:
//         echo "Thursday";
//         break;
//     case 6:
//         echo "Friday";
//         break;
//     case 7:
//         echo "Saturday";
//         break;
//     default:
//         echo "Please Enter A Valid  Day Number";
//         break;
// }

$age = 0;

switch (true):
    case ($age >= 18 && $age < 23):
        echo "You Are Eligible";
        break;
    case ($age >= 10 && $age < 16):
        echo "You R not Eligible";
        break;
    case ($age >= 26 && $age < 35):
        echo "Your Are also Eligible";
        break;
    case ($age >= 25 && $age < 27):
        echo "You are still Eligible";
        break;
    default:
        echo "Enter A Valid Age";
endswitch;
