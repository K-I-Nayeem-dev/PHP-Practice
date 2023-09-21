<?php

require_once('../components/db_connect.php');


session_start();

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
$flag = false;
$preg_maa = preg_match('/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{8,20}$/', $password);

$_SESSION['old_name'] = $name;

$_SESSION['old_email'] = $email;


if(!$name){
    $_SESSION['name_error'] = 'Plz Enter Name';
    $flag = true;
}

if(!$email){
    $_SESSION['email_error'] = 'Plz Enter Email';
    $flag = true;
}


if(!$password){
    $_SESSION['password_error'] = 'Plz Enter Password';
    $flag = true;
}
else{
    if($password != $confirm_password){
        $_SESSION['confirm_password_error'] = 'Password & Confirm Password Not Matched';
        $flag = true;
    }
    else{
        if($preg_maa != 1){
            $_SESSION['preg_match_error'] = 'your password does not meet security requirements';
            $flag = true;
        }
    }
}


if(!$confirm_password){
    $_SESSION['confirm_password_error'] = 'Plz Enter Confirm Password';
    $flag = true;
}



if($flag == 1){
    header('location: ../front-end/signup.php');
}
else{
    
    $encrypted_password = md5($password);

    $data_inset = "INSERT INTO users (Name, Email, Password) VALUES ('$name', '$email', '$encrypted_password')";

    mysqli_query($db_connect, $data_inset);

    header('location: ../front-end/signin.php');

}


?>