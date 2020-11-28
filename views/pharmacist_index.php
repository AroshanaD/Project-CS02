
<div class="container" style="min-height:700px">
            <div class="contact-box" id="profile-board">
                <div class="left" style="background-image: url(<?php echo Router::base_url().'/files/icons/dashboard.svg' ?>)"></div>
                <div class="right" id="profile">
                    <div class="title">Pharmacist Profile</div>
                    <div class="field">Name:</div><div class="val_field"><?php echo $_SESSION['f_name'].' '.$_SESSION['l_name']?></div>
                    <div class="field">Contact :</div><div class="val_field"><?php echo $_SESSION['contact_no']?></div>
                    <div class="field">Email   :</div><div class="val_field"><?php echo $_SESSION['email']?></div>
                    <div class="field">Address :</div><div class="val_field"><?php echo $_SESSION['address']?></div>
                </div>
            </div>
            <div class="taskboard">
                <div class="contact-box" id="task">
                    <div class="left" style="background-image: url(<?php echo Router::base_url().'/files/icons/inventory.svg'?>)">
                </div>
                <div class="right">
                    <div class="s-title">
                        Manage Inventory
                    </div>
                    <div class="dropdown-content">
                        <ul>
                            <li><a href=<?php echo Router::site_url()."/Inventory/view"?>>View Inventory</a></li>
                            <li><a href=<?php echo Router::site_url()."/Inventory/add"?>>Add Inventory</a></li>
                        </ul>
                    </div>
                    </div>
                </div>

                <div class="contact-box" id="task">
                    <div class="left" style="background-image: url(<?php echo Router::base_url().'/files/icons/bill.svg'?>)">
                </div>
                <div class="right">
                    <div class="s-title">
                        Create Bill
                    </div>
                    <div class="dropdown-content">
                        <ul>
                            <li><a href=<?php echo Router::site_url()."/Inventory/create_bill"?>>Create Bill</a></li>
                        </ul>
                    </div>
                    </div>
                </div>

            </div>
        </div>
    </body>
</html>