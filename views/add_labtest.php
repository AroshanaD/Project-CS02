<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=<?php echo Router::base_url() . '/files/style1.css' ?> type="text/css" media="screen">
    <link rel="stylesheet" href=<?php echo Router::base_url() . '/files/print.css' ?> type="text/css" media="print">
    <script src="<?php echo Router::base_url() . '/files/js/jquery-3.5.1.js' ?>"></script>
    <script type="text/javascript" src="/project-cs02/files/js/create_labtest.js"></script>
    <script type="text/javascript" src="/project-cs02/files/js/validation.js"></script>
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
                    <div class="input" id="id_f">
                        <input type="text" name="id" id="id" placeholder="Customer NIC">
                    </div>
                    <div class="input" id="name_f">
                        <input type="text" id="p_name" name="full_name" placeholder="Customer Name" required>
                    </div>
                    <div class="input">
                        <input type="text" name="age" id="age" placeholder="Customer Age" required>
                    </div>
                </div>
                <div id="form-2" style="padding:0">
                    <div class="input">
                        <select name="gender" id="gender" required>
                            <option value="any">Select Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <div class="input" id="contact_f">
                        <input type="tel" id="contact" name="contact" placeholder="Customer Contact">
                    </div>
                    <div class="input" id="email_f">
                        <input type="email" id="email" name="email" placeholder="Customer Email">
                    </div>
                    <div style="align-text: center"><input type="submit" value="Add Test" class="btn"></div>
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
                <!--site-search-->
                <!--date-->
                <div class="site-search">
                    <button id="search-btn" type="submit" name="search" style="font-size:18px">Search</button>
                </div>
            </div>
            <div class="pagination" style="width: 30%; text-align:right">
                <button class="next-btn" id="previous">Previous</button>
                <button class="next-btn" id="next">Next</button>
            </div>
            <div class="table" id="select-tb-div">
                <table id="select-tb">

                </table>
            </div>
        </div>

        <div class="footer">All rights are reserved</div>
    </div>
</body>

</html>