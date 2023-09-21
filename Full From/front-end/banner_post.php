<?php

session_start();

$db_connect = mysqli_connect('localhost', 'root', '', 'kamrul');

$banner_img_id = "";


$id = $_SESSION['s_id'];

$email = $_SESSION['s_email']; 

$banner_img_name = $_FILES['banner_img']['name'];

$banner_explode = explode('.' , $banner_img_name);

$banner_img_extention = end($banner_explode);

$banner_id = $id . "." . $banner_img_extention;

$banner_img_old_location = $_FILES['banner_img']['tmp_name'];

$banner_new_location = move_uploaded_file( $banner_img_old_location , 'D:\programs\xampp\htdocs\Full From\front-end\img\banner/' . $banner_id);

$banner_img_update = "UPDATE users SET banner_img = '$banner_id' WHERE ID = '$id';";

$banner_img_query = mysqli_query($db_connect, $banner_img_update);

header('location: banner.php');



?>
