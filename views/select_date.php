
    <script src=<?php echo Router::base_url().'/files/js/autofill_spec.js'?> type="text/javascript"></script>
    <script src=<?php echo Router::base_url().'/files/js/select_date.js'?> type="text/javascript"></script>

    <div style="background-color: white, url(<?php echo Router::base_url().'/files/icons/schedule_picture.png'?>);background-repeat:no-repeat">
    <div class ="container">
        <div class = "container-t">
            <div class="topic1">Select Date</div>
            <div class="contact-box" style="width:40%; box-shadow:none">
                <div class="left" style="background-image: url(<?php echo Router::base_url().'/files/icons/dashboard.svg' ?>)"></div>
                <div class="right" id="profile">
                    <div class="field">Name</div><div class="val_field"><?php echo "Dr. ".$_SESSION['appointment']['doctor_name']?></div>
                    <div class="field">Specialization</div><div class="val_field"><?php echo $_SESSION['search']['specialization']?></div>
                    <div class="field">Qualification</div><div class="val_field"><?php echo $_SESSION['appointment']['doctor_qualification']?></div>
                    <div class="field">Fee</div><div class="val_field"><?php echo "Rs.".$_SESSION['appointment']['doctor_fee']?></div>
                </div>
            </div>
            <div class="table" style="width:50%">
                <table style="width:fit-content">
                  
                </table>
            </div><!--container-2-->
        </div>
    </div>
    </div>      <!--container-->
    </body>
</html>