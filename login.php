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
    <title>In die Seite einloggen</title>
</head>
<body>
    <div class="container">
        <form method="post" action="process-login.php">
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
                    <input type="submit" value="Submit" name="but_submit" id="but_submit" />
                </div>
                <a href="/register.php">Noch nicht angemeldet?</a>
            </div>
        </form>
    </div>
</body>
</html>


