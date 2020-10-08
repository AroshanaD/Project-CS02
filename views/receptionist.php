<nav>
            <ul>
                <li class = "col-1"><a class="active" href=<?php echo(Router::site_url().'/main')?>> <img src=<?php echo(Router::base_url().'/files/icons/home.png')?>></a></li>
                <li class = "col-2"><a href="#">About Us</a></li>
                <li class = "col-2"><a href="#">Contact Us</a></li>
            </ul>
        </nav>
        <div class = "row">
            <div class = "col-12">
                <div class = "block-2">
                    <p>Receptionist Profile</p>
                </div>
                <div class = "block-1">

                </div>
            </div>
        </div>
        <div class = "row">
            <div class = "col-6">
            <a href=<?php echo(Router::site_url().'/users/index/patient')?>>
                <div class = "block-0">
                    <div>
                    <p><img src=<?php echo(Router::base_url().'/files/icons/patient.png')?>><p>
                    <p>View Appointments<p>
                </div>
                </div>
            </a>
            </div>
            <div class = "col-6">
            <a href=<?php echo(Router::site_url().'/users/index/doctor')?>>
                <div class = "block-0">
                    <div>
                    <p><img src=<?php echo(Router::base_url().'/files/icons/doctor.png')?>><p>
                    <p>Doctor Schedule<p>
                </div>
                </div>
            </a>
            </div>
        </div>
    </body>
</html>