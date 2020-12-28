<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=<?php echo Router::base_url() . '/files/style1.css' ?>>
    <script src="<?php echo Router::base_url().'/files/js/jquery-3.5.1.js' ?>"></script>
    <script src=<?php echo Router::base_url() . '/files/js/create_bill.js' ?> type="text/javascript"></script>
</head>

<body>
    <div class="container-l">
        <div class="nav">
            <?php include 'header.php'; ?>
        </div>

        <?php $path=$_SESSION['user_cat']."_sidebar.php"; include $path; ?>
        
        <div class=table id="selected">
            <table id="selec-tb">

            </table>
        </div>
        <div class="form">
            <form class="form-container1">
                <div id="form-img"></div>
                <div id="form-1">
                    
                <div class="topic-small">Create Bill</div>
                    <div class="input"><input type="text" name="custName" placeholder="Customer Name" required></div></br>
                    <div class="input"><input type="text" name="custAge" placeholder="Customer Age" required></div></br>
                    <div class="input"><input type="text" name="orderDate" placeholder="Order Date" required></div></br>
                    <div class="input"><input type="submit" value="Create Bill" class="btn"></div>
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
                <table id="full-tb">

                </table>
            </div>
        </div>

        <div class="footer">All rights are reserved</div>
    </div>
</body>

</html>