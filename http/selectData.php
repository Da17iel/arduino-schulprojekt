<?php
include "../auth/config.php";



$sqlQuery = "SELECT SchrankAuf, SchrankZu, SchrankOffenDauer FROM kuehlschrankdaten;";
$result = mysqli_query($con, $sqlQuery);
$SelectStatement = mysqli_fetch_assoc($result);

var_dump($SelectStatement);

echo "<br>" . $SelectStatement['SchrankAuf'][0];
