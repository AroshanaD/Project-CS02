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
                <div id="form-1"> <div class="topic">Delete Medicine</div>
                    <div class="label">
                        <label for="med_id">Medicine Id</label>
                    </div>
                    <div class="input">
                        <input type="text" name="med_id" value="<?php echo $_POST['medicine']['id']; ?>" disabled>
                    </div>
                    <div class="label">
                        <label for="med_name">Medicine Name</label>
                    </div>
                    <div class="input">
                        <input type="text" name="med_name" value="<?php echo ucwords($_POST['medicine']['name']); ?>" disabled>
                    </div>
                    <div class="label">
                        <label for="med_vendor">Vendor</label>
                    </div>
                    <div class="input">
                        <input type="text" name="med_vendor" value="<?php echo ucwords($_POST['medicine']['vendor']); ?>" disabled>
                    </div>
                    <div class="label">
                        <label for="med_description">Description</label>
                    </div>
                    <div class="input">
                        <input type="textarea" name="med_description" value="<?php echo $_POST['medicine']['description']; ?>" disabled>
                    </div>
                    <div class="label">
                        <label for="med_price">Unit Price</label>
                    </div>
                    <div class="input">
                        <input type="text" name="med_price" value="<?php echo $_POST['medicine']['unit_price']; ?>" disabled>
                    </div>
                    <div class="label">
                        <label for="med_quantity">Quantity</label>
                    </div>
                    <div class="input">
                        <input type="text" name="med_quantity" value="<?php echo $_POST['medicine']['quantity']; ?>" disabled>
                    </div>

                    <div>
                        <input type="submit" value="Delete" class="btn" name="deleteMedicine">
                    </div>
                </div>
            </div>
        </form>
        <div class="footer">All rights are reserved</div>
    </div>
</body>

</html>