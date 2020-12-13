<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=<?php echo Router::base_url() . '/files/style1.css' ?>>
    <script src="<?php echo Router::base_url().'/files/js/jquery-3.5.1.js' ?>"></script>
    <script type="text/javascript" src="/project-cs02/files/js/autofill_vendors.js"></script>
    <script type="text/javascript" src="/project-cs02/files/js/validation.js"></script>
    <script type="text/javascript" src="/project-cs02/files/js/medicine_validate.js"></script>
</head>

<body>
    <div class="container-2">
        <div class="nav">
            <?php include 'header.php'; ?>
        </div>

        <?php $path=$_SESSION['user_cat']."_sidebar.php"; include $path; ?>
        
        <form class="form">
            <div class="form-container1">
                <div id="form-img">
                </div>
                <div id="form-1">
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
                        <label for="vendors">Vendor</label>
                    </div>
                    <div class="input">
                        <select name="vendors" id="vendors" required>

                        </select>
                    </div>
                    <div class="label">
                        <label for="med_price">Unit Price</label>
                    </div>
                    <div class="input">
                        <input type="float" name="med_price" id="price" required>
                    </div>
                    <div class="label">
                        <label for="med_quantity">Quantity</label>
                    </div>
                    <div class="input">
                        <input type="number" name="med_quantity" id="quantity" required>
                    </div>
                    <div><input type="submit" name="addMedicine" value="Add" class="btn"></div>
                    <div id="form-message"> </div>
                </div>
            </div>
        </form>
        <div class="footer">All rights are reserved</div>
    </div>
</body>

</html>