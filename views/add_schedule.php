<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href=<?php echo Router::base_url()."/files/style.css" ?>>
    </head>

    <body style="background-image: linear-gradient(to left,  #fec007de, rgba(255, 255, 255, 0)), url(<?php echo Router::base_url().'/files/icons/schedule_picture.png'?>);">
    
        
        <div class="container">
                <div class="block">
                    
                    <form action ="#" method = "POST">
                       <div class="form-box">
                        <div class="title">ADD DOCTOR SCHEDULE</div>   
                            <div class="label">
                                <label for="doc_id">Doctor Id</label>
                            </div>
                            <div class="input">
                                <input type="text" name="doc_id" required>
                            </div>
                            <div class="label">
                                <label for="doc_fname">First name</label>
                            </div>
                            <div class="input">
                                <input type="text" name="doc_fname" required>
                            </div>
                            <div class="label">
                                <label for="doc_lname">Last name</label>
                            </div>
                            <div class="input">
                                <input type="text" name="doc_lname" required>
                            </div>
                            <div class="label">
                                <label for="sche_id">Schedule Id</label>
                            </div>
                            <div class="input">
                                <input type="text" name="sche_id" required>
                            </div>
                            <div class="label">
                                <label for="sche_date">Schedule Date</label>
                            </div>
                            <div class="input">
                                <input type="date" name="sche_date" required>
                            </div>
                            <div class="label">
                                <label for="sche_time">Schedule Time</label>
                            </div>
                            <div class="input">
                                <input type="time" name="sche_time" required>
                            </div>
                            <div class="btn-area"><input type="submit" value="ADD" class="submit-btn"></div>
                        </div >
                    </form>
                </div>
         
        </div> 

    </body>

</html>