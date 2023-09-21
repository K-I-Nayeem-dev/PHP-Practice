<?php

require_once('../components/db_connect.php');

session_start();

if(isset($_POST['name_change'])){

    $name = $_POST['name'];

  if(!$name){
    $_SESSION['name_err'] = 'do not empty name field';
    header('location: ../Dashboard/profile.php');
  }
  else{
    $id =  $_SESSION['s_id'];
   
    $name_change = "UPDATE users SET Name  = '$name' WHERE ID = $id";

    mysqli_query($db_connect, $name_change);

    $_SESSION['s_name'] = $name;

    header('location: ../Dashboard/profile.php');
  }

}

if(isset($_POST['email_change'])){

    $email = $_POST['email'];

    if(!$email){
      $_SESSION['email_err'] = 'do not empty email field';
      header('location: ../Dashboard/profile.php');
    }
    else{

      $id =  $_SESSION['s_id'];
     
      $email_change = "UPDATE users SET Email  = '$email' WHERE ID = $id";
  
      mysqli_query($db_connect, $email_change);
  
      $_SESSION['s_email'] = $email;
  
      header('location: ../Dashboard/profile.php');

    }
  
  }

  if(isset($_POST['photo_change'])){

    $photo = $_FILES['photo']['name'];

    if(!$photo){
        $_SESSION['photo_error'] = 'Plz Select Photo To Update Profile Picture ';
        header('location: ../Dashboard/profile.php');
    }
    else{
    $id =  $_SESSION['s_id'];

        $photo_name = $_FILES['photo']['name'];

        $photo_explode = explode('.' , $photo_name);
        
        $extention = end($photo_explode);

        $new_name = $id . "." . $extention;

        $old_location = $_FILES['photo']['tmp_name'];

        $new_location = ('D:\programs\xampp\htdocs\Dashboard signup & Website  maitaine\components\uploads\Profile Photos/'.$new_name) ;

        move_uploaded_file($old_location, $new_location );

        $photo_update = "UPDATE users SET profile_picture = '$new_name' WHERE ID = $id";

        mysqli_query($db_connect, $photo_update);

        header('location: ../Dashboard/profile.php');

    }

  }

  if(isset($_POST['password_change'])){

    $id =  $_SESSION['s_id'];

    $old_password = $_POST['old_password'];

    $new_password = $_POST['new_password'];

    $confirm_new_password = $_POST['confirm_new_password'];

    $preg_maa = preg_match('/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{8,20}$/', $new_password);

    $db_password = "SELECT Password FROM users WHERE ID = $id";

    $db_password_query = mysqli_query($db_connect, $db_password);

    $db_password_assoc = mysqli_fetch_assoc($db_password_query)['Password'];

    if(!$new_password){
        $_SESSION['new_pass_err'] = 'Plz Enter New Password';
        header('location: ../Dashboard/profile.php');
    }

    if(!$confirm_new_password){
        $_SESSION['new_confirm_pass_err'] = 'Plz Enter Confirm Password';
        header('location: ../Dashboard/profile.php');
    }


    if(!$old_password){
        $_SESSION['pass_err'] = 'Plz Enter Old Password to Change Password';
        header('location: ../Dashboard/profile.php');
    }
    else{
        if($db_password_assoc != md5($old_password)){
            $_SESSION['pass_match_err'] = 'Password Not Mathed';
            header('location: ../Dashboard/profile.php');
        }
        else{
         
            if($new_password != $confirm_new_password){
                $_SESSION['pass_match_err'] = 'Password Not Mathed';
                header('location: ../Dashboard/profile.php');
            }
            else{
                if($preg_maa != 1){
                    $_SESSION['new_confirm_pass_err'] = 'Set a Strong Password !!!';
                    header('location: ../Dashboard/profile.php');
                }
                else{
                    
                    if($new_password != $confirm_new_password){
                        $_SESSION['new_pass_match_err'] = 'Password Not Mathed';
                        header('location: ../Dashboard/profile.php');
                    }
                    else{

                        $encrypted_password = md5($new_password);

                        $password_update = "UPDATE users SET Password = '$encrypted_password' WHERE ID = $id";

                        mysqli_query($db_connect, $password_update); 

                        $_SESSION['success_msg'] = 'Password Successfully changed';

                        header('location: ../Dashboard/profile.php');

                    }
                }
            }

        }
    }

  }



?>
