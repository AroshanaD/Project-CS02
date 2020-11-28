$(document).ready(function(){
    $("#search_spec").change(function(){
        $.ajax({
        url: '../Doctor_Schedule/schedules',
        data: {specialization:$("#search_spec").val()},
        type: 'post',
        success:function(data){

        $('.calendar-doctor').remove();
        var calendar = [];
        var weekdays = [1,2,3,4,5,6,7];
        var time = data[0]['time'];
        console.log(typeof(time));
        row = [];
        row['time'] = data[0]['time'];
        weekdays.forEach(function(value){
            row[value] = [];
        })
        for (var i = 0; i < data.length; i++) {
                if(time != data[i]['time']){
                    time = data[i]['time'];
                    calendar.push(row);
                    row = [];
                    row['time'] = data[i]['time'];
                    weekdays.forEach(function(value){
                        row[value] = [];
                    })
                }
                switch(data[i]['date']){
                    case 'Monday':
                        row[1].push(data[i]['f_name'][0].concat('.',data[i]['l_name']));
                    break;
                    case 'Tuesday':
                        row[2].push(data[i]['f_name'][0].concat('.',data[i]['l_name']));
                    break;
                    case 'Wednesday':
                        row[3].push(data[i]['f_name'][0].concat('.',data[i]['l_name']));
                    break;
                    case 'Thursday':
                        row[4].push(data[i]['f_name'][0].concat('.',data[i]['l_name']));
                    break;
                    case 'Friday':
                        row[5].push(data[i]['f_name'][0].concat('.',data[i]['l_name']));
                    break;
                    case 'Saturday':
                        row[6].push(data[i]['f_name'][0].concat('.',data[i]['l_name']));
                    break;
                    case 'Sunday':
                        row[7].push(data[i]['f_name'].concat('.',data[i]['l_name']));
                    break;
                }
            }
            calendar.push(row);
            calendar.forEach(function(array){
                $(".calendar").append("<div class='calendar-doctor'>".concat(array['time'],'</div>'));
                weekdays.forEach(function(value){
                    if(array[value].length == 0){
                        $(".calendar").append("<div class='calendar-doctor'>");
                    }
                    else{
                        var doctors = "";
                        array[value].forEach(function(value){
                            doctors = doctors.concat("<div>",value);
                        })
                        $(".calendar").append("<div class='calendar-doctor' style='background-color:white; font-weight:bold;'>".concat(doctors,'</div>'));
                    }
                })
            })
        }
        })
    })
})