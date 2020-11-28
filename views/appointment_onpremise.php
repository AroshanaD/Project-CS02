
    <script src='/project-cs02/files/js/autofill_spec.js' type="text/javascript"></script>
    <script src='/project-cs02/files/js/appointment_onpremise.js' type="text/javascript"></script>
    <div style="background-image: linear-gradient(to left,  oldlace, rgba(255, 255, 255, 0)), url(<?php echo Router::base_url().'/files/icons/undraw_doctors_hwty.png'?>);background-repeat:no-repeat">
        <div style="width:90%; display:flex; flex-wrap:wrap; margin:20px; justify-content:space-between;">
            <div class="block">
                <form>
                    <div class="form-box">
                        <div class="title">Search Doctor</div>
                        <div class="label">
                            <label for="doctor">Doctor name</label>
                        </div>
                        <div class="input">
                            <input type="text" id="doctor" name="doctor" pattern="[a-zA-Z]{1-9}">
                        </div>
                        <div class="label">
                            <label for="specialization">Specialization</label>
                        </div>
                        <div class="input">
                            <select name="specialization" id="search_spec" required>
                                <option disabled selected value="">Any Specialization</option>
                            </select>
                        </div>
                        <div class="btn-area"><input type="submit" value="Search" class="submit-btn"></div>
                    </div>    
                </form>    
            </div>
            <div id="doctor_list">
                <div class="title">Available Doctors</div>
            </div>
        </div>

        <div class="container">
            
        </div>
    </div>
</body>
</html>