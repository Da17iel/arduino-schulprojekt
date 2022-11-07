<?php
include "../auth/config.php";

$SchrankAuf = $_POST['SchrankAuf'];
$SchrankZu = $_POST['SchrankZu'];
$SchrankOffenDauer = $_POST['SchrankOffenDauer'];

$sqlQuery = "INSERT INTO kuehlschrankdaten (SchrankAuf, SchrankZu, SchrankOffenDauer) VALUES ('$SchrankAuf', '$SchrankZu', '$SchrankOffenDauer');";
$result = mysqli_query($con, $sqlQuery);
