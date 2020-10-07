        <nav>
            <ul>
                <li class = "col-1"><a class="active" href=<?php echo(Router::site_url().'/main')?>> <img src="files/icons/home.png"></a></li>
                <li class = "col-2"><a href="#">About Us</a></li>
                <li class = "col-2"><a href="#">Contact Us</a></li>
                <li class = "col-2"><a href="#">Appointments</a></li>
                <li class = "col-2"><a href="#">Doctor Schedule</a></li>
            </ul>
        </nav>
        <div class = "row">
            <div class = "col-4">
                <div class = "block-0">
                    <a href=<?php echo(Router::site_url().'/users/index/patient')?>><img src=<?php echo(Router::base_url().'/files/icons/patient.png')?>></a>
                    <a href=<?php echo(Router::site_url().'/index.php/users/index/patient')?>>Patient</a>
                </div>
            </div>
            <div class = "col-4">
                <div class = "block-0">
                    <a href="#"><img src=<?php echo(Router::base_url().'files/icons/doctor.png')?>></a>
                    <a href="#">Doctor</a>
                </div>
            </div>
            <div class = "col-4">
                <div class = "block-0">
                    <a href="#"><img src="files/icons/receptionist.png"></a>
                    <a href="#">Receptionist</a>
                </div>
            </div>
            <div class = "col-4">
                <div class = "block-0">
                    <a href="#"><img src="files/icons/lab.png"></a>
                    <a href="#">Lab Technician</a>
                </div>
            </div>
            <div class = "col-4">
                <div class = "block-0">
                    <a href="#"><img src="files/icons/pharmacy.png"></a>
                    <a href="#">Pharmacist</a>
                </div>
            </div>
            <div class = "col-4">
                <div class = "block-0">
                    <a href="#"><img src="files/icons/admin.png"></a>
                    <a href="#">Supervisor</a>
                </div>
            </div>
        </div>
        <footer>
        <div class = "row">
            <div class = "col-8">
                <div class = "block-1">
                    <h>About Us</h>
                    <div class="block-1">
                    <p>Our Hospitals, Sri Lanka</p>
                    <p>Our Hospitals has embarked on a digital journey to be Sri Lanka’s No.1 Smart Hospital.</p>
                    <p>We have already introduced many innovative digital health solutions including Tele medicine, Online pharmacy,
                    Online laboratory portal and Tele physiotherapy.</p>
                </div>
                </div>
            </div>
            <div class = "col-4">
                <div class = "block-1">
                    <h>Contact Us</h>
                    <div class = "block-1">
                        <p> No.1/A, Colombo Rd,</p>
                        <p> Galle,</p>
                        <p> Sri Lanka</p>
                        <p> 091 1234567 </p>
                    </div>
                </div>
            </div>
        </div>
        </footer>
    </body>
</html>