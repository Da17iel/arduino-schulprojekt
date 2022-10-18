<?php
include "../auth/config.php";

$lastMonday = date("Y-m-d", strtotime("last Monday -7 Days"));
$weekDaysDate = [
    'Monday' => $lastMonday,
    'Tuesday' => date("Y-m-d", strtotime($lastMonday . " +1 day")),
    'Wednesday' => date("Y-m-d", strtotime($lastMonday . " +2 day")),
    'Thursday' => date("Y-m-d", strtotime($lastMonday . " +3 day")),
    'Friday' => date("Y-m-d", strtotime($lastMonday . " +4 day")),
    'Saturday' => date("Y-m-d", strtotime($lastMonday . " +5 day")),
    'Sunday' => date("Y-m-d", strtotime($lastMonday . " +6 day")),
];

if ($_POST['repeat'] >= 50) {
    header('Location: ./pages/showData.php');
}

for ($i=0; $i < $_POST['repeat']; $i++) {
    // Zufällige Zeit an sekunden
    $randomTime = rand(3, 80);
    $opnTime = date("Y-m-d H:i:s", strtotime($weekDaysDate[array_rand($weekDaysDate)]));
    $clsTime = date("Y-m-d H:i:s", strtotime($opnTime) + $randomTime);
    $betweenTime = $randomTime;


    $query = "INSERT INTO kuehlschrankdaten (SchrankAuf, SchrankZu, SchrankOffenDauer) VALUES('$opnTime', '$clsTime', $betweenTime)";

    mysqli_query($con, $query);
}

header('Location: ./showData.php');

