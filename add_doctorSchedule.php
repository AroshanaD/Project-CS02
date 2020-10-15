<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <!--link rel="stylesheet" href="pharmasist.css"-->
    </head>

    <body>
    <div class="container-small">Hospital Management System</div>
        <div class="container">
            <div class="form-container">
                <div class="register">
                    <div class="form-name">Add Doctor Schedule</div>
                    <form action ="#" method = "POST">
                       <div class="form-box">
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
                            <div class="btn-area"><input type="submit" value="Add" class="inventory-btn"></div>
                        </div >
                    </form>
                </div>
            </div>
        </div> 
    </body>

</html>