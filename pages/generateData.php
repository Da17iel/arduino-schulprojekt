<?php
include "../auth/config.php";

if ($_POST['repeat'] >= 50) {
    header('Location: ./pages/showData.php');
}

for ($i=0; $i < $_POST['repeat']; $i++) {
    // Zufällige Zeit an sekunden
    $randomTime = rand(3, 80);
    $opnTime = date("Y-m-d H:i:s");
    $clsTime = date("Y-m-d H:i:s", strtotime($opnTime) + $randomTime);
    $betweenTime = $randomTime;


    $query = "INSERT INTO kuehlschrankdaten (SchrankAuf, SchrankZu, SchrankOffenDauer) VALUES('$opnTime', '$clsTime', $betweenTime)";

    mysqli_query($con, $query);
}


header('Location: ./showData.php');

