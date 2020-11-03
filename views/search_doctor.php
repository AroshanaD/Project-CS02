<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href=<?php echo Router::base_url().'/files/style.css'?>>
        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        <script src='/project-cs02/files/js/autofill_sch.js' type="text/javascript"></script>

    </head>
    <body style="background-image: linear-gradient(to left,  #fec007de, rgba(255, 255, 255, 0)), url(<?php echo Router::base_url().'/files/icons/undraw_doctors_hwty.png'?>);">
        <div class="container">
            <div class="block">
                    <form method="get" action=<?php echo Router::site_url().'/Appointment/doctors' ?>>
                        <div class="form-box">
                            <div class="title">Search Doctor</div>
                            <div class="label">
                                <label for="doctor">Doctor name</label>
                            </div>
                            <div class="input">
                                <input type="text" name="doctor">
                            </div>
                            <div class="label">
                                <label for="specialization">Specialization</label>
                            </div>
                            <div class="input">
                                <select name="specialization" id="search_spec" required>
                                    <option value="Any">Any Specialization</option>
                                </select>
                            </div>
                            <div class="label">
                                <label for="birthday">Appointment Date</label>
                            </div>
                            <div class="input">
                                <input type="date" name="date">
                            </div>
                        
                            <div class="btn-area"><input type="submit" value="Search" class="submit-btn"></div>
                        </div>    
                    </form>    
            </div>
        </div>
    </body>
</html>