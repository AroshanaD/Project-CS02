<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=<?php echo Router::base_url() . '/files/style1.css' ?>>
    <script src="<?php echo Router::base_url() . '/files/js/jquery-3.5.1.js' ?>"></script>
    <script type="text/javascript" src=<?php echo Router::base_url() . '/files/js/staff.js' ?>></script>
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
                <select name="specialization" id="staff">
                    <option value="" disabled selected hidden>Select Category</option>
                    <option value="pharmacist">Pharmacist</option>
                    <option value="lab_technician ">Lab technician</option>
                    <option value="receptionist">Receptionist</option>
                    <option value="supervisor">Supervisor</option>
                </select>
            </div>
            <div class="search-bar">
                <div class="site-search">
                    <input type="text" id="id" placeholder="Id" name="id">
                </div>
                <!--site-search-->
                <!--text-->
                <div class="site-search">
                    <input type="text" id="name" placeholder="Name" name="name">
                </div>
                <!--site-search-->

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

            <div>
                <input type="submit" value="Next" class="next-btn">
                <input type="submit" value="Previous" class="next-btn">
            </div>

        </div>
        </form>

        <div class="footer">All rights are reserved</div>
    </div>
</body>

</html>