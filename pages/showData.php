<?php 
include "../Templates/header.php"; 
include "./getData.php";
?>

<h1>The Data</h1>

<div id="chart_div" style="width: 900px; height: 500px;"></div>

<p>Am <b id="dayMostOpen"></b> was the day where the refrigirator open the most time.</p>

<form action="./generateData.php" method="post">
    <label for="repeat">Amount of cols to generate</label>
    <input type="number" name="repeat" id="repeat">

    <input type="submit" value="submit">
</form>

<a href="./home.php">Return Home</a>

<?php include "../Templates/footer.php" ?>