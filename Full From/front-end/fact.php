<?php 

require_once('../components/header.php');

require_once('../front-end/db_connect.php')

?>


<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-xl-6">
            <div class="card widget widget-stats">

                <div class="card-header">Add a New Fact</div>
                <div class="card-body">
                    <form action="fact_post.php" method="post">
                        <div class="mb-3">
                            <input type="number" class="form-control mt-3" placeholder="Fact Head" name="fact_head">
                            <input type="text" class="form-control mt-3" placeholder="Fact Details" name="fact_details">
                            <input type="text" class="form-control mt-3" placeholder="Fact Icon" name="fact_icon" value="<?php
                            
                            if(isset($_SESSION['icons_name'])){
                                echo $_SESSION['icons_name'];
                            }

                            unset($_SESSION['icons_name']);
                            ?>">
                            <select class="form-control mt-3" name="fact_status">
                                <option value="active">Active</option>
                                <option value="deactive">Deactive</option>
                            </select>
                        </div>
                        <button type="submit" name="fact_btn" class="btn btn-primary">Add Fact</button>
                    </form>
                </div>
            </div>
        
        </div>

        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">Font Awesome Icon</div>
                <div class="card-body">

                    <?php 
                    
                    $data = file_get_contents('../front-end/font-awesome-v5.0.1.json');

                    $json = json_decode($data, true);
                    
                    $json_array = $json['icons'];

                    ?>

                    <form action="fact_post.php" method="post"> 
                        
                        <?php  foreach( $json_array as $key => $j_data) : ?>

                            <a class="btn btn-burger  m-3 text-decoration-none text-dark" href="view_portfolios_post.php?id=<?=++$key?>"><i class="<?=$j_data?> fa-4x text-center"></i></a>
                        
                             <!-- <button class=" border-0 m-4" type="submit" name="icon_btn"><i class=" fa-3x text-center"></i></button> -->
                        
                        <?php endforeach; ?>

                    </form>
                    
                </div>
            </div>
        </div>

    </div>
</div>




<?php require_once('../components/footer.php'); ?>
