<?php

session_start();


$db_connect = mysqli_connect('localhost', 'root', '', 'kamrul');

if(isset($_POST['name_change_btn'])){

    $id = $_SESSION['s_id'];
    
    $name = $_POST['name_change'];

    $name_update = "UPDATE users SET Name = '$name' WHERE ID = '$id'";

    $name_query = mysqli_query($db_connect , $name_update);

    $_SESSION['s_name'] = $name;

    header('location: profile.php');

}


// Email change & Validataion ......;


if(isset($_POST['email_change_btn'])){

    $id = $_SESSION['s_id'];

    $email = $_POST['email_change'];

    // Email Explode to take .com & @ value  Start//

    // $email_validate = "SELECT Email FROM users WHERE ID = '$id'";
        
    // $email_new_query = mysqli_query($db_connect, $email_validate);

    // $email_assoc = mysqli_fetch_assoc($email_new_query)['Email'];

    $email_explode_com = explode('.',$email);

    $email_extention = end($email_explode_com);

    $new_email_extention = '.' . $email_extention;

    $email_explode_atThe = explode('@' ,$email_explode_com[0]);

    $email_explode_atThe_end = end($email_explode_atThe); 

    $full_email = $email_explode_atThe[0] . "@" . $email_explode_atThe_end . $new_email_extention;

    if($email_explode_atThe[0] == ""){
        echo "plz Don't empty first space";
    }
    else{
        if($email_extention != 'com'){
            echo 'plz make it .com <br>';
        }
        else{
            if($email != $full_email ){
                echo 'thik nai <br>';
            }
            else{
                echo 'thik ache <br>';

                $email_update = "UPDATE users SET Email = '$email' WHERE ID = '$id'";

                $email_query = mysqli_query($db_connect, $email_update);
            
                $_SESSION['s_email'] = $email;
            
                header('location: profile.php');
                
            }
        }
       
            echo($email);
    }

        // if($email_explode_atThe_end == ""){
        //     echo 'Plz Give a Proper Email <br>';

        //     if($email_explode_atThe_end[1] == ""){
        //         echo 'Plz Give a Proper Email <br>';

        //         if($new_email_extention != ".com"){

        //             echo 'Plz Give a Proper Email <br>';
        //         }
        //     }
        // }  
        // else{
        //     echo 'thik ache';
        // }


    // Email Explode to take .com & @ value  Start//

}

// Email Change & Validation End ............



/// Profile Picture Change Process Start /////.............

if(isset($_POST['photo_change_btn'])){

    $id = $_SESSION['s_id'];

    $photo = $_FILES['photo_change']['name'];

    $photo_explode = explode('.', $photo);

    $photo_extention = end($photo_explode);

    $new_name = $id . "." .$photo_extention;

    $old_location = $_FILES['photo_change']['tmp_name'];

    $new_location = ('../backend/uploads/profile_pictures/' . $new_name);

    move_uploaded_file($old_location, $new_location);

    $photo_update = "UPDATE users SET profile_picture = '$new_name' WHERE ID = '$id'";

    $photo_update_query = mysqli_query($db_connect, $photo_update);
    
    header('location: profile.php');
}


/// Profile Picture Change Process End /////.............




/// Password Change Process End /////.............


if(isset($_POST['password_change_btn'])){

    $id = $_SESSION['s_id'];

    $old_password = $_POST['old_password'];

    $new_password = $_POST['new_password'];

    $confirm_new_password = $_POST['confirm_new_password'];

    $db_password = "SELECT Password FROM users WHERE ID = '$id'"; 

    $db_password_query = mysqli_query($db_connect, $db_password);

    $db_password_assoc = mysqli_fetch_assoc($db_password_query)['Password'];

    $preg_maa = preg_match('/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{8,20}$/', $new_password);


    if(!$old_password){
        echo "Plz Enter Old password";
    }
    else{
        if(md5($old_password) != $db_password_assoc){
            echo "Your Password does not Match";
        }
        else{
            if(!$new_password || !$confirm_new_password){
                echo "New Password or Confirm password Missing";
            }
            else{
                if($new_password != $confirm_new_password){
                    echo 'New Password Or Confirm Password does not Match !! ';
                }
                else{
                    if($preg_maa != 1){
                        echo "your password does not meet security requirements";
                    }
                    else{
                        
                        $encrypted_password = md5($new_password);

                        $update_password = "UPDATE users SET Password = '$encrypted_password' WHERE ID = '$id'";

                        $update_password_query  = mysqli_query($db_connect, $update_password);

                        echo 'Your Password Sucessfully Changed';
                    }
                }
            }
        }
    }

}






/// Password Change Process End /////.............


?>