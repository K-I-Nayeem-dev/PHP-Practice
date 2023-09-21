<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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

</head>

<body>

    <!-- action="calculator_one_post.php" -->

    <div class="container">
        <div class="row">
            <div class="col-lg-6  mx-auto py-5">
                <div class="card ">
                    <div class="card-header fs-5 ">One Page Calculator</div>
                    <div class="card-body ">
                        <form method="post">
                            <div class="mb-3">
                                <label class="form-label">Number One</label>
                                <input type="number" class="form-control" name="one">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Number Two</label>
                                <input type="number" class="form-control" name="two">
                            </div>
                            <button type="submit" name="add_btn" class="btn btn-primary">Add<i class="fa-solid fa-plus ms-2"></i></button>
                            <button type="submit" name="sub_btn" class="btn btn-primary">Sub<i class="fa-solid fa-minus ms-2"></i></button>
                            <button type="submit" name="multi_btn" class="btn btn-primary">Multi<i class="fa-solid fa-asterisk ms-2"></i></button>
                            <button type="submit" name="modu_btn" class="btn btn-primary">Modu<i class="fa-solid fa-percent ms-2"></i></button>
                            <button type="submit" name="divi_btn" class="btn btn-primary">Divi<i class="fa-solid fa-divide ms-2"></i></button>
                        </form>
                        <?php if (isset($_POST["one"]) && isset($_POST["two"])) : ?>
                            <?php if ($_POST["one"]) { ?>
                                <div class="alert alert-danger mt-3">
                                    <?php if ($_POST["two"]) {
                                        if ($_POST["two"]) {
                                            if (isset($_POST["add_btn"])) {
                                                echo "Addition is : " . $_POST["one"] + $_POST["two"];
                                            }
                                            if (isset($_POST["sub_btn"])) {
                                                echo "Subtraction is : " . $_POST["one"] - $_POST["two"];
                                            }
                                            if (isset($_POST["multi_btn"])) {
                                                echo "Multiplication is : " . $_POST["one"] * $_POST["two"];
                                            }
                                            if (isset($_POST["divi_btn"])) {
                                                echo "Divide is : " . $_POST["one"] / $_POST["two"];
                                            }
                                            if (isset($_POST["modu_btn"])) {
                                                echo "Modulus is : " . $_POST["one"] % $_POST["two"];
                                            }
                                        }
                                    ?>
                                    <?php } else {
                                        echo "Number 2 Nai !!!";
                                    }
                                    ?>
                                </div>
                            <?php } else {
                            ?>
                                <div class="alert alert-danger mt-3">
                                    <?= "Number 1 Nai"; ?>
                                </div>
                        <?php }
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>