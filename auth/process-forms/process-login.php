<?php
include "../config.php";


if(isset($_POST['but_submit'])){
    $email = mysqli_real_escape_string($con,$_POST['txt_uname']);
    $password = mysqli_real_escape_string($con,$_POST['txt_pwd']);
    $passwordCrypt = password_hash($password, PASSWORD_DEFAULT);

    $user_check_query = "SELECT password FROM kunde WHERE email='$email' LIMIT 1";
    $result = mysqli_query($con, $user_check_query);
    $user = mysqli_fetch_array($result);
    
    $DBPass = $user['password'];

    if (password_verify($password, $DBPass)) {
        if ($email != "" && $password != ""){

            $sql_query = "select count(*) as cntUser from kunde where email='".$email."';";
            $result = mysqli_query($con,$sql_query);
            $row = mysqli_fetch_array($result);
    
            $count = $row['cntUser'];
    
            if($count > 0){
                $_SESSION['LoggedIn'] = true;
                header('Location: ../../pages/home.php');
            }else{
                echo "Falsche Email oder Passwort";
                //header('Location: index.html');
            }
        } else {
            echo "Bitte füllen Sie alle Felder aus";
        }
    } else {
        echo "Das Passwort simmt nicht";
    }
    
    

}

