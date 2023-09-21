<?php require_once '../components/header.php' ?>

<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-lg-6">

            <div class="card">
                <div class="card-header"> Add Services </div>
                <div class="card-body">
                    <form action="../back-end/add_services_post.php" method="post">

                        <label for="service_header">Service Header</label>
                        <input class="form-control mt-3" type="text" name="service_header" placeholder="Service Header">

                        <?php if(isset($_SESSION['service_header_err'])) : ?>

                        <div class="alert alert-danger mt-3"> 

                            <?php
                            echo $_SESSION['service_header_err'];
                            unset($_SESSION['service_header_err']);
                            ?>

                        </div>

                        <?php endif; ?>

                        <label for="service_header" class=" mt-3">Service Description</label>
                        <input class="form-control mt-3" type="text" name="service_description" placeholder="Service Description">

                        <?php if(isset($_SESSION['service_description_err'])) : ?>

                        <div class="alert alert-danger mt-3"> 

                            <?php
                             echo $_SESSION['service_description_err'];
                             unset($_SESSION['service_description_err']);
                            ?>

                        </div>

                        <?php endif; ?>


                        <label for="service_header" class=" mt-3">Service Icon</label>
                        <input class="form-control mt-3" type="text" name="service_icon" placeholder="Service Icon">


                        <?php if(isset($_SESSION['service_icon_err'])) : ?>
 
                        <div class="alert alert-danger mt-3"> 

                            <?php
                                echo $_SESSION['service_icon_err'];

                                unset($_SESSION['service_icon_err']);
                            ?>

                        </div>

                        <?php endif; ?>

                        <select name="status" id="" class="form-control mt-3">
                            <option value="active">Active</option>
                            <option value="deactive">Deactive</option>
                        </select>

                        <button class="btn btn-primary mt-3">Add Services</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>


<?php require_once '../components/footer.php' ?>