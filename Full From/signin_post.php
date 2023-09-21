<?php

session_start();

$email = $_POST['email'];
$password = md5($_POST['password']);

$db_connent = mysqli_connect('localhost', 'root', '', 'kamrul');

$login_check = "SELECT COUNT(*) AS result FROM users WHERE Email = '$email' && Password = '$password'";



$login_query = mysqli_query($db_connent, $login_check);

$login_assoc = mysqli_fetch_assoc($login_query)['result'];


if ($login_assoc == 1) {

    header('location: backend/dashboard.php');

    $_SESSION['s_email'] = $email;
    
    $dash_value = "SELECT ID, Name FROM users WHERE Email = '$email'";

    $dash_query = mysqli_query($db_connent, $dash_value);

    $dash_inputs = mysqli_fetch_assoc($dash_query);

    $_SESSION['s_id'] = $dash_inputs['ID'];

    $_SESSION['s_name'] = $dash_inputs['Name'];

    $website_photo_insert = "INSERT INTO banner_items (banner_img) VALUES ('banner_img.png')";

    $website_photo_query = mysqli_query($db_connent, $website_photo_insert);


}
else{
    header('location: signin.php');
    $_SESSION['login_err'] = 'Plz Enter Email & Password to Log in';
}
