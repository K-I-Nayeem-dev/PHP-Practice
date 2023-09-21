<?php


session_start();

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
$set = false;
$preg_match = preg_match('/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{8,20}$/', $password);

echo $set;



// if ($name) {
//     $_SESSION["old_name"] = $name;
// } else {
//     $_SESSION["name_error"] = "Plz Enter Name !!! ";
//     $set = true;
// }


// if ($email) {
//     $_SESSION["old_email"] = $email;
// } else {
//     $_SESSION["email_error"] = "Plz Enter E-mail Address !!! ";
//     $set = true;
// }


// if ($password) {
//     echo "Password Inserted 🐱‍🏍🐱 <br>";
//     if ($password == $confirm_password) {

//         echo "Password & Confirm Password Matched <br>";

//         if ($preg_match != 1) {
//             $_SESSION["preg_match_password"] = "your password does not meet security requirements !!!";
//             $set = true;
//         } else {
//             echo "Password Done ✨🙂<br>";
//         }
//     } else {
//         $_SESSION["confirm_password_error"] = "Password & Confirm Password does Not Matched !!! ";
//         $set = true;
//     }

// } else {

//     $_SESSION["password_error"] = "Plz Enter Password !!! ";
//     $set = true;
// }


// if ($confirm_password) {
//     echo "Confirm Password Inserted 🥽🥼 <br>";
// } else {
//     $_SESSION["confirm_password_error"] = "Plz Enter Confirm Password !!! ";
//     $set = true;
// }


// if ($set == 1) {
//     header("location: signup.php");
// } else {
//     echo "Congratulation You Just Submit a Form";
// }


// if ($name) {
//     $_SESSION['old_name'] = $name;
// } else {
//     $_SESSION["name_error"] = "Plz Enter Name !!! ";
//     $set = true;
// }

// if ($email) {
//     $_SESSION['old_email'] = $email;
// } else {
//     $_SESSION["email_error"] = "Plz Enter Email !!! ";
//     $set = true;
// }

// if ($password) {
//     echo "Password Inserted <br>";
//     if ($password == $confirm_password) {
//         echo "Password & Confirm Password Matched <br>";

//         if ($preg_match != 1) {
//             $_SESSION["preg_match_password"] = "your password does not meet security requirements";
//             $set = true;
//         } else {
//             echo "Password Done <br>";
//         }
//     } else {
//         $_SESSION["confirm_password_error"] = "Password & Confirm Password doesn't match !!! ";
//         $set = true;
//     }
// } else {
//     $_SESSION["password_error"] = "Plz Enter Password !!! ";
//     $set = true;
// }

// if ($confirm_password) {
//     echo "Confirm Password Inserted <br>";
// } else {
//     $_SESSION["confirm_password_error"] = "Plz Enter Confirm Password !!! ";
//     $set = true;
// }


// if ($set == 1) {
//     header("location: signup.php");
// } else {
//     header("location: signin.php");
// }



if ($name) {
    echo "Name Inserted <br>";
    // $_SESSION["old_name"] = $name;
} 
else {
    $_SESSION["name_error"] = "!!! Plz Enter Name !!!";
    $set = true;
}

if ($email) {

    echo "E-Mail Inserted <br>";
    // $_SESSION["old_email"] = $email;
} 
else {
    $_SESSION["email_error"] = "!!! Plz Enter email !!!";
    $set = true;
}


if ($password) {

    echo "Password Inserted <br>";
    if ($password != $confirm_password) {
        $_SESSION["confirm_password_error"] = "Password & Confirm Password doesn't Match !!!";
        $set = true;
    }
    else{
        
        if ($preg_match != 1) {
            $_SESSION["preg_match_password"] = "your password does not meet security requirements";
            $set = true;
        }
    }
}
else {
    
    $_SESSION["password_error"] = "!!! Plz Enter Password !!!";
    $set = true;
}



if ($confirm_password) {

    echo "Confirm Password Inserted <br>";

} else {
    
    $_SESSION["confirm_password_error"] = "!!! Plz Enter Confirm Password !!!";
    $set = true;
}




if ($set == 1 ) {
    header("location: signup.php");
} 
else {
    
    $db_connect = mysqli_connect('localhost', 'root', '' , 'kamrul');

    $inset_query = "INSERT INTO users(name, email, password) VALUES ('$name', '$email', '$password')";

    // mysqli_query($db_connect, $inset_query);

    echo 'all done have fun';

}
