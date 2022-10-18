<?php
if(isset($_SESSION['LoggedIn'])) {
    header('Location: ../pages/home.php');
}
?>

<?php include "../Templates/header.php" ?>
<script>document.title = "Register";</script>

<form method="post" action="./process-forms/process-register.php" class="authForm">
    <h1>Register</h1>
    <?php
        if(isset($_SESSION['errors'])) {
            foreach ($_SESSION['errors'] as $error) {
                echo "<p class='errorMsg'>" . $error . '</p>';
            }
        }
    ?>
    <div>
        <label for="txt_email">Email</label> <br>
        <input type="email" class="textbox" id="txt_email" name="txt_email" placeholder="example@gmail.com" required/>
    </div>
    <div>
        <label for="txt_pwd1">Passwort</label><br>
        <input type="password" class="textbox" id="txt_pwd1" placeholder="Passwort" name="txt_pwd1" required/>
    </div>
    <div>
        <label for="txt_pwd2">Password wiederholen</label><br>
        <input type="password" class="textbox" id="txt_pwd2" name="txt_pwd2" required/>
    </div>
    <div>
        <input type="submit" value="Registrieren" class="btn" name="but_submit" id="but_submit" />
    </div>
    <a href="./login.php">Haben Sie bereits ein Konto?</a>
</form>

<?php include "../Templates/footer.php" ?>
