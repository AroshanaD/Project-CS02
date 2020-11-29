<script type="text/javascript" src="/project-cs02/files/js/validation.js"></script>
<script type="text/javascript" src="/project-cs02/files/js/medicine_validate.js"></script>

    <div style="background-image: linear-gradient(to left, oldlace, rgba(255, 255, 255, 0)), url(<?php echo Router::base_url().'/files/icons/undraw_medical_care_movn.png'?>);background-repeat: no-repeat">
        <div class="container">
                <div class="contact-box">
                    <div class="left" style="background-image: url(<?php echo Router::base_url().'/files/icons/vendor.svg' ?>)"></div>
                    <div class="right">
                    <form action=<?php echo Router::site_url()."/Inventory/add" ?> method="post">
                       <div class="form-box">
                           <div class="title">Add Vendor</div>
                            <div class="label">
                                <label for="name" id="name_f">Vendor</label>
                            </div>
                            <div class="input">
                                <input type="text" name="name" id="name" required>
                            </div>
                            <div class="label">
                                <label for="address">Address</label>
                            </div>
                            <div class="input" id="address_f">
                                <input type="text" id="address" name="address">
                            </div>
                            <div class="label">
                                <label for="contact">Contact No</label>
                            </div>
                            <div class="input" id="contact_f">
                                <input type="tel" id="contact" name="contact">
                            </div>
                            <div class="label">
                                <label for="email">Email Address</label>
                            </div>
                            <div class="input" id="email_f">
                                <input type="email" id="email" name="email">
                            </div>
                            <div class="btn-area"><input type="submit" name="addVendor" value="Add" class="btn"></div>
                            <div id="form-message"> </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> 
</body>

</html>