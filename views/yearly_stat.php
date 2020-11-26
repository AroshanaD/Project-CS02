
<div class="title">Yearly statistics</div>
<div class="contact-box" id="stat-card">
    <div class="left" style="background-image: url(<?php echo Router::base_url().'/files/icons/statistics.svg' ?>)"></div>
    <div class="right">
    <div class="container">
        <div class="stat">
            <div class="s-title"> Number of Appointments Yearly </div>
            <div class="statistic-card">
                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                <div id="chart_div"></div>          
            </div>
        </div>
        <div class="stat">
            <div class="s-title">Appointments on Gender Basis and Platform Basis</div>
            <div class="statistic-card">
                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                <div id="piechart-1"></div>
                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                <div id="piechart-2"></div>
            </div>
        </div>
    </div>
    </div>
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