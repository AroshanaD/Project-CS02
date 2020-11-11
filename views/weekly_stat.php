
    <div style="background-image: linear-gradient(to left,  #fec007de, rgba(255, 255, 255, 0)), url(<?php echo Router::base_url().'/filesicons/undraw_visual_data_b1wx.png'?>);">
        <div class="container-small">Weekly statistics</div>
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
        google.charts.load('current', {packages: ['corechart', 'line']});
        google.charts.setOnLoadCallback(drawBackgroundColor);

        function drawBackgroundColor() {
            var data = new google.visualization.DataTable();
            data.addColumn('number', 'X');
            data.addColumn('number', 'Appointments');

            data.addRows([
                [1, 10],  [2, 23],  [3, 17],  [4, 18],  [5, 9],
                [6, 11],  [7, 27], 
            ]);

            var options = {
                hAxis: {
                title: 'Days'
                },
                vAxis: {
                title: 'No.of Appointments'
                },
                backgroundColor: '#f1f8e9'
            };

            var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
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