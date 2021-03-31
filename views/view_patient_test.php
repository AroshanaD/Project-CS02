<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=<?php echo Router::base_url() . '/files/style1.css' ?>>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <script src="<?php echo Router::base_url() . '/files/js/jquery-3.5.1.js' ?>"></script>
    <script src=<?php echo Router::base_url() . '/files/js/patient_test.js' ?> type="text/javascript"></script>
</head>

<body>
    <div class="container-4">
        <div class="nav">
            <?php include 'header.php'; ?>
        </div>

        <?php $path = $_SESSION['user_cat'] . "_sidebar.php";
        include $path; ?>

        <div class="search">
            <div class="search-bar">
                <div class="site-search">
                    <input type="text" placeholder="Test Id" name="id" id="id">
                </div>
                <div class="site-search">
                    <input type="text" placeholder="Patient Name" name="testname" id="name">
                </div>
                <div class="site-search">
                    <input type="Date" placeholder="Test Date" name="date" id="date">
                </div>
                <div class="site-search">
                    <select name="availability" id="available">
                        <option value=0>Not Available</option>
                        <option value=1>Available</option>
                        <option value=2>Both</option>
                    </select>
                </div>
                <div class="site-search">
                    <button id="search-btn" type="submit">Search</button>
                </div>
            </div>
        </div>

        <div class="table">
            <table>

            </table>

            <div class="pagination">
                <button id="previous" class="next-btn">Previous</button>
                <button id="next" class="next-btn">Next</button>
            </div>
        </div>

        <div class="footer">All rights are reserved</div>
    </div>
    <!--container-2-->
</body>

</html>