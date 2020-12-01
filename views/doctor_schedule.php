<script src=<?php echo Router::base_url().'/files/js/autofill_sche.js'?> type="text/javascript"></script>
<script src=<?php echo Router::base_url().'/files/js/autofill_spec.js'?> type="text/javascript"></script>

        <div class="container">
            <div class="container-t" style="width:95%; justify-content:center;">
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
        </div>
    </body>
</html>
