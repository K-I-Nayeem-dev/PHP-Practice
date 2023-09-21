<?php require_once('../components/header.php') ?>

<div class="container">
    <div class="row">
        <div class="col-lg-6">

            <div class="card">
                <div class="card-header"> Name change  </div>
                <div class="card-body">
                    <form  action="../back-end/profile_post.php" method="post">
                        <input class="form-control" type="text" name="name" value="<?php
                    
                        if(isset($_SESSION['s_name'])){
                            echo $_SESSION['s_name'];
                        }

                        ?>">

                        <?php if(isset($_SESSION['name_err'])) : ?>

                        <div class="alert alert-danger mt-3"> 

                            <?php echo $_SESSION['name_err']; unset($_SESSION['name_err'])?>

                        </div>

                        <?php endif; ?>

                        <button class="btn btn-primary mt-3" name="name_change">Name Change</button>
                    </form>
                </div>
            </div>

        </div>
        <div class="col-lg-6">

            <div class="card">
                <div class="card-header"> Email change  </div>
                <div class="card-body">
                    <form  action="../back-end/profile_post.php" method="post">
                        <input class="form-control" type="email" name="email" value="<?php
                    
                        if(isset($_SESSION['s_email'])){
                            echo $_SESSION['s_email'];
                        }

                        ?>">

                        <?php if(isset($_SESSION['email_err'])) : ?>

                        <div class="alert alert-danger mt-3"> 

                            <?php echo $_SESSION['email_err']; unset($_SESSION['email_err'])?>

                        </div>

                        <?php endif; ?>

                        <button class="btn btn-primary mt-3" name="email_change">Email Change</button>
                    </form>
                </div>
            </div>

        </div>
        <div class="col-lg-6">

            <div class="card">
                <div class="card-header"> Photo change  </div>
                <div class="card-body">
                    <form  action="../back-end/profile_post.php" method="post" enctype="multipart/form-data">

                        <?php

                            $id =  $_SESSION['s_id'];

                            $profile_picture = "SELECT profile_picture FROM users WHERE ID = $id";

                            $profile_picture_query = mysqli_query($db_connect, $profile_picture);

                            $profile_assoc = mysqli_fetch_assoc($profile_picture_query)['profile_picture'];
                        
                        ?>

                        <img class="ms-4 mb-3" src="../components/uploads/Profile Photos/<?=$profile_assoc?>" width="400" height="400" alt="">
                        
                        <input class="form-control" type="file" name="photo" >

                        <?php if(isset($_SESSION['photo_error'])) : ?>

                            <div class="alert alert-danger mt-3"> 

                                <?php echo $_SESSION['photo_error']; unset($_SESSION['photo_error'])?>

                            </div>

                        <?php endif; ?>

                        <button class="btn btn-primary mt-3" name="photo_change">Photo Change</button>
                    </form>
                </div>
            </div>

        </div>
        <div class="col-lg-6">

            <div class="card">
                <div class="card-header"> Password change  </div>
                <div class="card-body">

                    <form  action="../back-end/profile_post.php" method="post" >
                        
                        <label class=" fw-bold" for="old_pass">Old Password</label>
                        <input class="form-control mt-3" type="password" name="old_password" placeholder="Old Password" >

                        <?php if(isset($_SESSION['pass_err'])) : ?>

                        <div class="alert alert-danger mt-3"> 

                            <?php echo $_SESSION['pass_err']; unset($_SESSION['pass_err'])?>

                        </div>

                        <?php endif; ?>

                        
                        <label class=" mt-3 fw-bold" for="new_pass">New Password</label>
                        <input class="form-control mt-3" type="password" name="new_password" placeholder="New Password" >

                        <?php if(isset($_SESSION['new_pass_err'])) : ?>

                        <div class="alert alert-danger mt-3"> 

                            <?php echo $_SESSION['new_pass_err']; unset($_SESSION['new_pass_err'])?>

                        </div>

                        <?php endif; ?>
                        
                        <label class=" mt-3 fw-bold" for="confirm_new_pass">Confirm New Password</label>
                        <input class="form-control mt-3" type="password" name="confirm_new_password" placeholder="Confirm New Password" >

                        <?php if(isset($_SESSION['new_confirm_pass_err'])) : ?>

                        <div class="alert alert-danger mt-3"> 

                            <?php echo $_SESSION['new_confirm_pass_err']; unset($_SESSION['new_confirm_pass_err'])?>

                        </div>

                        <?php endif; ?>

                        <?php if(isset($_SESSION['pass_match_err'])) : ?>

                        <div class="alert alert-danger mt-3"> 

                            <?php echo $_SESSION['pass_match_err']; unset($_SESSION['pass_match_err'])?>

                        </div>

                        <?php endif; ?>
                        <?php if(isset($_SESSION['success_msg'])) : ?>

                        <div class="alert alert-success mt-3"> 

                            <?php echo $_SESSION['success_msg']; unset($_SESSION['success_msg'])?>

                        </div>

                        <?php endif; ?>

                        <button class="btn btn-primary mt-3" name="password_change">Password Change</button>

                    </form>

                </div>
            </div>

        </div>
    </div>
</div>


<?php require_once('../components/footer.php') ?>