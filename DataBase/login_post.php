<?php 

session_start();

$email = $_POST['login_email'];

$password = md5($_POST['login_password']);

$db_connect = mysqli_connect('localhost', 'root', '', 'kamrul');

$select_final = "SELECT COUNT(*) as result FROM users WHERE Email = '$email' && Password = '$password'";

$login_password = "SELECT COUNT(*) FROM users WHERE Password = '$password'";

$db_query = mysqli_query($db_connect , $select_final);

$after_assoc = mysqli_fetch_assoc($db_query)['result'];

if($after_assoc == 1){
    header('location: backend/Dashboard.php');
    $_SESSION['login_s_email'] = $email;

    $dashboard = "SELECT ID,Name FROM users WHERE Email = '$email'";
    
    $dash_s_query = mysqli_query($db_connect, $dashboard);

    $af_assoc = mysqli_fetch_assoc($dash_s_query);

    $_SESSION['assoc_id'] = $af_assoc['ID'];
    $_SESSION['assoc_name'] = $af_assoc['Name'];

    print_r($af_assoc);

}
else{

    header('location: login.php');

    if(!$email){
            $_SESSION['email_password_invalid'] = 'Plz Enter E-mail & Password To Login';
    }
    elseif(!$password){
        $_SESSION['password_error'] = 'E-mail or Password Not Matched';
    }
    else{
        if($password != $login_password){

            $_SESSION['password_error'] = 'E-mail or Password Not Matched';
    
        }
    }
}


?>