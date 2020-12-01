
    <script src='/project-cs02/files/js/autofill_spec.js' type="text/javascript"></script>
    <div style="background:white;">
        <div class="container">
            <div class="contact-box">
            <div class="left" style="background-image: url(<?php echo Router::base_url().'/files/icons/doctor.svg' ?>)"></div>
                    <form method="get" action=<?php echo Router::site_url().'/Appointment/select_doctor' ?>>
                        <div class="right">
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
                            <div><input type="submit" value="Search" class="btn"></div>
                        </div>    
                    </form>    
            </div>
        </div>
    </body>
</html>