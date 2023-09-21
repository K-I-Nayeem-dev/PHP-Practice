<?php

session_start();

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
$preg_maa = preg_match('/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{8,20}$/', $password);
$flag = false;

$db_connect = mysqli_connect('localhost', 'root', '', 'kamrul');

$dup_email = "SELECT COUNT(*) as Validation FROM users WHERE Email = '$email'";

$dup_email_query = mysqli_query($db_connect, $dup_email);

$email_fetch = mysqli_fetch_assoc($dup_email_query)['Validation'];


if ($name) {
    $_SESSION['sign_name'] = $name;
} else {
    $_SESSION['name_error'] = 'Plz Enter Name !!! <br>';
    $flag = true;
}

if ($email) {
    $_SESSION['sign_email'] = $email;

    if ($email_fetch == 1) {
        $_SESSION['email_error'] = 'This Email is Already Taken !!!';
        $flag = true;
    }
} else {
    $_SESSION['email_error'] = 'Plz Enter E-mail !!!';
    $flag = true;
}

if ($password) {

    echo 'Password Ache <br>';

    if ($password != $confirm_password) {

        $_SESSION['confirm_password_error'] = 'Your Password & Confirm Password does not Match !!!';
        $flag = true;
    } else {

        if ($preg_maa != 1) {

            $_SESSION['preg_match_password'] = 'your password does not meet security requirements !!!';
            $flag = true;
        }
    }
} else {

    $_SESSION['password_error'] = 'Plz Enter Password !!!';
    $flag = true;
}

if ($confirm_password) {
    echo 'Confirm Password Ache <br>';
} else {
    $_SESSION['confirm_password_error'] = 'Plz Enter Confirm Password !!!';
    $flag = true;
}


if ($flag == 1) {
    header('location: signup.php');
} else {

    $encrypted_password = md5($password);

    $insert_data = "INSERT INTO users (Name, Email, Password) VALUES ('$name', '$email', '$encrypted_password')";

    mysqli_query($db_connect, $insert_data);

    header('location: login.php');

    $_SESSION['signup_success'] = $name . '  Your Account Successfully Created !!!';
    $_SESSION['signup_email'] = $email;
}
