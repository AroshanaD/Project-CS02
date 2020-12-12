<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=<?php echo Router::base_url() . '/files/style1.css' ?>>
    <script type="text/javascript" src="/project-cs02/files/js/validation.js"></script>
    <script type="text/javascript" src="/project-cs02/files/js/vendor_validate.js"></script>
</head>

<body>
    <div class="container-2">
        <div class="nav">
            <a href='/user/logout' style="float:right">Log Out</a>
            <a href='/user/dashboard' style="float:right">Dashboard</a>
            <button id="nav-icon">
            </button>
            <button id="close-icon">
            </button>
        </div>

        <?php include 'Supervisor_sidebar.php'; ?>

        <form class="form">
            <div class="form-container1">
                <div id="form-img">
                </div>
                <div id="form-1">
                    <div class="label">
                        <label for="name" id="name_f">Vendor</label>
                    </div>
                    <div class="input">
                        <input type="text" name="name" id="name" required>
                    </div>
                    <div class="label">
                        <label for="address">Address</label>
                    </div>
                    <div class="input" id="address_f">
                        <input type="text" id="address" name="address">
                    </div>
                    <div class="label">
                        <label for="contact">Contact No</label>
                    </div>
                    <div class="input" id="contact_f">
                        <input type="tel" id="contact" name="contact">
                    </div>
                    <div class="label">
                        <label for="email">Email Address</label>
                    </div>
                    <div class="input" id="email_f">
                        <input type="email" id="email" name="email">
                    </div>
                    <div class="btn-area"><input type="submit" name="addVendor" value="Add" class="btn"></div>
                    <div id="form-message"> </div>
                </div>
            </div>
        </form>
        <div class="footer">All rights are reserved</div>
    </div>
</body>

</html>