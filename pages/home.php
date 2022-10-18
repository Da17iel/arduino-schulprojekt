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

<h1>Startseite</h1>

<div class="logoutButton">
    <form method='post' action="">
        <input class="btn" type="submit" value="Logout" name="but_logout">
    </form>
</div>

<h2 id="zweck">Was macht diese Website?</h2>
<p>
    Diese Website wurde im Zweck eines Schulprojektes erstellt. Der Auftrag war es, ein Projekt mit 
    dem Arduino zu erstellen. <br>
    Das Projekt werden wir etwas genauer <a href="#details">weiter unten</a> beschreiben. 
</p>
<p>
    Für weitere Informationen kann man sich meine GitHub page mal durchlesen. 
</p>

<h2 id="details">Was genau ist unser Projekt?</h2>
<p>
    Unser Projekt sollte eine Art Sensor sein. Der Sensor sollte an einem Kühlschrank oder 
    ähnlichen angebracht werden. Dieser Sensor soll mithilfe von einem Ultraschallsensor die Distanz
    zwischen Gerät und Kühlschranktüre messen. Falls die Distanz eine gewisse Länge erreicht hat, 
    geltet der Kühlschrank als offen. Das Gerät sollte die offene Zeit messen und im Nachhinein in 
    eine Datenbank schreiben. <br> 
    Diese Website sollte viele von den gesammelten Daten einfach darstellen können. 
</p>
<p>
    So kann man ganz einfach sehen, wie lange der Kühlschrank in der letzten Woche offen war.
</p>

<h2 id="daten">Die Daten</h2>
<p>Unter folgendem Link können Sie die Daten, welche von dem Arduino gesammelt wurden, einsehen:</p>
<a href="./showData.php">Here is the Link</a>

<?php include "../Templates/footer.php" ?>