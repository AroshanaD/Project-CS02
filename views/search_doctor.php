
    <script src='/project-cs02/files/js/autofill_spec.js' type="text/javascript"></script>
    <div style="background-image: linear-gradient(to left,  oldlace, rgba(255, 255, 255, 0)), url(<?php echo Router::base_url().'/files/icons/undraw_doctors_hwty.png'?>);background-repeat:no-repeat">
        <div class="container">
            <div class="block">
                    <form method="get" action=<?php echo Router::site_url().'/Appointment/select_doctor' ?>>
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