$(document).ready(function () {

    platform_stat();
    gender_stat();
    monthly_appointment();
})


function gender_stat() {

    google.charts.load("current", {
        packages: ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ["Element", "Density", {
                role: "style"
            }],
            ["Male", 20, "cornflowerblue"],
            ["Female", 5, "orange"],

        ]);

        var view = new google.visualization.DataView(data);
        view.setColumns([0, 1,
            {
                calc: "stringify",
                sourceColumn: 1,
                type: "string",
                role: "annotation"
            },
            2
        ]);

        var options = {

            width: 400,
            height: 280,
            bar: {
                groupWidth: "95%"
            },
            legend: {
                position: "none"
            },
        };
        var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
        chart.draw(view, options);
    }

}

function monthly_appointment() {

    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Day', 'Appointments'],
            ['1', 1,],
            ['2', 2,],
            ['3', 1,],
            ['4', 5,],
            ['5', 2,],
            ['6', 5,],
            ['7', 3,],
            ['8', 1,],
            ['9', 1,],
            ['10', 1,],
            ['11', 1,],
            ['12', 1,],
            ['13', 1,],
            ['14', 5,],
            ['15', 3,],
            ['16', 1,],
            ['17', 2,],
            ['18', 2,],
            ['19', 1,],
            ['20', 1,],
            ['21', 2,],
            ['22', 2,],
            ['23', 2,],
            ['24', 2,],
            ['25', 1,],
            ['26', 1,],
            ['27', 1,],
            ['28', 1,],
            ['29', 2,],
            ['30', 1,],
            ['31', 3,]
        ]);

        var options = {
            width: 1200,
            hAxis: {
                title: 'Day',
                titleTextStyle: {
                    color: '#333'
                }
            },
            vAxis: {
                minValue: 0
            }
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div1'));
        chart.draw(data, options);
    }

}

function platform_stat() {

    function sliceSize(dataNum, dataTotal) {
        return (dataNum / dataTotal) * 360;
    }

    function addSlice(sliceSize, pieElement, offset, sliceID, color) {
        $(pieElement).append("<div class='slice " + sliceID + "'><span></span></div>");
        var offset = offset - 1;
        var sizeRotation = -179 + sliceSize;
        $("." + sliceID).css({
            "transform": "rotate(" + offset + "deg) translate3d(0,0,0)"
        });
        $("." + sliceID + " span").css({
            "transform": "rotate(" + sizeRotation + "deg) translate3d(0,0,0)",
            "background-color": color
        });
    }

    function iterateSlices(sliceSize, pieElement, offset, dataCount, sliceCount, color) {
        var sliceID = "s" + dataCount + "-" + sliceCount;
        var maxSize = 179;
        if (sliceSize <= maxSize) {
            addSlice(sliceSize, pieElement, offset, sliceID, color);
        } else {
            addSlice(maxSize, pieElement, offset, sliceID, color);
            iterateSlices(sliceSize - maxSize, pieElement, offset + maxSize, dataCount, sliceCount + 1, color);
        }
    }

    function createPie(dataElement, pieElement) {
        var listData = [];
        $(dataElement + " span").each(function () {
            listData.push(Number($(this).html()));
        });
        var listTotal = 0;
        for (var i = 0; i < listData.length; i++) {
            listTotal += listData[i];
        }
        var offset = 0;
        var color = [
            "cornflowerblue",
            "orange",
        ];
        for (var i = 0; i < listData.length; i++) {
            var size = sliceSize(listData[i], listTotal);
            iterateSlices(size, pieElement, offset, i, 0, color[i]);
            $(dataElement + " li:nth-child(" + (i + 1) + ")").css("border-color", color[i]);
            offset += size;
        }
    }
    createPie(".pieID.legend", ".pieID.pie");
}