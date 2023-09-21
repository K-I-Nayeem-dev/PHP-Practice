<?php 

session_start();

$email = $_POST['email'];
$password = md5($_POST['password']);
$flag = false;


$db_connect = mysqli_connect('localhost', 'root', '' , 'php');

$count_query = "SELECT COUNT(*) AS 'results' FROM users WHERE Email= '$email' AND Password= '$password'";

$select_final = mysqli_query($db_connect, $count_query);

$db_assoc = mysqli_fetch_assoc($select_final)['results'];


if($email){
    echo 'Email ache';
}
else{
    $_SESSION['login_email'] = 'Enter Email To Log In!!!';
    $flag = true;
}

if(!$password){
    echo 'password';
    $_SESSION['login_error'] = 'Enter Password To Log In!!!';
    $flag = true;
}
else{

    if($db_assoc == 1){
        header('location: Dashboard.php');
    }
    else{
        $_SESSION['login_error'] = 'Email Or Password Does Not Match !!!';
        $flag = true;
    }
    
}


if($flag == 1){
    header('location: signin.php');
}



?>