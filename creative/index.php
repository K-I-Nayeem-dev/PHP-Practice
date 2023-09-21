<?php
// echo "<h1>Class 5 Assignment</h1>";

// echo "<h2>Created Table by using if else and for loop in PHP</h2>";

// // change the value of constant value to change tabel value...........

// define("table", 52);


// echo "<h3>Table Of " . table. "</h3>";

// for ($i=1; $i <= 10 ; $i++) { 

//     // now You just replace the value of 2 and add whaterver you want to see output;



//     $multi = $i * table;

//     if($i % 2 == 0) {
//         echo  table." x ". $i . " = " . $multi . "<br>";
//     }
//     else{
//         echo  table . " x ". $i . " = " . $multi . "<br>";
//     }

// }

// // Array Print.......


// echo "<h2>Array in PHP</h2>";

// $textNumber = [12, "hello", 23, "Array", 65 , "DataType"];

// // print array using by print_r.......

// print_r($textNumber) . "<br>";

// echo "<h2>print Array index Number  of 2</h2>";

// $textNumber = [12, "hello", 23, "Array", 65 , "DataType"];

// // echo "<br>";

// // print Array index item......

// print_r($textNumber[2]);

// echo "<h2>Changing Array index Number</h2>";

// $textNumber = [
//     1=> 12,
//     10=> "hello",
//     0=> 23,
//     3=> "Array",
//     32=> 65 ,
//     2=> "DataType"];


//     // print Array index item......

//     print_r($textNumber);

//     echo "<br>";

//     echo "<h2>Array & foreach</h2>";

//     // foreach in PHP & new type of Array ................

//     $team = array(1=> "hello", "convo", "japan", "america", "UK");


//     print_r($team);

//     echo "<br>";
//     echo "<br>";

//     // printing foreach value

//     foreach ($team as $value) {

//         print_r(strtoupper($value) . "<br>" . "<br>");

//     }

//     echo "<br>";
//     // printing foreach value with index number;

//     foreach ($team as $index => $value) {

//         print_r($index . " = " . strtoupper($value) . "<br>" . "<br>");

//     }

// $fName = "Kamrul islam ";

// $lName = "Nayeem";

// $fullName = $fName . $lName;

// echo $fullName;

// $num1 = 12;

// $num2 = 32;

// $sum = $num1 + $num2 ;
// $sub = $num1 - $num2 ;
// $mul = $num1 * $num2 ;
// $div = $num1 / $num2 ;
// $modu = $num1 % $num2 ;

// echo $sum . "<br>";
// echo $sub . "<br>";
// echo $div . "<br>";
// echo $mul . "<br>";
// echo $modu . "<br>";


// function hello(){
//    $name = array(
//         "A" => [
//             "Name" => "Nayeem",
//             "Subject" => "bangla",
//             "Group" => "Day",
//             "CGPA" => "A+",
//         ],
//         "B" => [
//             "Name" => "Nayeem",
//             "Subject" => "bangla",
//             "Group" => "Day",
//             "CGPA" => "A+",
//         ],
//         "C" => [
//             "Name" => "Nayeem",
//             "Subject" => "bangla",
//             "Group" => "Day",
//             "CGPA" => "A+",
//         ],

//         );
//        foreach ($name as $key => $value) {
//         echo $key . " ";
//         foreach ($value as $value1) {
//             print_r($value1 . " ");
//         }
//         echo "<br>";
//        }

//        echo "<pre>";
//        print_r($name);
//        echo "</pre>";

//     }


// hello()

// echo "<h1>Class : 06 Assignment</h1>";


// echo "<h3>Printing Array Via print_r( )</h3>";


// $name = ["Name","250",true, false , null, 45.66];

// print_r($name);

// echo "<h3>printing Array Index</h3>";

// print_r($name[0] . "<br>");
// print_r($name[1] . "<br>");
// print_r($name[2] . "<br>");
// print_r($name[3] . "<br>");
// print_r($name[4] . "<br>");
// print_r($name[5] . "<br>");

// $a = [
//     "name" => "Kamrul Islam Nayeem",
//     "phoneNumber" => 1000000000,
//     "Address" => "Dhaka, Bangladesh",
//     "age" => 220,
// ];

// echo "<h3>Print Associative Array</h3>";

// print_r($a);

// echo "<h3>Print Associative Array Index  Value or Key</h3>";

// print_r($a["name"]. "<br>");
// print_r($a["phoneNumber"]. "<br>");
// print_r($a["Address"]. "<br>");
// print_r($a["age"]. "<br>" . "<br>");

