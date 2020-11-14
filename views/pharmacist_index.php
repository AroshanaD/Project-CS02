
    <div style="background-image: url(<?php echo Router::base_url().'/files/icons/undraw_authentication_fsn5.png'?>);background-repeat:no-repeat">

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
            <div class="task-card">
                <p>
                    <img src=<?php echo Router::base_url().'/files/icons/in-inventory.png'?> alt="manage inventory" style="width:50px; height:50px;">
                </p>
                <p>
                            Manage Inventory
                </p>
               <div class="dropdown-content">
                    <ul>
                        <li><a href=<?php echo Router::site_url()."/Inventory/view"?>>View Inventory</a></li>
                        <li><a href=<?php echo Router::site_url()."/Inventory/add"?>>Add Inventory</a></li>
                    </ul>
                </div> 
            </div>
            <div class="task-card">
                <p>
                    <img src=<?php echo Router::base_url().'/files/icons/money.png'?> alt='create bill'style="width:50px; height:50px;">
                </p>
                <p>
                        Create Bills
                </p>
                <div class="dropdown-content">
                    <ul>
                        <li><a href=<?php echo Router::site_url()."/Inventory/create_bill"?>>Create Bill</a></li>
                    </ul>
                </div> 
            </div>
        </div>
    </body>
</html>