<?php 

session_start();

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
$preg_maa = preg_match('/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{8,20}$/', $password);
$flag = false;

if($name){
    $_SESSION['old_name'] = $name;
}
else{
    $_SESSION['name_err'] = 'Plz Enter Name !!!'; 
    $flag = true;
}

if($email){
    $_SESSION['old_email'] = $email;
}
else{
    $_SESSION['email_err'] = 'Plz Enter E-mail !!!'; 
    $flag = true;
}

if($password){
    if($password != $confirm_password){
        $_SESSION['confirm_password_err'] = 'Password & Confrim Password Not Matched !!!'; 
        $flag = true;
    }
    else{
        if($preg_maa != 1){
            $_SESSION['preg_match'] = "your password does not meet security requirements";
            $flag = true;
        }
    }
}
else{
    $_SESSION['password_err'] = 'Plz Enter Password !!!'; 
    $flag = true;
}

if($confirm_password){
    echo "name Ache <br>";
}
else{
    $_SESSION['confirm_password_err'] = 'Plz Enter Confirm Password !!!'; 
    $flag = true;
}






if($flag == 1){
    header('location: signup.php');
}
else{

    $encrypted_password = md5($password);

    header('location: signin.php');

    $_SESSION['success_message'] =  "$name  Your Account Successfully Create";
    
    $db_connent = mysqli_connect('localhost', 'root', '', 'kamrul');

    $insert_value = "INSERT INTO users (Name, Email, Password) VALUES ('$name', '$email', '$encrypted_password')";

    $signup_query = mysqli_query($db_connent, $insert_value);

}


?>