<?php

session_start();

// $name = $_POST['name'];
// $email = $_POST['email'];
// $password = $_POST['password'];
// $confirm_password = $_POST['confirm_password'];
// $flag = false;
// $preg_maa = preg_match('/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{8,20}$/', $password);

// if ($name) {
//     $_SESSION['old_name'] = $name;
// } else {
//     $_SESSION["name_error"] = "Plz Enter Name !!! ";
//     $flag = true;
// }

// if ($email) {
//     $_SESSION['old_email'] = $email;
// } else {
//     $_SESSION["email_error"] = "Plz Enter Email !!! ";
//     $flag = true;
// }

// if ($password) {
//     echo "Password inserted <br>";

//     if ($password != $confirm_password) {
//         $_SESSION['confirm_password_error'] = "Password & Confirm Password does not Match";
//         $flag = true;
//     } else {
//         if ($preg_maa != 1) {
//             $_SESSION['preg_match_error'] = "your password does not meet security requirements";
//             $flag = true;
//         }
//     }

// } else {
//     $_SESSION["password_error"] = "Plz Enter Password !!! ";
//     $flag = true;
// }



// if ($confirm_password) {
//     echo "Confirm Password inserted <br>";
// } else {
//     $_SESSION["confirm_password_error"] = "Plz Enter Confirm Password !!! ";
//     $flag = true;
// }

// if ($flag == 1) {
//     header('location: signup.php');
// } else {

//    $db_connect = mysqli_connect('localhost', 'root', '', 'php');

//    $insert_query = "INSERT INTO users(name, email, password) VALUES ('$name', '$email', '$password')";

//     mysqli_query($db_connect, $insert_query);

//     header('location: signin.php');
//     echo "all done";
// }

// !!!!! neptune Dashboard form validation in PHP !!!!!! //

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
$flag = false;
$preg_maa = preg_match('/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{8,20}$/', $password);



/// Name Error Validation ////

if($name){
    echo "Name Inserted <br>";
    $_SESSION['old_name'] = $name;
}
else{
    $_SESSION['name_error'] = "Plz Enter Name!!!";
    $flag = true;
}

/// E-mail Error Validation ////


if($email){
    echo "Email Inserted <br>";
    $_SESSION['old_email'] = $email;
}
else{
    $_SESSION['email_error'] = "Plz Enter Email !!!";
    $flag = true;
}

/// Password Error Validation ////

if($password){
    echo "Password Inserted <br>";
    
    if($password != $confirm_password){
        $_SESSION['confirm_password_error'] = "Password Or Confirm Password Doesn't Not Matched";
        $flag = true;
    }
    else{

        if($preg_maa != 1){
            $_SESSION['preg_ma'] = 'your password does not meet security requirements';
            $flag = true;
        }
    }
    
}
else{
    $_SESSION['password_error'] = "Plz Enter Password!!!";
    $flag = true;
}


/// Confirm Password Error Validation ////


if($confirm_password){
    echo "Confirm Password Inserted <br>";
}
else{
    $_SESSION['confirm_password_error'] = "Plz Enter Confirm Password!!!";
    $flag = true;
}


if($flag == 1){
    header('location: signup.php');
}
else{

    $encrypted_password = md5($password);

    $db_connect = mysqli_connect('localhost', 'root', '', 'php');

    $insert_query = "INSERT INTO users (Name, Email, Password) VALUES ('$name', '$email', '$encrypted_password')";

    mysqli_query($db_connect, $insert_query);

    $_SESSION['submit'] = "Congratulation <b>$name</b> Your Registration Successfully Done  🎉🎉🎉";
    
    $_SESSION['submit_email'] = $email ;

    header('location: signin.php');

}


?>