
    <div style="background:white;">
        <div class="container">
                <div class="contact-box">
                <div class="left" style="background-image: url(<?php echo Router::base_url().'/files/icons/lab_test.svg' ?>)"></div>
                    <form method = "POST">
                       <div class="right">
                           <div class="title">Create Lab Test</div>
                            <h1>Patient Details</h1>
                            <div class="label">
                                <label for="patient_id">Patient Id</label>
                            </div>
                            <div class="input">
                                <input type="text" name="patient_id" value="1" disabled required>
                            </div>
                            <div class="label">
                                <label for="full_name">Patient name</label>
                            </div>
                            <div class="input">
                                <input type="text" name="full_name" value="Nimal perera " disabled required>
                            </div>
                            <div class="label">
                                <label for="test">Test name</label>
                            </div>
                            <div class="input">
                                <input type="text" name="test" value="ECG" disabled required>
                            </div>
                            <div class="label">
                                <label for="date">Date</label>
                            </div>
                            <div class="input">
                                <input type="date" name="date" value="2020-11-29" disabled required>
                            </div>
                            <div class="label">
                                <label for="availability">Availability</label>
                            </div>
                            <div class="input">
                                <select name="test1" required>
                                    <option value="unavailable">Unavailable</option>
                                    <option value="available">Available</option>
                                </select>
                            </div>
                            <div><input type="submit" value="mark Availability" name="available" class="btn"></div>
                        </div >
                    </form>
                </div>
            </div>
        </div> 
    </body>

</html>