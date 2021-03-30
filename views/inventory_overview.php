<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="<?php echo Router::base_url() . '/files/js/jquery-3.5.1.js' ?>"></script>
        <script src="<?php echo Router::base_url() . '/files/js/inventory_overview.js' ?>"></script>
        <link rel="stylesheet" href=<?php echo Router::base_url() . '/files/print.css' ?> type="text/css" media="print"></head>
        <link rel="stylesheet" href=<?php echo Router::base_url() . '/files/style1.css' ?> type="text/css" media="screen">
    </head>

    <body>
        <div class="container-12">
            <div class="nav">
                <?php include 'header.php'; ?>
            </div>

            <?php $path = $_SESSION['user_cat'] . "_sidebar.php";
            include $path; ?>

<div class="report">
            <div class="topic" style="width:100%; text-align:center">Inventory Report</div>
            <div class="report" id="inner">
            <div class="report-paper">
                <div class="content">
                <div class="heading">
                    Inventory Overview Report </br></br>
                    <p style="font-size: 16px; font-weight: normal; text-align: left">
                        <?php echo $_POST['from_date']; ?> --- <?php echo $_POST['to_date']; ?> </p>
                </div>
                    <table class="report-tb" id="app">

                    </table>
                </div>
            </div>
            <div class="report-paper">
                <div class="content">
                    <div class="heading">Medicines manufacture in this month</div><br>
                    <table class="report-tb" id="manu">

                    </table>
                </div>
            </div>
            <div class="report-paper">
                <div class="content">
                <div class="heading">Medicines expire in this month</div><br>
                    <table class="report-tb" id="expire">

                    </table>
                </div>
            </div>

            </div>
            <div style="width:100%;text-align:center">
                <button class="btn" id="print">Print</button>
            </div>
        </div>

            <div class="footer">All rights are reserved</div>
        </div>
    </body>
</html>