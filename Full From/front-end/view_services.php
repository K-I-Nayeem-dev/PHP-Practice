<?php require_once('../components/header.php');

$id = $_SESSION['s_id'];

$services = "SELECT * FROM users, services WHERE users.ID = '$id'";

$services_query = mysqli_query($db_connect, $services);



?>



<div class="container">
    <div class="row">
    <div class="col">
            <div class="card widget widget-stats">

                <div class="card-header">View Services</div>
                <div class="card-body">
                    <form action="view_services_post.php" method="post">
                        <table class="table d-flex align-items-center  table-striped">
                            <tr>
                                <th>Service ID</th>
                                <th>Service Name</th>
                                <th>Service Description</th>
                                <th>Service Icon</th>
                                <th>Service Status</th>
                                <th>Edit</th>
                            </tr>

                        <?php foreach($services_query as $key => $services) : ?>

                        <div class="mb-3">

                            <tr>

                                
                                <td><?=$services['ID']?></td>
                                
                                <td><?=$services['service_name'] ?></td>
                                
                                <td><?=$services['services_description'] ?></td>
                                
                                <td><?=$services['service_icon'] ?></td>
                                
                                <td><?=$services['service_status'] ?></td>

                                <td><a href="add_services.php" class="btn btn-danger"><i class="material-icons d-inline">edit</i>Edit</a></td>
                                
                            </tr>

                        </div>

                        <?php endforeach; ?>

                    </table>

                    <?php 


                    //   $_SESSION["services_session_id"] = $select_final['ID'];
                        
                    //   $_SESSION["services_session_icon"] = $select_final['service_icon'];
                      
                    //   $_SESSION["services_session_name"] = $select_final['service_name'];
                      
                    //   $_SESSION["services_session_description"] = $select_final['services_description'];
                      
                    //   $_SESSION["services_session_status"] = $select_final['service_status'];

                    //   print_r($_SESSION["services_session_id"]);


                    ?>
                    </form>

                </div>
            </div>
        
        </div>
    </div>
</div>





<?php require_once('../components/footer.php'); ?>
