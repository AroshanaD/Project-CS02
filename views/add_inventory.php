<script type="text/javascript" src="/project-cs02/files/js/autofill_vendors.js"></script>
<script type="text/javascript" src="/project-cs02/files/js/validation.js"></script>
<script type="text/javascript" src="/project-cs02/files/js/medicine_validate.js"></script>

    <div style="background-image: linear-gradient(to left, oldlace, rgba(255, 255, 255, 0)), url(<?php echo Router::base_url().'/files/icons/undraw_medical_care_movn.png'?>);background-repeat: no-repeat">
        <div class="container">
                <div class="block">
                    <form action=<?php echo Router::site_url()."/Inventory/add" ?> method="post">
                       <div class="form-box">
                           <div class="title">Add Medicine</div>
                            <div class="label">
                                <label for="med_name" id="name_f">Medicine</label>
                            </div>
                            <div class="input">
                                <input type="text" name="med_name" id="name" required>
                            </div>
                            <div class="label">
                                <label for="med_description" id="description_f">Description</label>
                            </div>
                            <div class="input">
                                <input type="textarea" name="med_description" id="description" required>
                            </div>
                            <div class="label">
                                <label for="vendors">Vendors</label>
                            </div>
                            <div class="input">
                                <select name="vendors" id="vendors" required>
                                
                                </select>
                            </div>
                            <div class="label">
                                <label for="med_price">Unit Price</label>
                            </div>
                            <div class="input">
                                <input type="float" name="med_price" id="cost" required>
                            </div>
                            <div class="label">
                                <label for="med_quantity">Quantity</label>
                            </div>
                            <div class="input">
                                <input type="number" name="med_quantity" id="quantity" required>
                            </div>
                            <div class="btn-area"><input type="submit" name="addMedicine" value="Add" class="submit-btn"></div>
                            <div id="form-message"> </div>
                        </div >
                    </form>
                </div>
            </div>
        </div> 
    </body>

</html>