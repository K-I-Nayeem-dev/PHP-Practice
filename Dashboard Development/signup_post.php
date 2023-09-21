<?php
session_start();

$name = $_POST["name"];

$email = $_POST["email"];

$pass = $_POST["password"];

$con_pass = $_POST["confirm_password"];

$flag = false;

$preg_maa = preg_match('/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{8,20}$/', $pass);

$db_connect = mysqli_connect('localhost',  'root', '', 'kamrul');

$email_check = "SELECT Email FROM users WHERE Email = '$email'";

$email_query = mysqli_query($db_connect, $email_check);

$email_assoc = mysqli_fetch_assoc($email_query)['Email'];


if($name){
    $_SESSION['old_name'] = $name;
}
else{
    $_SESSION["name_error"] = "Plz Enter Name ! ! ! ";
    $flag = true;
}

if($email){
    $_SESSION['old_email'] = $email;
    if($email == $email_assoc){
        $_SESSION["email_error"] = "This Email is Already Taken ! ! ! ";
        $flag = true;
    }
}
else{
    $_SESSION["email_error"] = "Enter Email Please ! ! ! ";
    $flag = true;
}

if($pass){
    echo "Password Check <br>";
    if($pass != $con_pass){
        $_SESSION["confirm_password_error"] = " Passwords & Confirm Password do NOT match 🤦‍♀️🤦‍♀️🤦‍♀️";
        $flag = true; 
    }
    else{
        if($preg_maa != 1){
            $_SESSION["preg_match_err"] = "your password does not meet security requirements !!! ";
            $flag = true; 
        }
    }
}
else{
    $_SESSION["password_error"] = "Enter Password Plzzz 🙏 🙏 🙏 🙏 🙏";
    $flag = true; 
}

if($con_pass){
    echo "Confirm Password Check <br>";
}
else{
    $_SESSION["confirm_password_error"] = "Plz Enter Confirm Password 🤦‍♀️🤦‍♀️🤦‍♀️";
    $flag = true; 
}



if($flag == 1){
    header('location: signup.php');
}
else{

    $encrypted_pass = md5($pass);

    $insert_value = "INSERT INTO users (Name, Email, Password) VALUES ('$name', '$email', '$encrypted_pass')";

    mysqli_query($db_connect, $insert_value); 

    header('location: signin.php');

    $_SESSION['signup_success'] = $name . " Your Account Successfully Created";

    $_SESSION['signup_email'] = $email;


}


?>