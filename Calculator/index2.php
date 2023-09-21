<?php

require_once("include/header.php");

?>



<div class="container">
    <div class="row">
        <div class="col-lg-6 m-auto py-5">
            <div class="card bg-warning">
                <div class="card-header bg-dark fs-4 text-warning fw-bold border-0">Calculator</div>
                <div class="card-body">
                    <form method="post">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Number 1</label>
                            <input type="number" class="form-control" name="one">
                            <div id="emailHelp" class="form-text text-danger">Enter Number for Calculate</div>
                        </div>
                        <div class="mb-4">
                            <label for="exampleInputEmail1" class="form-label">Number 2</label>
                            <input type="number" class="form-control" name="two">
                        </div>
                        <button type="submit" name="add_btn" class="btn btn-info px-3 ms-1">Add <i class="fa-solid fa-plus ms-3"></i></button>
                        <button type="submit" name="sub_btn" class="btn btn-danger px-3 ms-3">Sub <i class="fa-solid fa-minus ms-3"></i></button>
                        <button type="submit" name="modu_btn" class="btn btn-dark px-3 ms-3">Modu <i class="fa-solid fa-percent ms-3"></i></button>
                        <button type="submit" name="multi_btn" class="btn btn-light px-3 ms-3">Multi <i class="fa-solid fa-asterisk ms-3"></i></button>
                        <button type="submit" name="div_btn" class="btn btn-primary px-3 ms-3">Divi <i class="fa-solid fa-divide ms-3"></i></button>
                    </form>
                    <?php if (isset($_POST['one']) && isset($_POST['two'])) { ?>
                        <?php
                        if ($_POST["one"]) {
                            if ($_POST["two"]) {
                        ?>
                                <div class="alert alert-primary fw-bold mt-3">
                                    <?php
                                    if (isset($_POST['add_btn'])) {
                                        echo "Result is : " . $_POST['one'] + $_POST['two'];
                                    }
                                    if (isset($_POST['sub_btn'])) {
                                        echo "Result is : " . $_POST['one'] - $_POST['two'];
                                    }
                                    if (isset($_POST['modu_btn'])) {
                                        echo "Result is : " . $_POST['one'] % $_POST['two'];
                                    }
                                    if (isset($_POST['multi_btn'])) {
                                        echo "Result is : " . $_POST['one'] * $_POST['two'];
                                    }
                                    if (isset($_POST['div_btn'])) {
                                        echo "Result is : " . $_POST['one'] / $_POST['two'];
                                    }
                                    ?>
                                </div>
                                <?php } else { ?>
                                <div class="alert alert-danger mt-3">
                                    Plz Enter Number 2
                                </div>
                            <?php } ?>

                        <?php } else { ?>
                            <div class="alert alert-info mt-3">
                                Plz Enter Number 1
                            <?php   } ?>
                            </div>
                        <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php

require_once("include/footer.php");

?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>