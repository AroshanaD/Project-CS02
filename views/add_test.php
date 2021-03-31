<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=<?php echo Router::base_url() . '/files/style1.css' ?>>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <script src="<?php echo Router::base_url().'/files/js/jquery-3.5.1.js' ?>"></script>
    <script rel="text/javascript" src="/project-cs02/files/js/labtest_validate.js"></script>
    <script rel="text/javascript" src="/project-cs02/files/js/validation.js"></script>
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
                <div class="topic">Add Tests</div>
                    <div class="label">
                        <label for="test_name" id="name_f">Test Name</label>
                    </div>
                    <div class="input">
                        <input type="text" id="name" name="test_name" required>
                    </div>
                    <div class="label">
                        <label for="test_description" id="desccription_f">Description</label>
                    </div>
                    <div class="input">
                        <input type="textarea" id="description" name="test_description" required>
                    </div>
                    <div class="label">
                        <label for="test_price" id="cost_f">Unit Price</label>
                    </div>
                    <div class="input">
                        <input type="num" id="cost" name="test_price" required>
                    </div>
                    <div><input type="submit" value="Add" name="Add" class="btn"></div>
                    <div id="form-message"></div>
                </div>
            </div>
        </form>
        <div class="footer">All rights are reserved</div>
    </div>
</body>

</html>