<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto py-5">
                <div class="card">
                    <div class="card-header bg-danger fs-5">One Page Calculator</div>
                    <div class="card-body">
                        <form method="post">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Number One</label>
                                <input type="Number" class="form-control" name="one">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Number Two</label>
                                <input type="Number" class="form-control" name="two">
                            </div>

                            <button type="submit" name="add_btn" class="btn btn-primary">Add + </button>
                            <button type="submit" name="sub_btn" class="btn btn-primary">Sub - </button>
                            <button type="submit" name="multi_btn" class="btn btn-primary">Multi * </button>
                            <button type="submit" name="div_btn" class="btn btn-primary">Divi /</button>
                            <button type="submit" name="modu_btn" class="btn btn-primary">Modu % </button>
                        </form>

                        <?php if (isset($_POST["one"]) && isset($_POST["two"])) : ?>

                            <?php

                            if ($_POST["one"]) {
                                if ($_POST["two"]) {
                            ?>
                                    <?php if (isset($_POST["add_btn"])) { ?>
                                        <div class="alert alert-info mt-3">
                                            <?= "Addition is : " .  $_POST["one"] + $_POST["two"]; ?>
                                        </div>
                                    <?php }
                                    if (isset($_POST["sub_btn"])) {
                                    ?>
                                        <div class="alert alert-danger mt-3">
                                            <?= "Subtraction is : " . $_POST["one"] - $_POST["two"]; ?>
                                        </div>

                                    <?php }
                                    if (isset($_POST["multi_btn"])) {
                                    ?>
                                        <div class="alert alert-success mt-3">
                                            <?= "Multiplication is : " . $_POST["one"] * $_POST["two"] ?>
                                        </div>
                                    <?php }
                                    if (isset($_POST["div_btn"])) {
                                    ?>
                                        <div class="alert alert-dark mt-3">
                                            <?= "Divide is : " . $_POST["one"] / $_POST["two"]; ?>
                                        </div>
                                    <?php }
                                    if (isset($_POST["modu_btn"])) {
                                    ?>
                                        <div class="alert alert-warning mt-3">
                                            <?= "Modulus is : " . $_POST["one"] % $_POST["two"] ?>
                                        </div>
                                    <?php }
                                } else {
                                    ?>
                                    <div class="alert alert-secondary mt-3">
                                        <?= "Number Two Missing !!! "; ?>
                                    </div>
                                <?php }
                            } else {
                                ?>

                                <div class="alert alert-primary mt-3">
                                    <?= "Number One Missing !!!" ?>
                                </div>

                            <?php } ?>

                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>