<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=<?php echo Router::base_url() . '/files/style1.css' ?>>
    <script src="<?php echo Router::base_url() . '/files/js/jquery-3.5.1.js' ?>"></script>
    <script src=<?php echo Router::base_url() . '/files/js/appointment_Patientview.js' ?> type="text/javascript"></script>
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
                    <input type="date" placeholder="Appointment Date" name="a_date" id="date">
                </div>
                <!--site-search-->
                <!--text-->
                <div class="site-search">
                    <button id="search-btn" type="submit">Search</button>
                </div>
                <!--site-search-->
                <!--btn-->

            </div>
            <!--search-bar-->
        </div>

        <div class="table">
                <table>

                </table>
                <div class="pagination">
                    <button class="next-btn" id="previous">Previous</button>
                    <button class="next-btn" id="next">Next</button>
                </div>

            </div>

        <div class="footer">All rights are reserved</div>
    </div>
    <!--container-2-->
</body>

</html>