<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href=<?php echo Router::base_url()."/files/style.css"?>>
    </head>
    <body style="background-image: linear-gradient(to left,  #fec007de, rgba(255, 255, 255, 0)), url(<?php echo Router::base_url().'/files/icons/undraw_doctor_kw5l.png'?>);">
    <?php include 'navigation.php';?>
        <div class="container-grid">
            <div class="doctor-card">
                <div class="card-details">
                    <img src=<?php echo Router::base_url()."/files/icons/doctor.png"?> style="width:40px">
                    Dr. Dasun Thanura Aroshana
                </div>
                <div class="card-details">
                    Cardiologist
                </div>
                <div>
                    <form method='get' action=<?php echo Router::site_url().'/appointment/select_date' ?>>
                        <input type="submit" value="Channel Now" class="channel-btn">
                    </form>
                </div>
            </div>
            <div class="doctor-card">
                <div class="card-details">
                    <img src=<?php echo Router::base_url()."/files/icons/doctor.png"?> style="width:40px">
                    Dr. Dasun Thanura Aroshana
                </div>
                <div class="card-details">
                    Cardiologist
                </div>
                <div>
                    <form method='get' action=<?php echo Router::site_url().'/appointment/select_date' ?>>
                        <input type="submit" value="Channel Now" class="channel-btn">
                    </form>
                </div>
            </div>
            
        </div>
    </body>
</html>