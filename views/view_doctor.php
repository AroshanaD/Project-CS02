<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=<?php echo Router::base_url() . '/files/style1.css' ?>>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <script src="<?php echo Router::base_url() . '/files/js/jquery-3.5.1.js' ?>"></script>
    <script src=<?php echo Router::base_url() . '/files/js/autofill_spec.js' ?> type="text/javascript"></script>
    <script src=<?php echo Router::base_url() . '/files/js/doctors.js' ?> type="text/javascript"></script>
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
                <select name="specialization" id="search_spec">
                    <option value="" disabled selected hidden>Select Specialization</option>
                    <option value="">Any Specialization</option>
                </select>
            </div>

            <div class="search-bar">
                <div class="site-search">
                    <input type="text" id="id" placeholder="Doctor Id" name="id">
                </div>
                <div class="site-search">
                    <input type="text" id="name" placeholder="Doctor Name" name="name">
                </div>
                <div class="site-search">
                    <button id="search-btn" type="submit">Search</button>
                </div>
            </div>
        </div>

        <div class="table">
        <div class="topic">Doctors</div>

            <table>

            </table>
            <div class="pagination">
                <button class="next-btn" id="previous">Previous</button>
                <button class="next-btn" id="next">Next</button>
            </div>
        </div>
        <!--table-->
        <div class="footer">All rights are reserved</div>
    </div>
    <!--container-2-->
</body>

</html>