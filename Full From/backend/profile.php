<?php require_once('../components/header.php'); ?>

<div class="container">
    <div class="row">
        <div class="col-xl-6">
            <div class="card widget widget-stats">

                <div class="card-header">Name Change</div>
                <div class="card-body">
                    <form action="profile_post.php" method="post">
                        <div class="mb-3">
                            <input type="text" class="form-control" name="name_change" required value="<?= $_SESSION['s_name'];?>">

                        </div>
                        <button type="submit" name="name_change_btn" class="btn btn-primary">Name Change</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="card widget widget-stats">

                <div class="card-header">Email Change</div>
                <div class="card-body">
                    <form action="profile_post.php" method="post">
                        <div class="mb-3">
                            <input type="text" class="form-control" name="email_change" required value="<?= $_SESSION['s_email'];?>">

                        </div>
                        <button type="submit" name="email_change_btn" class="btn btn-primary">Email Change</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-xl-6">
            <div class="card widget widget-stats">

                <div class="card-header">Profile Picture Change</div>
                <div class="card-body">
                    <form action="profile_post.php" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <img class="mb-3 rounded-3" src="../backend/uploads/profile_pictures/<?=$profile_picture;?>" alt="" width="300" height="200">
                            <input type="file" class="form-control" name="photo_change">
                        </div>
                        <button type="submit" name="photo_change_btn" class="btn btn-primary">Photo Changed</button>
                    </form>
                </div>
            </div>
        
        </div>

        <div class="col-xl-6">
            <div class="card widget widget-stats">

                <div class="card-header mb-3">Password Change</div>
                <div class="card-body">
                    <form action="profile_post.php" method="post" >
                        <div class="mb-3">
                            <input type="password" class="form-control mb-5" placeholder="Old Password" name="old_password">
                            <input type="password" class="form-control mb-5" placeholder="New Password" name="new_password">
                            <input type="password" class="form-control mb-5" placeholder="Confirm Old Password" name="confirm_new_password">
                        </div>
                        <button type="submit" name="password_change_btn" class="btn btn-primary">Password Changed</button>
                    </form>
                </div>
            </div>
        
        </div>


    </div>



    <?php require_once('../components/footer.php'); ?>