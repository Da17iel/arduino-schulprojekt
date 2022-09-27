google.charts.load('current', {packages: ['corechart', 'bar']});
google.charts.setOnLoadCallback(drawBasic);

function drawBasic() {

    var DataValues = [
        ['Offene Zeit in Sekunden', 'Zeit(s)',],
        ['Montag', 553],
        ['Dienstag', 112],
        ['Mittwoch', 585],
        ['Donnerstag', 226],
        ['Freitag', 423],
        ['Samstag', 1403],
        ['Sonntag', 1352],
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
    console.log(newArray[-1])
}