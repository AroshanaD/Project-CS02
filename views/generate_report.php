    <div style="background:white;">
        <div class="container">
                <div class="contact-box">
                <div class="left" style="background-image: url(<?php echo Router::base_url().'/files/icons/report.svg' ?>)"></div>
                    <form method = "POST">
                       <div class="right">
                           <div class="title">Reports</div>
                            <div class="label">
                                <label for="staff">Report type</label>
                            </div>
                            <div class="input">
                                <select name="category" id="category" required>
                                    <option value="" disabled hidden selected> Select Category </option>
                                    <option value="pharmacist">weekly report</option>
                                    <option value="lab_technician">monthly report</option>
                                    <option value="receptionist">yearly report</option>
                                </select>
                            </div>
                            <div class="label">
                                <label for="start_date">Since</label>
                            </div>
                            <div class="input" id="id_f">
                                <input type="date" name="start_date" id="start_date"  required>
                            </div>
                            <div class="label">
                                <label for="last_date">To</label>
                            </div>
                            <div class="input" id="id_f">
                                <input type="date" name="last_date" id="last_date"  required>
                            </div>
                            <div>
                                <input type="submit" name="Add" value="Generate" class="btn">
                            </div>
                            <div id="form-message"></div>
                        </div >
                    </form>
                </div>
            </div>
        </div> 
    </body>

</html>