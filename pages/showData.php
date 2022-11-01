<?php 
include "../Templates/header.php"; 
include "./getData.php";
?>
<script>document.title = "Our Data";</script>
<h1>The Data</h1>

<script>
    google.charts.load('current', {packages: ['corechart', 'bar']});
    google.charts.setOnLoadCallback(drawBasic);

    function drawBasic() {

        var DataValues = [
            ['Offene Zeit in Sekunden', 'Zeit(s)',],
            ['Montag', <?php echo ($dauerArray[0]) ? $dauerArray[0] : 0; ?>],
            ['Dienstag', <?php echo ($dauerArray[1]) ? $dauerArray[1] : 0; ?>],
            ['Mittwoch', <?php echo ($dauerArray[2]) ? $dauerArray[2] : 0; ?>],
            ['Donnerstag', <?php echo ($dauerArray[3]) ? $dauerArray[3] : 0; ?>],
            ['Freitag', <?php echo ($dauerArray[4]) ? $dauerArray[4] : 0; ?>],
            ['Samstag', <?php echo ($dauerArray[5]) ? $dauerArray[5] : 0; ?>],
            ['Sonntag', <?php echo ($dauerArray[6]) ? $dauerArray[6] : 0; ?>],
        ]

        var data = google.visualization.arrayToDataTable(DataValues);

        var options = {
        title: 'Offene Zeit in Sekunden',
        chartArea: {width: '50%'},
        hAxis: {
            title: 'Zeitspanne in Sekunden',
            minValue: 0
        },
        vAxis: {
            title: 'Wochentag'
        }
        };

        var chart = new google.visualization.BarChart(document.getElementById('chart_div'));

        chart.draw(data, options);

        DataValues.shift()

        var newArray = DataValues.sort();
        console.log(newArray);
        document.getElementById("dayMostOpen").innerHTML = newArray[0][0];
    }
</script>

<div id="chart_div" style="width: 900px; height: 500px;"></div>

<p>Am <b id="dayMostOpen"></b> war der Kühlschrank am länsten offen.</p>

<form action="./generateData.php" method="post">
    <label for="repeat">Anzahl an Columns generieren:</label>
    <input type="number" name="repeat" id="repeat">

    <input type="submit" value="submit">
</form>

<a href="./home.php">Zurück zur Startseite</a>

<?php include "../Templates/footer.php" ?>