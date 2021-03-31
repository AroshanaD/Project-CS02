<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=<?php echo Router::base_url() . '/files/style1.css' ?> type="text/css" media="screen">
    <link rel="stylesheet" href=<?php echo Router::base_url() . '/files/print.css' ?> type="text/css" media="print">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <script src="<?php echo Router::base_url() . '/files/js/jquery-3.5.1.js' ?>"></script>
    <script src=<?php echo Router::base_url() . '/files/js/validation.js' ?> type="text/javascript"></script>
    <script src=<?php echo Router::base_url() . '/files/js/create_bill.js' ?> type="text/javascript"></script>
</head>

<body>
    <div class="container-8">
        <div class="nav">
            <?php include 'header.php'; ?>
        </div>

        <?php $path = $_SESSION['user_cat'] . "_sidebar.php";
        include $path; ?>

        <div class="form" id="spec">
            <div style="padding-top:15px"><div class="topic" style="margin:0">Patient Details</div></div>
            <form class="form-container3" id="bill-form">
                <div id="form-1" style="padding:0">
                    <div class="input"><input type="text" id="id" name="custId" placeholder="Customer NIC"></div></br>
                    <div class="input"><input type="text"id="customer_name" name="custName" placeholder="Customer Name" required></div></br>
                    <div id="form-message"></div>
                </div>
                <div id="form-2" style="padding:0">
                    <div class="input"><input type="text" id="age" name="custAge" placeholder="Customer Age" required></div></br>
                    <div class="input"><input type="tel" id="contact" name="custContact" placeholder="Customer Contact"></div></br>
                    <div style="align-text: center"><input type="submit" value="Create Bill" class="btn"></div>
                    <div id="form-message"></div>
                </div>
            </form>
        </div>

        <div class=table id="selected">
            <table id="test-tb">

            </table>
        </div>

        <div class="table" id="full-tb-div">
            <div class="search-bar">
                <div class="site-search">
                    <input id="name" type="text" placeholder="Name " name="name">
                </div>

                <div class="site-search">
                    <button id="search-btn" type="submit" name="search" style="font-size:18px">Search</button>
                </div>
            </div>
            <div class="pagination" style="width: 30%; text-align:right">
                <button class="next-btn" id="previous">Previous</button>
                <button class="next-btn" id="next">Next</button>
            </div>
            <div class="table" id="full-tb-div">
                <table id="full-tb">

                </table>
            </div>
        </div>

        <div class="footer">All rights are reserved</div>
    </div>
</body>

</html>