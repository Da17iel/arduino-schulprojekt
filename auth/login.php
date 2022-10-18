<?php
if(isset($_SESSION['LoggedIn'])) {
    header('Location: ../pages/home.php');
}
?>

<?php include "../Templates/header.php" ?>
<script>document.title = "Login";</script>

<form method="post" action="./process-forms/process-login.php" class="authForm">
    <div id="div_login">
        <h1>Login</h1>
        <div>
            <label for="txt_email">Email:</label><br>
            <input type="email" class="textbox" id="txt_email" name="txt_email" placeholder="example@gmail.com" />
        </div>
        <div>
            <label for="txt_pwd">Passwort</label><br>
            <input type="password" class="textbox" id="txt_pwd" name="txt_pwd" placeholder="Passwort"/>
        </div>
        <div>
            <input type="submit" value="Anmelden" class="btn" name="but_submit" id="but_submit" />
        </div>
        <a href="./register.php">Noch nicht angemeldet?</a>
    </div>
</form>

<?php include "../Templates/footer.php" ?>
