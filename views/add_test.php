<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=<?php echo Router::base_url() . '/files/style1.css' ?>>
    <script rel="text/javascript" src="/project-cs02/files/js/labtest_validate.js"></script>
    <script rel="text/javascript" src="/project-cs02/files/js/validation.js"></script>
</head>

<body>
    <div class="container-2">
        <div class="nav">
            <a href=<?php echo Router::site_url() . '/user/logout' ?> style="float:right">Log Out</a>
            <a href=<?php echo Router::site_url() . '/user/dashboard' ?> style="float:right">Dashboard</a>
            <button id="nav-icon">
            </button>
            <button id="close-icon">
            </button>
        </div>

        <?php include 'labtech_sidebar.php'; ?>

        <form class="form">
            <div class="form-container1">
                <div id="form-img">
                </div>
                <div id="form-1">
                    <div class="label">
                        <label for="test_name" id="name_f">Test name</label>
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