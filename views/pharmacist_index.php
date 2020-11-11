
    <div style="background-image: url(<?php echo Router::base_url().'/files/icons/undraw_authentication_fsn5.png'?>);">

        <div class="container">
            <div class="block">
                <div class="profile-card-details">
                    <div class="title">Pharmacist Profile</div>
                    <div class="field">Name:</div><div class="val_field"><?php echo $_SESSION['f_name'].' '.$_SESSION['l_name']?></div>
                    <div class="field">Contact :</div><div class="val_field"><?php echo $_SESSION['contact_no']?></div>
                    <div class="field">Email   :</div><div class="val_field"><?php echo $_SESSION['email']?></div>
                    <div class="field">Address :</div><div class="val_field"><?php echo $_SESSION['address']?></div>
                    
                </div>
            </div>
        </div>
        <div class="taskboard">
            <div class="col-5">
                    <div class="task-card">
                        <p>
                            <img src=<?php echo Router::base_url().'/files/icons/in-inventory.png'?> alt="manage inventory" style="width:50px; height:50px;">
                        </p>
                        Manage Inventory
                    </div>
                    <div class="dropdown-content">
                        <ul>
                            <li><a href=<?php echo Router::site_url()."/Inventory/view"?>>View Inventory</a></li>
                            <li><a href=<?php echo Router::site_url()."/Inventory/add"?>>Add Inventory</a></li>
                        </ul>
                    </div>
            </div>
            <div class="col-5">
                <a href=<?php echo Router::site_url().'/Inventory/create_bill' ?>>
                    <div class="task-card">
                        <p>
                            <img src=<?php echo Router::base_url().'/files/icons/money.png'?> alt='create bill'style="width:50px; height:50px;">
                        </p>
                        Create Bills
                    </div>
                </a>
            </div>
        </div>
    </body>
</html>