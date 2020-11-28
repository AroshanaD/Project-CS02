        <div class="container" style="min-height:700px">>
            <div class="contact-box" id="profile-board">
                <div class="left" style="background-image: url(<?php echo Router::base_url().'/files/icons/dashboard.svg' ?>)"></div>
                <div class="right" id="profile">
                    <div class="title">Supervisor Profile</div>
                    <div class="field">Name    :</div><div class="val_field"><?php echo $_SESSION['f_name'].' '.$_SESSION['l_name']?></div>
                    <div class="field">Contact :</div><div class="val_field"><?php echo $_SESSION['contact_no']?></div>
                    <div class="field">Address :</div><div class="val_field"><?php echo $_SESSION['email']?></div>
                    <div class="field">Email   :</div><div class="val_field"><?php echo $_SESSION['address']?></div>
                </div>
            </div>
            <div class="taskboard">
                <div class="contact-box" id="task">
                    <div class="left" style="background-image: url(<?php echo Router::base_url().'/files/icons/user_icon.svg'?>)"></div>
                <div class="right">
                    <div class="m-title">
                        Manage Users
                    </div>
                    <div class="dropdown-content">
                        <ul>
                            <li><a href=<?php echo Router::site_url()."/staff/add" ?>>Add Staff</a></li>
                            <li><a href=<?php echo Router::site_url()."/staff/view" ?>>View Staff</a></li>
                            <li><a href=<?php echo Router::site_url()."/doctors/add" ?>>Add Doctor</a></li>
                            <li><a href=<?php echo Router::site_url()."/doctors/view" ?>>View Doctor</a></li>
                        </ul>
                    </div>
                </div>
                </div>

                <div class="contact-box" id="task">
                    <div class="left" style="background-image: url(<?php echo Router::base_url().'/files/icons/inventory.svg'?>)"></div>
                <div class="right">
                    <div class="m-title">
                        Manage Inventory
                    </div>
                    <div class="dropdown-content">
                        <ul>
                            <li><a href=<?php echo Router::site_url()."/inventory/add?add=medicine" ?>>Add Medicine</a></li>
                            <li><a href=<?php echo Router::site_url()."/inventory/view" ?>>View Medicine</a></li>
                            <li><a href=<?php echo Router::site_url()."/inventory/add?add=vendor" ?>>Add Vendors</a></li>
                            <li><a href=<?php echo Router::site_url()."/inventory/view" ?>>View Vendors</a></li>
                        </ul>
                    </div>
                </div>
                </div>

                <div class="contact-box" id="task">
                    <div class="left" style="background-image: url(<?php echo Router::base_url().'/files/icons/schedule.svg'?>)">
                </div>
                <div class="right">
                    <div class="m-title">
                        Manage Schedules
                    </div>
                    <div class="dropdown-content">
                        <ul>
                            <li><a href=<?php echo Router::site_url()."/schedules/add" ?>>Add Schedules</a></li>
                            <li><a href=<?php echo Router::site_url()."/schedules/view" ?>>View Schedules</a></li>
                        </ul>
                    </div>
                    </div>
                </div>

                <div class="contact-box" id="task">
                    <div class="left" style="background-image: url(<?php echo Router::base_url().'/files/icons/statistics.svg'?>)">
                </div>
                <div class="right">
                    <div class="m-title">
                        View Statistics
                    </div>
                    <div class="dropdown-content">
                        <ul>
                            <li><a href=<?php echo Router::site_url()."/statistics/weekly" ?>>Weekly</a></li>
                            <li><a href=<?php echo Router::site_url()."/statistics/monthly" ?>>Monthly</a></li>
                            <li><a href=<?php echo Router::site_url()."/statistics/yearly" ?>>Yearly</a></li>
                        </ul>
                    </div>
                    </div>
                </div>

            </div>
        </div>
    </body>
</html>