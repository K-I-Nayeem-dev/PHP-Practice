<?php 

require_once '../components/header.php';

require_once('../components/db_connect.php');

$id = $_GET['id'];

$services_select = "SELECT * FROM services WHERE ID = $id";

$services_query = mysqli_query($db_connect, $services_select);

$services_assoc = mysqli_fetch_assoc($services_query);

$_SESSION['get_id'] = $id;


?>



<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">Edit Services</div>
                <div class="card-body">

                    <form action="../back-end/edit_services_post.php" method="post">

                        <label for="service_header">Service Header</label>
                        <input class="form-control mt-3" type="text" name="service_header" placeholder="Service Header" value="<?=$services_assoc['service_header']?>">

                        <label class=" mt-3" for="service_description">Service Description</label>
                        <input class="form-control mt-3" type="text" name="service_description" placeholder="Service Description" value="<?=$services_assoc['service_description']?>">

                        <label class=" mt-3" for="service_icon">Service icon</label>
                        <input class="form-control mt-3" type="text" name="service_icon" placeholder="Service Header" value="<?=$services_assoc['service_icon']?>">

                        <select class=" form-control mt-3" name="status" id="">
                            <option value="active">Active</option>
                            <option value="deactive">Deactive</option>
                        </select>

                        <button class="btn btn-primary mt-3">Edit Services</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?php require_once '../components/footer.php' ?>