<?php require_once('../components/header.php'); ?>

<div class="container">
    <div class="row">
        <div class="col-xl-6">
            <div class="card widget widget-stats">

                <div class="card-header">Add a New Services</div>
                <div class="card-body">
                    <form action="add_services_post.php" method="post">
                        <div class="mb-3">
                            <input type="text" class="form-control mt-3" placeholder="Services Name" name="service_name">
                            <textarea class="form-control mt-3" placeholder="Type Description..." name="services_description" id="" cols="30" rows="10"></textarea>
                            <input type="text" class="form-control mt-3" placeholder="Service Icon" name="service_icon">
                            <select class="form-control mt-3" name="service_status">
                                <option value="active">Active</option>
                                <option value="deactive">Deactive</option>
                            </select>
                        </div>
                        <button type="submit" name="add_services_btn" class="btn btn-primary">Add Services</button>
                        <a href="https://fontawesome.com/v4/icons/" target="_blank" class="btn btn-success">icons</a>
                    </form>
                </div>
            </div>
        
        </div>

        <div class="col-xl-6">
            <div class="card widget widget-stats">

                <div class="card-header">Edit a Services</div>
                <div class="card-body">
                    <form action="view_&_edit_services_post.php" method="post">
                        <div class="mb-3">
                            <input type="number" class="form-control mt-3" placeholder="Service Id" name="service_id">

                            <?php if (isset($_SESSION['service_id'])) : ?>

                                <div class="alert alert-danger mt-3">

                                    <?= $_SESSION['service_id']; 
                                    
                                        unset($_SESSION['service_id']);
                                    ?>
                                </div>

                            <?php endif; ?>



                            <input type="text" class="form-control mt-3" placeholder="Edit Services Name" name="edit_service_name">

                            <?php if (isset($_SESSION['edit_service_name_err'])) : ?>

                                <div class="alert alert-danger mt-3">

                                    <?= $_SESSION['edit_service_name_err']; 
                                    
                                        unset($_SESSION['edit_service_name_err']);
                                    ?>
                                </div>

                            <?php endif; ?>

                            <textarea class="form-control mt-3" placeholder="Edit Type Description..." name="edit_services_description" id="" cols="30" rows="10"></textarea>

                            <?php if (isset($_SESSION['edit_services_description'])) : ?>

                                <div class="alert alert-danger mt-3">

                                    <?= $_SESSION['edit_services_description']; 
                                    
                                        unset($_SESSION['edit_services_description']);
                                    ?>
                                </div>

                            <?php endif; ?>
                            <input type="text" class="form-control mt-3" placeholder="Edit Service Icon" name="edit_service_icon">

                            <?php if (isset($_SESSION['edit_service_icon'])) : ?>

                                <div class="alert alert-danger mt-3">

                                    <?= $_SESSION['edit_service_icon']; 
                                    
                                        unset($_SESSION['edit_service_icon']);
                                    ?>
                                </div>

                            <?php endif; ?>

                            <select class="form-control mt-3" name="edit_service_status">
                                <option value="active">Active</option>
                                <option value="deactive">Deactive</option>
                            </select>
                        </div>
                        <button type="submit" name="edit_services_btn" class="btn btn-primary">Edit Services</button>
                        <a href="https://fontawesome.com/v4/icons/" target="_blank" class="btn btn-success">icons</a>
                    </form>
                </div>
            </div>
        
        </div>
    </div>
</div>


<?php require_once('../components/footer.php'); ?>
