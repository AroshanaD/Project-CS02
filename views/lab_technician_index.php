
    <div style="background-image: url(<?php echo Router::base_url().'/files/icons/undraw_science_fqhl.png'?>);background-repeat:no-repeat">
        <div class="container">
            <div class="block">
                <div class="profile-card-details">
                    <div class="title">Lab Technician Profile</div>
                    <div class="field">Name:</div><div class="val_field"><?php echo $_SESSION['f_name'].' '.$_SESSION['l_name']?></div>
                    <div class="field">Contact:</div><div class="val_field"><?php echo $_SESSION['contact_no']?></div>
                    <div class="field">Email:</div><div class="val_field"><?php echo $_SESSION['email']?></div>
                    <div class="field">Address:</div><div class="val_field"><?php echo $_SESSION['address']?></div>
                </div>
            </div>
        </div>
        <div class="taskboard">
            <div class="task-card">
                <p>
                    <img src=<?php echo Router::base_url().'/files/icons/test-tube.png'?> alt="add test" style="width:50px; height:50px;">
                </p>
                <p>
                        Add Tests
                </p>
                <div class="dropdown-content">
                    <ul>
                        <li><a href=<?php echo Router::site_url().'/patientTest/create_test' ?>> Create Test</a></li>
                        <li><a href=<?php echo Router::site_url().'/patientTest/view' ?>> View Test</a></li>
                    </ul>
                </div>
            </div>
            <div class="task-card">
                <p>
                    <img src=<?php echo Router::base_url().'/files/icons/test-passed.png'?> alt="manage user" style="width:60px; height:60px;">
                </p>
                <p>
                            Lab Tests
                </p>
                <div class="dropdown-content">
                    <ul>
                        <li><a href=<?php echo Router::site_url()."/labtest/add" ?>>Add Test</a></li>
                        <li><a href=<?php echo Router::site_url()."/labtest/view" ?>>View Test</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </body>
</html>