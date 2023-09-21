<?php  


$one = $_POST["one"];
$two = $_POST["two"];

if($one){
    if($two){
        if(isset($_POST["add_btn"])){
            echo "Addition is : " .  $one + $two;
        }
        if(isset($_POST["sub_btn"])){
            echo "Subtraction is : " .  $one - $two;
        }
        if(isset($_POST["multi_btn"])){
            echo "Multiplication is : " .  $one * $two;
        }
        if(isset($_POST["div_btn"])){
            echo "Divide is : " .  $one / $two;
        }
        if(isset($_POST["modu_btn"])){
            echo "Modulus is : " .  $one % $two;
        }
    }
    else{
        echo "Number Two Missing !!! ";
    }
}
else{
    echo "Number One Missing !!!";
}


?>