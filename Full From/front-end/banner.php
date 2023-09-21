<?php require_once('../components/header.php'); ?>

<div class="container">
    <div class="row">

    <?php
    
    // $email = $_SESSION['s_email'];

    // $banner_img = "SELECT banner_img FROM banner_items , users WHERE users.Email = '$email'";

    // $banner_query = mysqli_query($db_connect, $banner_img);

    // $banner_assoc = mysqli_fetch_assoc($banner_query)['banner_img'];

    // $_SESSION['banner_photo'] = $banner_assoc;

    
    ?>


        <div class="col-xl-6">
            <div class="card widget widget-stats">

            
                        <?php 
                        
                            $id =  $_SESSION['s_id'];

                            $profile_pic = "SELECT banner_img FROM users WHERE ID = '$id'";

                            $profile_query = mysqli_query($db_connect, $profile_pic);

                            $profile_assoc = mysqli_fetch_assoc($profile_query)['banner_img'];

                        
                        ?>

                <div class="card-header">Add a New Banner Pic</div>
                <div class="card-body">
                    <form action="banner_post.php" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <img src="../front-end/img/banner/<?=$profile_assoc?>" alt="" width="400" height="600">
                            <input type="file"  class="form-control mt-3" placeholder="Services Name" name="banner_img" >
                        </div>
                        <button type="submit" name="img_btn" class="btn btn-primary">Img Change</button>
                    </form>
                </div>
            </div>
        
        </div>


    </div>
</div>



<?php require_once('../components/footer.php'); ?>

