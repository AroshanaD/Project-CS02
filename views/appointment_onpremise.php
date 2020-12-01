
    <script src=<?php echo Router::base_url().'/files/js/autofill_spec.js'?> type="text/javascript"></script>
    <script src=<?php echo Router::base_url().'/files/js/appointment_onpremise.js'?> type="text/javascript"></script>

    <div class ="container">
        <div class="container-t" style="justify-content:center">
            <div class="topic1">Doctor Appointment</div>
            <div class="contact-box" style="margin:10px">
                <div class="left" style="background-image: url(<?php echo Router::base_url().'/files/icons/appointment.svg' ?>)"></div>
                <div class="right" style="max-width:500px">
                    <form method="post" action="<?php echo Router::site_url().'/appointment/fill_form' ?>">
                        <div class="s-title">Appointment Details</div>
                        
                        <div class="label">
                            <label for="doctor">Select Doctor</label>
                        </div>
                        <div class="input">
                            <select name="doctor" id="doctor" required>
                                
                            </select>
                        </div>
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
                            <select name="specialization" id="search_spec">
                                <option value="Any">Any Specialization</option>
                            </select>
                        </div>
                        <div class="label">
                            <label for="weekday">Week Day</label>
                        </div>
                        <div class="input">
                            <select name="weekday" id="weekday">
                                <option value="Any">Any Day</option>
                                <option value="Monday">Monday</option>
                                <option value="Tuesday">Tuesday</option>
                                <option value="Wednesday">Wednesday</option>
                                <option value="Thursday">Thursday</option>
                                <option value="Friday">Friday</option>
                                <option value="Saturday">Saturday</option>
                                <option value="Sunday">Sunday</option>
                            </select>
                        </div>
                        <div class="label">
                            <label for="date">Appointment Date</label>
                        </div>
                        <div class="input">
                            <input type="date" name="date" required>
                        </div>
                                
                        <div><input type="submit" value="Select" class="btn"></div>
                    </form>
                </div>
            </div>
            <div class="contact-box" style="margin:10px">
                <div class="right" style="width:350px; background-color:white">
                    <div class="title" style="border:none">Doctor Details</div>
                    <div class="field">Name</div><div class="val_field"></div>
                    <div class="field">Specialization</div><div class="val_field"></div>
                    <div class="field">Qualification</div><div class="val_field"></div>
                    <div class="field">Fee</div><div class="val_field"></div>
                </div>
                <div class="right">
                    <div class="title" style="border:none">Week Schedule</div>
                    <div class="table" style="width: inherit; border: none">
                        <table style="width:fit-content">

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>