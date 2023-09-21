<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<style>
    /* Chrome, Safari, Edge, Opera */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    /* Firefox */
    input[type=number] {
        -moz-appearance: textfield;
    }
</style>

<body class="bg-warning">


    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto py-5">
                <div class="card bg-dark">
                    <div class="card-header bg-info fs-4 fw-bold">Calculator</div>
                    <div class="card-body">
                        <form method="post">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Number 1</label>
                                <input type="number" class="form-control" name="one">
                                <div id="emailHelp" class="form-text">Enter Numbers for Calculate</div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Number 2</label>
                                <input type="number" class="form-control" name="two">
                            </div>
                            <button type="submit" name="add_btn" class="btn btn-primary">Add</button>
                            <button type="submit" name="sub_btn" class="btn btn-primary">Sub</button>
                            <button type="submit" name="div_btn" class="btn btn-primary">Divi</button>
                            <button type="submit" name="multi_btn" class="btn btn-primary">Multi</button>
                            <button type="submit" name="modu_btn" class="btn btn-primary">Modu</button>
                        </form>
 
                        <?php if (isset($_POST["one"]) && isset($_POST["two"])) { ?>

                        <div class="alert alert-danger mt-4">
                            <?php

                                if ($_POST["one"]) {
                                    if ($_POST["two"]) {
                                        if (isset($_POST["add_btn"])) {
                                            echo "Addition is : " . $_POST["one"] +  $_POST["two"];
                                        }
                                        if (isset($_POST["sub_btn"])) {
                                            echo "Subtraction is : " . $_POST["one"] -  $_POST["two"];
                                        }
                                        if (isset($_POST["div_btn"])) {
                                            echo "Divide is : " . $_POST["one"] / $_POST["two"];
                                        }
                                        if (isset($_POST["multi_btn"])) {
                                            echo "Multiplication is : " . $_POST["one"] * $_POST["two"];
                                        }
                                        if (isset($_POST["modu_btn"])) {
                                            echo "Modulus is : " . $_POST["one"] % $_POST["two"];
                                        }
                                    } else {
                                        echo "Plz Enter Number 2";
                                    }
                                } else {
                                    echo "Plz Enter Number 1";
                                }
                            
                            ?>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    
    <form method="post">
        
        <!-- input label 1 -->

        <label for="">Number 1</label>
        <input type="number" name="one" id="">
        <br>
        <br>
        <!-- input label 1 -->


         <!-- input label 2 -->

         <label for="">Number 2</label>
        <input type="number" name="two" id="">
        <br>
        <br>
        <!-- input label 2 -->


        <!-- input submit-->
        
        <input type="submit" value="Add">

        <!-- input submit -->
        
    </form>

</body>
</html>

<?php

$one = ($_POST["one"]);
$two = ($_POST["two"]);

echo $one + $two;

?>

