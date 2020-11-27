<!DOCTYPE html>
<html>
    <head>
        <title>Doctor Schedule</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href=<?php echo Router::base_url().'/files/style.css'?>>
        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        <script src=<?php echo Router::base_url().'/files/js/autofill_sche.js'?> type="text/javascript"></script>
        <script src=<?php echo Router::base_url().'/files/js/autofill_spec.js'?> type="text/javascript"></script>
    </head>

    <body>
        <div class="contact-box" style="max-width: 100%; margin: 50px 80px 10px 80px; height: 150px">
            <div class="left" style="background-image:url(<?php echo Router::base_url().'/files/icons/schedule.svg'?>)"></div>
            <div class="right" style="max-width: 800px">
                <form>
                    <div class="form-box">
                        <div class="input">
                            <select name="specialization" id="search_spec" required>
                                <option value="" selected>Select Specialization</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>    
        </div>
        <div class='container'>
            <div class='calendar' style="overflow-x:auto; border: 2px black solid">
                <div class='calendar-row'>
                    <div class='calendar-day'>Time</div>
                    <div class='calendar-day'>Monday</div>
                    <div class='calendar-day'>Tuesday</div>
                    <div class='calendar-day'>Wednesday</div>
                    <div class='calendar-day'>Thursday</div>
                    <div class='calendar-day'>Friday</div>
                    <div class='calendar-day'>Saturday</div>
                    <div class='calendar-day'>Sunday</div>
                </div>
            </div>
        </div>
    </body>
</html>
