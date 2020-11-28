
    <div style="background:white;">
        <div class="container">
            <div class="contact-box">
            <div class="left" style="background-image: url(<?php echo Router::base_url().'/files/icons/schedule.svg' ?>)"></div>
                    <form action ="#" method = "POST">
                       <div class="right">
                            <div class="title">Update Doctor Schedule</div>
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
                            <div>
                                <input type="submit" value="Update" class="btn">
                            </div>
                        </div >
                    </form>
            </div>
        </div> 
    </body>

</html>