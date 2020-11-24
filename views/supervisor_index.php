
    <div style="background-image:linear-gradient(to left,  oldlace, rgba(255, 255, 255, 0)),url(<?php echo Router::base_url().'/files/icons/undraw_authentication_fsn5.png'?>); background-repeat: no-repeat">

        <div class="container" >
            <div class="block">
                <div class="profile-card-details">
                    <div class="title">Supervisor Profile</div>
                    <div class="field">Name    :</div><div class="val_field"><?php echo $_SESSION['f_name'].' '.$_SESSION['l_name']?></div>
                    <div class="field">Contact :</div><div class="val_field"><?php echo $_SESSION['contact_no']?></div>
                    <div class="field">Address :</div><div class="val_field"><?php echo $_SESSION['email']?></div>
                    <div class="field">Email   :</div><div class="val_field"><?php echo $_SESSION['address']?></div>
                </div>
            </div>
        </div>
        <div class="taskboard">
            <div class="col-5">
                    <div class="task-card">
                        <p>
                            <img src=<?php echo Router::base_url().'/files/icons/group.png'?> alt="manage user" style="width:60px; height:60px;">
                        </p>
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
            <div class="col-5">
                    <div class="task-card">
                        <p>
                            <img src=<?php echo Router::base_url().'/files/icons/in-inventory.png'?> alt="mange inventory" style="width:50px; height:50px;">
                        </p>
                        Manage Inventory
                    </div>
                    <div class="dropdown-content">
                        <ul>
                            <li><a href=<?php echo Router::site_url()."/inventory/add" ?>>Add Medicine</a></li>
                            <li><a href=<?php echo Router::site_url()."/inventory/view" ?>>View Inventory</a></li>
                            <li><a href=<?php echo Router::site_url()."/inventory/view" ?>>Add Vendors</a></li>
                            <li><a href=<?php echo Router::site_url()."/inventory/view" ?>>View Vendors</a></li>
                        </ul>
                    </div>
            </div>
            <div class="col-5">
                    <div class="task-card">
                        <p>
                            <img src=<?php echo Router::base_url().'/files/icons/overtime.png'?> alt="manage schedule" style="width:50px; height:50px;">
                        </p>
                        Manage Schedules
                    </div>
                    <div class="dropdown-content">
                        <ul>
                            <li><a href=<?php echo Router::site_url()."/schedules/add" ?>>Add Schedules</a></li>
                            <li><a href=<?php echo Router::site_url()."/schedules/view" ?>>View Schedules</a></li>
                        </ul>
                    </div>
            </div>
            <div class="col-5">
                    <div class="task-card">
                        <p>
                            <img src=<?php echo Router::base_url().'/files/icons/area-chart.png'?> alt="view statistic" style="width:50px; height:50px;">
                        </p>
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
    </body>
</html>