<?php

require_once '../components/header.php';

$select_service = "SELECT * FROM services WHERE status = 'active'";

$select_query = mysqli_query($db_connect, $select_service);

?>

<div class="contaner">
    <div class="row">

        <div class="col-lg-12">

            <div class="card">
                <div class="card-header"> Photo change </div>
                <div class="card-body">
                    <form action="../back-end/view_services_post.php" method="post">

                    <?php if(isset($_SESSION['update_successfull_msg'])) : ?>
                        
                        <div class="row d-flex justify-content-center">
                            
                        <div class="alert alert-success mt-3 col-lg-6 text-center "> 

                                <?php echo $_SESSION['update_successfull_msg'];
                                unset($_SESSION['update_successfull_msg']);
                                ?>

                            </div>
                        </div>

                        <?php endif; ?>
                        <?php if(isset($_SESSION['services_dlt'])) : ?>
                        
                        <div class="row d-flex justify-content-center">
                            
                        <div class="alert alert-danger mt-3 col-lg-6 text-center "> 

                                <?php echo $_SESSION['services_dlt'];
                                unset($_SESSION['services_dlt']);
                                ?>

                            </div>
                        </div>

                        <?php endif; ?>

                        <table class="table table-bordered border-primary">
                            <tr>
                                <th>ID</th>
                                <th>Service Header</th>
                                <th>Service Description</th>
                                <th>Service icon</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            <?php foreach ($select_query as $select) : ?>

                                <tr>

                                    <td><?= $select['ID'] ?></td>
                                    <td><?= $select['service_header'] ?></td>
                                    <td><?= $select['service_description'] ?></td>
                                    <td><?= $select['service_icon'] ?></td>
                                    <td><?= $select['status'] ?></td>
                                    <td class=" d-flex">
                                        <a class="btn btn-into me-3" href="../back-end/edit_services.php?id=<?= $select['ID'] ?>">Edit</a>
                                        <a class="btn btn-danger" href="../back-end/services_delete.php?id=<?= $select['ID'] ?>">Delete</a>
                                    </td>

                                </tr>

                            <?php endforeach; ?>


                        </table>

                    </form>
                </div>
            </div>

        </div>
    </div>
</div>


<?php require_once '../components/footer.php' ?>