<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="<?php echo Router::base_url() . '/files/js/jquery-3.5.1.js' ?>"></script>
    <script src="<?php echo Router::base_url() . '/files/js/appointment_overview.js' ?>"></script>
    <link rel="stylesheet" href=<?php echo Router::base_url() . '/files/style1.css' ?>>
</head>

<body>
    <div class="container-12">
        <div class="nav">
            <?php include 'header.php'; ?>
        </div>

        <?php $path = $_SESSION['user_cat'] . "_sidebar.php";
        include $path; ?>

        <div class="report">
            <div class="report-paper" style="height:400px">
                <div class="content">
                <div class="heading">
                    Bill Invoice </br></br>
                    <p style="font-size: 16px; font-weight: normal; text-align: left">+94 (0)11 2140 010 </p>
                    <p style="font-size: 16px; font-weight: normal; text-align: left">+94 (0)11 2140 050 </p>
                    <p style="font-size: 16px; font-weight: normal; text-align: left">medcaid.info@gmail.com </p>
                </div>
                    <table class="report-tb" id="app">

                    </table>
                </div>
            </div>
            <div class="report-paper">
                <div class="content">
                    <table class="report-tb" id="day">

                    </table>
                </div>
            </div>
            <div class="report-paper">
                <div class="content">
                    <table class="report-tb" id="doc">

                    </table>
                </div>
            </div>
            <div class="report-paper">
                <div class="content">
                    <table class="report-tb" id="spe">

                    </table>
                </div>
            </div>
        </div>

        <div class="footer">All rights are reserved</div>
    </div>
</body>

</html>