<?php
include "config.php";

// Check user login or not
if(!isset($_SESSION['LoggedIn'])){
    header('Location: index.html');
}

// logout
if(isset($_POST['but_logout'])){
    session_destroy();
    header('Location: index.html');
}
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Du bist eingeloggt</title>
    </head>
    <body>
        <div class="container">
            <h1>Homepage</h1>
            <h2>Du bist jetzt angemeldet</h2>
            <form method='post' action="">
                <input type="submit" value="Logout" name="but_logout">
            </form>
        </div>
        
    </body>
</html>