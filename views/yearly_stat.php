<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <ul class="nav">
            <li class="nav-item"><a href="#">
                <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-house-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M8 3.293l6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                    <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                  </svg>
            </a></li>
            <li class="nav-item"><a href="#">
                <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-house-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M8 3.293l6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                    <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                  </svg>
            </a></li>
        </ul>
        <div class="container-small">Hospital Management System</div>
        <div class="container-small">Yearly statistics</div>
        <div class="statistic-card">
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <div id="chart_div"></div>                    
        </div>
        <div class="statistic-card">
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <div id="piechart-1"></div>
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <div id="piechart-2"></div>
        </div>

        <script>
            google.charts.load('current', {packages: ['corechart', 'bar']});
            google.charts.setOnLoadCallback(drawBasic);

        function drawBasic() {

            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Month');
            data.addColumn('number', 'No.of Appointments');

            data.addRows([
                ['January',50],
                ['February',35],
                ['March',56],
                ['April',30],
                ['May',24],
                ['June',60],
                ['July',40],
                ['August',44],
                ['September',55],
                ['October',45],
                ['November',34],
                ['December',62],
            ]);

            var options = {
                title: 'Monthly Statistics',
                hAxis: {
                title: 'Month'
                },
                vAxis: {
                title: 'No.of Appointments'
                }
            };

            var chart = new google.visualization.ColumnChart(
                document.getElementById('chart_div'));

            chart.draw(data, options);
    }
        </script>

        <script>
            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {

                var data = google.visualization.arrayToDataTable([
                ['Task', 'No.of Patients'],
                ['Male',     11],
                ['Female',      2],
                ]);

                var options = {
                title: 'Appointments On Gender Base'
                };

                var chart = new google.visualization.PieChart(document.getElementById('piechart-1'));

                chart.draw(data, options);
            }
        </script>

        <script>
            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {

                var data = google.visualization.arrayToDataTable([
                ['Task', 'No.of Patients'],
                ['Online',     11],
                ['At Premise',      2],
                ]);

                var options = {
                title: 'Appointments Made Online'
                };

                var chart = new google.visualization.PieChart(document.getElementById('piechart-2'));

                chart.draw(data, options);
            }
        </script>

    </body>
</html>