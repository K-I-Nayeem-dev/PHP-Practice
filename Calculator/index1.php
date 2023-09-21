<?php require_once("include/header.php") ?>

<div class="container">
    <div class="row">
        <div class="col-lg-5 m-auto py-5">
            <div class="card">
                <div class="card-header fs-5 fw-bold bg-warning">Calculator</div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Number 1</label>
                            <input type="number" class="form-control" name="one">
                            <div id="emailHelp" class="form-text">Enter Your Numbers for Calculate</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Number 2</label>
                            <input type="number" class="form-control" name="two">
                        </div>
                        <button type="submit" name="add_btn" class="btn btn-primary">Add</button>
                        <button type="submit" name="sub_btn" class="btn btn-primary">Sub</button>
                        <button type="submit" name="modu_btn" class="btn btn-primary">Modu</button>
                        <button type="submit" name="multi_btn" class="btn btn-primary">Multi</button>
                        <button type="submit" name="div_btn" class="btn btn-primary">Divi</button>


                    </form>

                    <?php if (isset($_POST['one']) && isset($_POST['two'])) : ?>
                        <div class="alert alert-danger mt-3">
                            <?php
                            $one = $_POST['one'];
                            $two = $_POST['two'];


                            if ($one) {
                                if ($two) {
                                    if (isset($_POST["add_btn"])) {
                                        echo "Your Result is : " . $one + $two;
                                    }
                                    if (isset($_POST["sub_btn"])) {
                                        echo "Your Result is : " . $one - $two;
                                    }
                                    if (isset($_POST["modu_btn"])) {
                                        echo "Your Result is : " . $one % $two;
                                    }
                                    if (isset($_POST["multi_btn"])) {
                                        echo "Your Result is : " . $one * $two;
                                    }
                                    if (isset($_POST["div_btn"])) {
                                        echo "Your Result is : " . $one / $two;
                                    }
                                } else {
                                    echo "Plz Enter Number 2";
                                }
                            } else {
                                echo "Plz Enter Number 1 ";
                            }

                            ?>
                        </div>
                    <?php endif;  ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once("include/footer.php") ?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>