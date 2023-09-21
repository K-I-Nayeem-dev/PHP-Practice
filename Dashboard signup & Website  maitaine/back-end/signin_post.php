<?php

session_start();
require_once('../components/db_connect.php');


$email = $_POST['email'];
$password = md5($_POST['password']);
$flag = false;

$log_in = "SELECT COUNT(*) as result FROM users WHERE Email = '$email' && Password = '$password'";

$log_in_query = mysqli_query($db_connect, $log_in);

$log_in_assoc = mysqli_fetch_assoc($log_in_query)['result'];

if(!$email){
    $_SESSION['email_error'] = 'Enter Email To Sign in';
    $flag = true;
}

if(!$password){
    $_SESSION['password_error'] = 'Enter Password';
    $flag = true;
}

if($log_in_assoc != 1){

    $_SESSION['login_err'] = 'Email or Password Not Matching';
    $flag = true;

}
else{
    $_SESSION['s_email'] = $email;
    
    $select_items = "SELECT * FROM users WHERE Email = '$email'";

    $select_query = mysqli_query($db_connect, $select_items);
    
    $select_assoc = mysqli_fetch_assoc($select_query);

    $_SESSION['s_id'] = $select_assoc['ID']; 

    $_SESSION['s_name'] = $select_assoc['Name'];
    
    $_SESSION['s_email'] = $select_assoc['Email'];

    header('location: ../Dashboard/dashboard.php');
   
}

if($flag == 1){
    header('location: ../front-end/signin.php');
}


?>