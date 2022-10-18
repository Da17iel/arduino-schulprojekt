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
<script>document.title = "Home";</script>

<h1>Homepage</h1>

<div class="logoutButton">
    <form method='post' action="">
        <input class="btn" type="submit" value="Logout" name="but_logout">
    </form>
</div>

<h2>What is this site?</h2>


<h2>What is our Project?</h2>


<h2>The Data</h2>
<p>Here is the data to the project that we have retrieved from our Arduino</p>
<a href="./showData.php">Here is the Link</a>

<?php include "../Templates/footer.php" ?>