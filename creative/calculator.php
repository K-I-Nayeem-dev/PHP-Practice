<?php

// $one = $_POST["num_one"];
// $two = $_POST["num_two"];

// $add = $_POST["add_btn"];
// $sub = $_POST["sub_btn"];
// $multi = $_POST["multi_btn"];
// $divi = $_POST["Div_btn"];


// if($one){
//     if($two){
//         if($add){
//             echo "Addition is = " .  $one + $two;
//         }
//         if($sub){
//             echo "Subtraction is = " .  $one - $two;
//         }
//         if($multi){
//             echo "Multiplication is = " .  $one * $two;
//         }
//         if($divi){
//             echo "Subtraction is = " .  $one / $two;

//         }
//     }
//     else{
//         echo "Plz Enter Number 2 Value";
//     }
// }
// else{
//     echo "Plz Enter Number 1 Value";
// }

// $one = $_POST["num_one"];

// $two = $_POST["num_two"];


// if($one){
//     if($two){
//         if(isset($_POST["add_btn"])){
//             echo "Your Result is : " . $one + $two;
//         }
//         if(isset($_POST["sub_btn"])){
//             echo "Your Result is : " . $one - $two;
//         }
//         if(isset($_POST["multi_btn"])){
//             echo "Your Result is : " . $one * $two;
//         }
//         if(isset($_POST["div_btn"])){
//             echo "Your Result is : " . $one / $two;
//         }
//         if(isset($_POST["modu_btn"])){
//             echo "Your Result is : " . $one % $two;
//         }
//     }
//     else{
//         echo "<h2>Plz Enter Number 2 to Calculate</h2>";
//     }
// }
// else{
//     echo "<h2>Plz Enter Number 1 to Calculate</h2>";
// }

// $one = $_POST["num_one"];

// $two = $_POST["num_two"];

// if($one){
//     if($two){
//         if(isset($_POST["add_btn"])){
//             echo "Your Result is : " . $one + $two;
//         }
//         if(isset($_POST["sub_btn"])){
//             echo "Your Result is : " . $one - $two;
//         }
//         if(isset($_POST["multi_btn"])){
//             echo "Your Result is : " . $one * $two;
//         }
//         if(isset($_POST["divi_btn"])){
//             echo "Your Result is : " . $one / $two;
//         }
//         if(isset($_POST["modu_btn"])){
//             echo "Your Result is : " . $one % $two;
//         }
//     }
//     else{
//     echo "<h3>Plz Enter value in Number 2</h3> ";
//     }
// }
// else{
//     echo "<h3>Plz Enter value in Number 1</h3> ";
// }

$one = $_POST["num_one"];
$two = $_POST["num_two"];

if($one){
    if($two){
        if(isset($_POST["add_btn"])){
            echo "Your Result is : " . $one + $two;
        }
        if(isset($_POST["sub_btn"])){
            echo "Your Result is : " . $one - $two;
        }
        if(isset($_POST["multi_btn"])){
            echo "Your Result is : " . $one * $two;
        }
        if(isset($_POST["div_btn"])){
            echo "Your Result is : " . $one / $two;
        }
        if(isset($_POST["modu_btn"])){
            echo "Your Result is : " . $one % $two;
        }
    }
    else{
        echo "<h3>Plz Enter a Value in Number 2</h3>";

    }
}
else{
    echo "<h3>Plz Enter a Value in Number 1</h3>";
}


?>