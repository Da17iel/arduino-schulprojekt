<?php
if(isset($_SESSION['LoggedIn'])) {
    header('Location: ../pages/home.php');
}
?>

<?php include "../Templates/header.php" ?>

<form method="post" action="./process-forms/process-register.php">
    <div id="div_login">
        <h1>Register</h1>
        <?php
            if(isset($_SESSION['errors'])) {
                foreach ($_SESSION['errors'] as $error) {
                    echo "<p class='errorMsg'>" . $error . '</p>';
                }
            }
        ?>
        <div>
            <label for="txt_email">Email</label>
            <input type="email" class="textbox" id="txt_email" name="txt_email" placeholder="example@gmail.com" required/>
        </div>
        <div>
            <label for="txt_pwd1">Password</label>
            <input type="password" class="textbox" id="txt_pwd1" name="txt_pwd1" required/>
        </div>
        <div>
            <label for="txt_pwd2">Password wiederholen</label>
            <input type="password" class="textbox" id="txt_pwd2" name="txt_pwd2" required/>
        </div>
        <div>
            <input type="submit" value="Submit" name="but_submit" id="but_submit" />
        </div>
        <a href="./login.php">Anmelden</a>
    </div>
</form>

<?php include "../Templates/footer.php" ?>
