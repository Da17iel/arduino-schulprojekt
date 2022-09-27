<?php
if(isset($_SESSION['LoggedIn'])) {
    header('Location: ../pages/home.php');
}
?>

<?php include "../Templates/header.php" ?>

<form method="post" action="./process-forms/process-login.php">
    <div id="div_login">
        <h1>Login</h1>
        <div>
            <label for="txt_uname">Email:</label>
            <input type="text" class="textbox" id="txt_uname" name="txt_uname" placeholder="example@gmail.com" />
        </div>
        <div>
            <label for="txt_pwd">Password</label>
            <input type="password" class="textbox" id="txt_pwd" name="txt_pwd" placeholder="Password"/>
        </div>
        <div>
            <input type="submit" value="Submit" class="btn" name="but_submit" id="but_submit" />
        </div>
        <a href="./register.php" class="btn">Noch nicht angemeldet?</a>
    </div>
</form>

<?php include "../Templates/footer.php" ?>
