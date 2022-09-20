<?php
include "config.php";
$errors = array();

if(isset($_SESSION['LoggedIn'])) {
    header('Location: home.php');
}

if(isset($_POST['but_submit'])){

    $email = mysqli_real_escape_string($con,$_POST['txt_email']);
    $password1 = mysqli_real_escape_string($con,$_POST['txt_pwd1']);
    $password2 = mysqli_real_escape_string($con,$_POST['txt_pwd2']);

    if (empty($email)) { array_push($errors, "Bitte geben Sie eine Email ein"); }
    if (empty($password1)) { array_push($errors, "Bitte geben Sie ein Passwort ein"); }
    if ($password1 != $password2) {
        array_push($errors, "Die Zwei Passwörter sind nicht gleich");
    }

    
    // first check the database to make sure 
    // a user does not already exist with the same username and/or email
    $user_check_query = "SELECT * FROM kunde WHERE email='$email' LIMIT 1";
    $result = mysqli_query($con, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) { 
        // if user exists
        array_push($errors, "Dieser Benutzer gibt es bereits schon");
    }

    if (count($errors) == 0) {
        $password1 = password_hash($password1, PASSWORD_DEFAULT); //encrypt the password before saving in the database
  
        $query = "INSERT INTO kunde (email, password) 
                  VALUES('$email', '$password1')";

        mysqli_query($con, $query);
        $_SESSION['LoggedIn'] = true;
        header('Location: home.php');
    } else {
        // Return the errors
        $_SESSION['errors'] = $errors;
        header('Location: register.php');
    }
    
    

}
