<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=<?php echo Router::base_url() . '/files/style1.css' ?>>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <script src="<?php echo Router::base_url().'/files/js/jquery-3.5.1.js' ?>"></script>
</head>

<body>
    <div class="container-2">
        <div class="nav">
            <?php include 'header.php'; ?>
        </div>

        <?php $path=$_SESSION['user_cat']."_sidebar.php"; include $path; ?>

        <form class="form" method="post">
            <div class="form-container1">
                <div id="form-img">
                </div>
                <div id="form-1">
                <div class="topic">Delete Test</div>
                    <div class="label">
                        <label for="test_id">Test Id</label>
                    </div>
                    <div class="input">
                        <input type="text" name="test_id" value="<?php echo ($_POST['test']['id']); ?>" disabled required>
                    </div>
                    <div class="label">
                        <label for="test_name">Test Name</label>
                    </div>
                    <div class="input">
                        <input type="text" name="test_name" value="<?php echo ($_POST['test']['name']); ?>" disabled required>
                    </div>
                    <div class="label">
                        <label for="test_description">Description</label>
                    </div>
                    <div class="input">
                        <input type="textarea" name="test_description" value="<?php echo ($_POST['test']['description']); ?>" disabled required>
                    </div>
                    <div class="label">
                        <label for="test_price">Unit Price</label>
                    </div>
                    <div class="input">
                        <input type="text" name="test_price" value="<?php echo ($_POST['test']['unit_cost']); ?>" disabled required>
                    </div>
                    <div><input type="submit" value="Delete" class="btn" name="Delete"></div>
                </div>
            </div>
        </form>
        <div class="footer">All rights are reserved</div>
    </div>
</body>

</html>