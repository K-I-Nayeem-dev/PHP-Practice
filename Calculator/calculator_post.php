<?php

// $one = $_POST["num_one"];

// $two = $_POST["num_two"];


// // echo " Your Total is " . $one + $two;

// if($one){
//     if($two){
//         if(isset($_POST["add_btn"])){
//             echo "<b>"."Your Result is = "  . $one + $two . "</b>";
//         }
//         if(isset($_POST["sub_btn"])){
//             echo "<b>"."Your Result is = "  . $one - $two . "</b>";
//         }
//         if(isset($_POST["modu_btn"])){
//             echo "<b>"."Your Result is = "  . $one % $two . "</b>";
//         }
//         if(isset($_POST["multi_btn"])){
//             echo "<b>"."Your Result is = "  . $one * $two . "</b>";
//         }
//         if(isset($_POST["div_btn"])){
//             echo "<b>"."Your Result is = "  . $one / $two . "</b>";
//         }
//     }
//     else{
//         echo "Plz Enter Number 2";
//     }
// }
// else{
//     echo "Plz Enter Number 1";
// }
                                
// if ($_POST["num_one"]) {
//     if ($_POST["num_two"]) {
//         if (isset($_POST["add_btn"])) {
//             echo $_POST["num_one"] + $_POST["num_two"];
//         }
//         if (isset($_POST["sub_btn"])) {
//             echo $_POST["num_one"] - $_POST["num_two"];
//         }
//         if (isset($_POST["modu_btn"])) {
//             echo $_POST["num_one"] % $_POST["num_two"];
//         }
//         if (isset($_POST["div_btn"])) {
//             echo $_POST["num_one"] / $_POST["num_two"];
//         }
//         if (isset($_POST["multi_btn"])) {
//             echo $_POST["num_one"] * $_POST["num_two"];
//         }
//         if (isset($_POST["clr"])) {
//             echo " ";
//         }
//     } else {
//         echo "Plz Enter Number 2";
//     }
// } else {
//     echo "Plz Enter Number 1";
// }

// $one = $_POST["one"];
// $two = $_POST["two"];
// $oparation = $_POST["oparation"];

// if($one){
//     if($two){
//         switch($oparation){
//             case "Addition":
//                 echo "Your Addition is : " . $one + $two;
//                 break;
//             case "Substraction":
//                 echo "Your Substraction is : " . $one - $two;
//                 break;
//             case "Multiplication":
//                 echo "Your Multiplication is : " . $one * $two;
//                 break;
//             case "Divide":
//                 echo "Your Divide is : " . $one / $two;
//                 break;
//             case "Modulus":
//                 echo "Your Modulus is : " . $one % $two;
//                 break;
//             } 
//     }
//     else{
//         echo "Plz Enter Number 2";
//     }
// }
// else{
//     echo "Plz Enter Number 1";
// }

// $one = $_POST['one'];
// $two = $_POST['two'];

// if($one){
//     if($two){
//         if(isset($_POST["add_btn"])){
//             echo "Your Result is : " . $one + $two ;
//         }
//         if(isset($_POST["sub_btn"])){
//             echo "Your Result is : " . $one - $two ;
//         }
//         if(isset($_POST["modu_btn"])){
//             echo "Your Result is : " . $one % $two ;
//         }
//         if(isset($_POST["multi_btn"])){
//             echo "Your Result is : " . $one * $two ;
//         }
//         if(isset($_POST["div_btn"])){
//             echo "Your Result is : " . $one / $two ;
//         }
//     }
//     else{
//         echo "Plz Enter Number 2";
//     }
// }   
// else{
//     echo "Plz Enter Number 1 ";
// }

$ana = "kamrul";

if(isset($ana)){
    echo "Variable Create Hoiche";
}
else{
    echo "Variable Create Hoy nai";
}

?>