// foreach ($a as $value) {
//     print_r($value . "<br>" . "<br>") ;
// }

// $student = [
//     "A" => [
//         "name" => "Nayeem",
//         "id" => "Unique",
//         "age" => "Same",
//     ],
//     "B" => [
//         "name" => "Rahman",
//         "id" => "Unique",
//         "age" => "Same",
//     ],
//     "C" => [
//         "name" => "sharukh",
//         "id" => "Unique",
//         "age" => "Same",
//     ],
// ];

// echo ("<h3>Print Multidimensional Array via foreach Loop</h3>");

// foreach ($student as $key => $value) {
//     echo $key . " ";
//     foreach ($value as $valuee) {
//         print_r($valuee . " ");
//     }
//     echo "<br>";
// }

// echo "<h3>print Range function 1 to 10</h3>";

// $num = range(1,20);

// print_r($num);

// echo "<h3>print Range function value via foreach Loop</h3>";

// foreach ($num as $key => $value) {
//     print_r($value . "<br>");
// }

// echo "<h3>print Range function value via for Loop</h3>";

// $len = count($num);

// for ($i=0; $i < $len; $i++) { 
//     echo $num[$i] . "<br>";
// }

// echo "<br>";

// print_r(count($num));

// echo "<br>";
// echo "<br>";

// // while loop...

// $a = 0;

// while ($a < $len) {
//     echo $num[$a] . "<br>";
//     $a++;
// } 

// echo "<br>";
// echo "<br>";

// $a = 0;

// do {
//     echo $num[$a] . "<br>";
//     $a++;
// } while ($a < $len);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator By PHP</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="https://cdn2.iconfinder.com/data/icons/ios7-inspired-mac-icon-set/512/Calculator_512.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<style>
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }
</style>

