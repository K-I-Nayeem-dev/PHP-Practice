<?php

session_start();

$db_connect = mysqli_connect('localhost', 'root', '', 'kamrul');

$email = $_SESSION['s_email'];

$service_id = $_POST['service_id'];

$edit_service_name = $_POST['edit_service_name'];

$edit_services_description = $_POST['edit_services_description'];

$edit_service_status = $_POST['edit_service_status'];

$edit_service_icon = $_POST['edit_service_icon'];

$edit_checking = "SELECT COUNT(*) 'result' FROM users, services WHERE services.ID = '$service_id' && users.Email = '$email'";

$edit_query = mysqli_query($db_connect , $edit_checking);

$edit_assoc = mysqli_fetch_assoc($edit_query)['result'];

$flag = false;



if(isset($_POST['edit_services_btn'])){


    if($edit_assoc != 1){
        $_SESSION['service_id'] = "Plz Give a Valid Service ID !!!";
        $flag = true;
    }
    else{

        $service_update = "UPDATE services, users SET service_name = '$edit_service_name' , services_description = '$edit_services_description' , service_icon = '$edit_service_icon' , service_status = '$edit_service_status' WHERE services.ID = '$service_id' && users.Email = '$email'";

        $service_query = mysqli_query($db_connect, $service_update);

        header('location: add_services.php');

    }
    
    

    if(!$service_id){
        $_SESSION['service_id'] = "Plz Enter Service ID !!!";
        $flag = true;
    }

    if(!$edit_service_name){
        $_SESSION['edit_service_name_err'] = "Plz Type to Update Service Name !!!";
        $flag = true;
    }
    if(!$edit_services_description){
        $_SESSION['edit_services_description'] = "Plz Type to Update Service Description !!!";
        $flag = true;
    }
    
    if(!$edit_service_status){
        $_SESSION['edit_service_status'] = "Plz Type to Update Service  Status !!!";
        $flag = true;
    }
    
    if(!$edit_service_icon){
        $_SESSION['edit_service_icon'] = "Plz Type to Update Service Icon !!!";
        $flag = true;
    }

    if($flag == 1){
        header('location: add_services.php');
    }
    else{

    }

    

}


?>