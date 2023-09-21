<?php 

session_start();

$email = $_POST['log_email'];
$password = md5($_POST['log_password']);

$db_connect = mysqli_connect('localhost', 'root', '', 'kamrul');

$select_final = "SELECT COUNT(*) AS result FROM users WHERE Email = '$email' && Password = '$password'";

$log_pass = "SELECT Password FROM users WHERE Password = '$password'";

$final_query = mysqli_query($db_connect, $select_final);


$after_assoc = mysqli_fetch_assoc($final_query)['result'];


if($after_assoc == 1){

    header('location: backend/dashboard.php');

    $_SESSION['dash_email'] = $email;

    $dash_data = "SELECT ID, Name FROM users WHERE Email = '$email'";

    $dash_query = mysqli_query($db_connect, $dash_data);

    $dash_assoc = mysqli_fetch_assoc($dash_query);

    $_SESSION['assoc_id'] = $dash_assoc['ID'];

    $_SESSION['assoc_name'] = $dash_assoc['Name'];

    print_r($dash_assoc);

}
else{

    $flag = false;

    if(!$email){
        $_SESSION['email_failed'] = 'Plz Enter E-mail And  Password To Login';
        $flag = true;
    }
    elseif($pass != $log_pass){
        $_SESSION['login_failed'] = 'E-mail Or Password Does Not Match';
        $flag = true;
    }
    else{
        $_SESSION['login_failed'] = 'Enter E-mail  To Login'; 
        $flag = true;
    }

    if($flag == 1){
        header('location: signin.php');
    }

}

?>