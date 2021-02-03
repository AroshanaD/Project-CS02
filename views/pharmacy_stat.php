<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=<?php echo Router::base_url() . '/files/style1.css' ?>>
    <script src="<?php echo Router::base_url() . '/files/js/jquery-3.5.1.js' ?>"></script>
    <script src="<?php echo Router::base_url() . '/files/js/pharmacy_stat.js' ?>"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

</head>

<body>

    <div class="container-2">
        <div class="nav">
            <?php include 'header.php'; ?>
        </div>

        <?php $path = $_SESSION['user_cat'] . "_sidebar.php";
        include $path; ?>
        <div class="form">
            <div class="stat-div">

                <div class="d-flex grpdiv-outer">

                    <div class="grpdiv-inner-1">
                        <label class="input-label"> From</label><br>
                        <input type="date" style="width: 180px;" class="form-control"><br>

                        <label class="input-label"> To</label><br>
                        <input type="date" style="width: 180px;" class="form-control"><br>
                    </div>

                    <div class="grpdiv-inner-2 divcon">

                        <p>Platform Based Analysis</p>
                        <section>
                            <div class="pieID pie">

                            </div>
                            <ul class="pieID legend">
                                <li>
                                    <em>Online</em>
                                    <span id="online">1000</span>
                                </li>
                                <li>
                                    <em>At Hospital</em>
                                    <span id="hospital">1000</span>
                                </li>
                            </ul>
                        </section>

                    </div>

                    <div class="grpdiv-inner-2 divcon">
                        <p>Gender Based Analysis</p>

                        <div id="columnchart_values"></div>

                    </div>

                </div>

                <div class="d-flex grpdiv-outer">

                    <div class="grpdiv-inner-1 ">

                        <label class="input-label"> Month</label><br>
                        <input type="Month" class="form-control"><br>

                    </div>

                    <div class="grpdiv-inner-3 divcon" style="width: -webkit-fill-available;">
                        <p>Monthly Appointments</p>

                        <div id="chart_div1" class="Dchart"></div>

                    </div>

                </div>
            </div>
        </div>
        <div class="footer">All rights are reserved</div>
    </div>
</body>

</html>