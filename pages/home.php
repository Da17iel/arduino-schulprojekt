<?php
include "../auth/config.php";

// Check user login or not
if(!isset($_SESSION['LoggedIn'])){
    header('Location: ./index.php');
}

// logout
if(isset($_POST['but_logout'])){
    session_destroy();
    header('Location: ./index.php');
}
?>


<?php include "../Templates/header.php" ?>

<h1>Homepage</h1>
<h2>Du bist jetzt angemeldet</h2>
<form method='post' action="">
    <input type="submit" value="Logout" name="but_logout">
</form>

<?php include "../Templates/footer.php" ?>