<?php
include "../auth/config.php";

$lastMonday = date("Y-m-d", strtotime("last Monday -7 Days"));
$dauerArray = Array();

$weekDaysName = [
    'Monday',
    'Tuesday',
    'Wednesday',
    'Thursday',
    'Friday',
    'Saturday',
    'Sunday',
];

$weekDaysDate = [
    'Monday' => $lastMonday,
    'Tuesday' => date("Y-m-d", strtotime($lastMonday . " +1 day")),
    'Wednesday' => date("Y-m-d", strtotime($lastMonday . " +2 day")),
    'Thursday' => date("Y-m-d", strtotime($lastMonday . " +3 day")),
    'Friday' => date("Y-m-d", strtotime($lastMonday . " +4 day")),
    'Saturday' => date("Y-m-d", strtotime($lastMonday . " +5 day")),
    'Sunday' => date("Y-m-d", strtotime($lastMonday . " +6 day")),
];

for ($i=0; $i < count($weekDaysName); $i++) { 
    // SQL Query
    $query = "SELECT SUM(SchrankOffenDauer) AS Dauer FROM kuehlschrankdaten WHERE SchrankAuf like '" . $weekDaysDate[$weekDaysName[$i]] . "%';";
    $result = mysqli_query($con, $query);
    // Get the Data from result
    $data = mysqli_fetch_all($result, MYSQLI_ASSOC);

    echo "Der Schrank war am " . $weekDaysName[$i] . "(" . $weekDaysDate[$weekDaysName[$i]] . ") für " . $data[0]['Dauer'] . " Sekunden offen!<br>";
    array_push($dauerArray, $data[0]['Dauer']);
}


// Free result set
mysqli_free_result($result);
