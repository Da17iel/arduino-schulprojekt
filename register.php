<?php
if(!isset($_SESSION['LoggedIn'])) {
    header('Location: home.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Unser Dokument</title>
</head>
<body>
    <div class="container">
        <form method="post" action="process-register.php">
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
                <a href="/login.php">Anmelden</a>
            </div>
        </form>
    </div>
</body>
</html>


