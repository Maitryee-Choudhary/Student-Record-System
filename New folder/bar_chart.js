$(document).ready(function() {
    $.ajax({
    type : 'POST',
    url  : 'chart_data.php',
    dataType:'json',
    success : function(response){
    var chartData = JSON.parse(response);
    var chartOptions = {
     'height': 350,
     'title': 'Placed Percentage of students (%)',
     'width': 1000,
     'fixPadding': 18,
     'barFont': [0, 12, "bold"],
     'labelFont': [0, 13, 0]
    };
    graphite(chartData, chartOptions, barChart);
    }
    });
    });