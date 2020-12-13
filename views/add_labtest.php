<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=<?php echo Router::base_url() . '/files/style1.css' ?>>
    <script src="<?php echo Router::base_url().'/files/js/jquery-3.5.1.js' ?>"></script>
    <script type="text/javascript" src="/project-cs02/files/js/select_labtest.js"></script>
    <script type="text/javascript" src="/project-cs02/files/js/validation.js"></script>
</head>

<body>
    <div class="container-l">
        <div class="nav">
            <?php include 'header.php'; ?>
        </div>

        <?php $path=$_SESSION['user_cat']."_sidebar.php"; include $path; ?>

        <div class=table id="selected">
            <table id="test-tb">

            </table>
        </div>
        <div class="form" style="background: none">
            <form class="form-container">
                <div id="form-img"></div>
                <div id="form-1">
                    <div class="input">
                        <input style="width:200px" type="number" name="test_id" value="<?php echo $_POST['test_id'] ?>" disabled required>
                    </div>
                    <div class="input" id="id_f">
                        <input style="width:200px" type="text" name="id" id="id" placeholder="Customer ID" required>
                    </div>
                    <div class="input" id="name_f">
                        <input style="width:200px" type="text" id="name" name="full_name" placeholder="Customer Name" required>
                    </div>
                    <div class="input">
                        <input style="width:200px" type="text" name="age" id="age" placeholder="Customer Age" required>
                    </div>
                </div>
                <div id="form-2">
                    <div class="input">
                        <select style="width:200px" name="gender" id="gender" required>
                            <option value="any">Select gender</option>
                            <option value="male">Male</option>
                            <option value="female">female</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <div class="input" id="contact_f">
                        <input style="width:200px" type="tel" id="contact" name="contact" placeholder="Customer Contact" required>
                    </div>
                    <div style="width:100%; text-align: center">
                        <input style="width:200px" type="submit" value="Add Test" class="btn">
                    </div>
                    <div id="form-message"></div>
                </div>
            </form>
        </div>
        <div class="table">
            <div class="search-bar" style="width: 400px">
                <div class="site-search">
                    <input id="name" type="text" placeholder="Name " name="name">
                </div>
                <!--site-search-->
                <!--date-->
                <div class="site-search">
                    <button id="search-btn" type="submit" name="search" style="font-size:18px">Search</button>
                </div>
            </div>
            <div class="table">
                <table id="select-tb">

                </table>
            </div>
        </div>

        <div class="footer">All rights are reserved</div>
    </div>
</body>

</html>