<body>

    <!-- <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto mt-5 py-5">
                <div class="card">
                    <div class="card-header bg-info fw-bold">
                        Calclulator
                    </div>
                    <div class="card-body">
                        <div class="card-title text-center">
                            <h1>Calculator By Using PHP</h1>
                        </div>
                        <form action="calculator.php" method="post">
                            <div class="mb-3">
                                <label class="form-label mb-2 fs-4 fw-bold">Number 1</label>
                                <input type="number" class="form-control" name="num_one">
                                <div id="emailHelp" class="form-text">Enter Your Number for Calculation.</div>
                            </div>
                            <div class="mb-3">
                                <label class="mb-2 fs-4 fw-bold">Number 2</label>
                                <input type="number" class="form-control" id="exampleInputPassword1" name="num_two">
                            </div>
                            <div class="container p-0 m-0 ">
                                <div class="row">
                                    <div class="col-md-3">
                                        <button type="submit" class="btn btn-primary" name="add_btn">Add <i class="fa-solid fa-plus ms-2"></i></button>
                                    </div>
                                    <div class="col-md-3 text-center">
                                        <button type="submit" class="btn btn-danger" name="sub_btn">Sub <i class="fa-solid fa-minus ms-2"></i></button>
                                    </div>
                                    <div class="col-md-3 text-center">
                                        <button type="submit" class="btn btn-info" name="multi_btn">Multi <i class="fa-solid fa-asterisk ms-2"></i></button>
                                    </div>
                                    <div class="col-md-3 text-end">
                                        <button type="submit" class="btn btn-success" name="Div_btn">Divi <i class="fa-solid fa-divide ms-2"></i></button>
                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto py-5">
                <div class="card">
                    <div class="card-header bg-danger fs-4 fw-bold">Calculator</div>
                    <div class="card-body">
                        <div class="card-title text-center">
                            <h1>Calculator By Using PHP</h1>
                        </div>
                        <form action="calculator.php" method="post">
                            <div class="mb-3">
                                <label class="form-label">Number 1</label>
                                <input type="number" class="form-control" placeholder="Enter Number 1" name="num_one">
                                <div class="form-text">Enter Number to Show Result in another Page</div>
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Number 2</label>
                                <input type="number" class="form-control" placeholder="Enter Number 2" name="num_two">
                            </div>
                            <button type="submit" name="add_btn" class="btn btn-dark">Add <i class="fa-solid fa-plus ms-2"></i></button>
                            <button type="submit" name="sub_btn" class="btn btn-danger">Sub <i class="fa-solid fa-minus ms-2"></i></button>
                            <button type="submit" name="multi_btn" class="btn btn-info">Multi <i class="fa-solid fa-asterisk ms-2"></i></button>
                            <button type="submit" name="div_btn" class="btn btn-success">Divi <i class="fa-solid fa-divide ms-2"></i></button>
                            <button type="submit" name="modu_btn" class="btn btn-primary">Modu <i class="fa-solid fa-percent ms-2"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto py-5">
                <div class="card">
                    <div class="card-header bg-primary fs-4 fw-bold text-white">Calculator</div>
                    <div class="card-body">
                        <div class="card-title text-center">
                            <h2>Calculator by Using PHP</h2>
                        </div>
                        <form action="calculator.php" method="post">
                            <div class="mb-3">
                                <label class="form-label">
                                    <h5>Number 1</h5>
                                </label>
                                <input type="number" class="form-control" name="num_one" placeholder="Enter Number 1">
                                <div class="form-text">Enter Your Number To Calculate Number 1 & Number 2.</div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">
                                    <h5>Number 2</h5>
                                </label>
                                <input type="number" class="form-control" name="num_two" placeholder="Enter Number 2">
                            </div>
                            <button type="submit" name="add_btn" class="btn btn-primary">Add <i class="fa-solid fa-plus ms-2"></i></button>
                            <button type="submit" name="sub_btn" class="btn btn-danger">Sub <i class="fa-solid fa-minus ms-2"></i></button>
                            <button type="submit" name="multi_btn" class="btn btn-info">Multi <i class="fa-solid fa-asterisk ms-2"></i></button>
                            <button type="submit" name="divi_btn" class="btn btn-success">Div <i class="fa-solid fa-divide ms-2"></i></button>
                            <button type="submit" name="modu_btn" class="btn btn-dark">Modu <i class="fa-solid fa-percent ms-2"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- <div class="container calc">
        <div class="row">
            <div class="col-lg-3 m-auto py-5 fs-5 fw-bold ">
              <div class="card pb-2">
                <div class="card-header bg-info text-white ">
                    Calculator
                </div>
                <div class="card-body p-0 m-0">
                    <input type="number" name="num" class="mainInput w-100 py-2 mb-2 ">
                    <input type="submit" name="num" class="num" value ="7">
                    <input type="submit" name="num" class="num" value ="8">
                    <input type="submit" name="num" class="num" value ="9">
                    <input type="submit" name="op"class="op" value ="+">
                    <br>
                    <input type="submit" name="num" class="num" value ="4">
                    <input type="submit" name="num" class="num" value ="5">
                    <input type="submit" name="num" class="num" value ="6">
                    <input type="submit" name="op" class="op" value ="-">
                    <br>
                    <input type="submit" name="num" class="num" value ="1">
                    <input type="submit" name="num" class="num" value ="2">
                    <input type="submit" name="num" class="num" value ="3">
                    <input type="submit" name="num" class="op" value ="*">
                    <br>
                    <input type="submit" name="clear" class="clear" value ="C">
                    <input type="submit" name="num" class="num" value ="0">
                    <input type="submit" name="equal" class="equal" value ="=">
                    <input type="submit" name="op" class="op" value ="/">
                </div>
              </div>
            </div>
        </div>
    </div> -->

    <!-- <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto py-5">
                <div class="card">
                    <div class="card-header bg-primary fs-4 fw-bold text-white">Calculator</div>
                    <div class="card-body">
                        <div class="card-title text-center">
                            <h4>Calculate Number By Using PHP</h4>
                        </div>
                        <form action="calculator.php" method="post">
                            <div class="mb-3">
                                <label class="form-label fw-bold">Number 1</label>
                                <input type="number" class="form-control" name="num_one">
                                <div id="emailHelp" class="form-text" >Enter Number For Calculation</div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold">Number 2</label>
                                <input type="number" class="form-control" name="num_two">
                            </div>
                            <button type="submit" name="add_btn" class="btn btn-primary">Add <i class="fa fa-plus ms-2" aria-hidden="true"></i></button>
                            <button type="submit" name="sub_btn" class="btn btn-danger">Sub <i class="fa fa-minus ms-2" aria-hidden="true"></i></button>
                            <button type="submit" name="multi_btn" class="btn btn-info">Multi <i class="fa fa-asterisk ms-2" aria-hidden="true"></i></button>
                            <button type="submit" name="div_btn" class="btn btn-dark">Divi <i class="fa fa-divide ms-2" aria-hidden="true"></i></button>
                            <button type="submit" name="modu_btn" class="btn btn-success">Modu <i class="fa-solid fa-percent"></i></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> -->



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>