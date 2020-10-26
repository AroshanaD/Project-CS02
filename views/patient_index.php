<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href=<?php echo Router::base_url()."/files/style.css"?>>
    </head>
    <body style="background-image: linear-gradient(to left,  #fec007de, rgba(255, 255, 255, 0)), url(<?php echo Router::base_url().'/files/icons/undraw_authentication_fsn5.png'?>);">
        <!--ul class="nav">
            <li class="nav-item"><a href="#">
                <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-house-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M8 3.293l6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                    <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                  </svg>
            </a></li>
            <li class="nav-item">
                <div class="dropdown">
                    <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-menu-button-wide-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M14 7H2a1 1 0 0 0-1 1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1zM2 6a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2H2z"/>
                        <path fill-rule="evenodd" d="M15 11H1v-1h14v1zM2 12.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM1.5 0A1.5 1.5 0 0 0 0 1.5v2A1.5 1.5 0 0 0 1.5 5h13A1.5 1.5 0 0 0 16 3.5v-2A1.5 1.5 0 0 0 14.5 0h-13zm1 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zm9.927.427l.396.396a.25.25 0 0 0 .354 0l.396-.396A.25.25 0 0 0 13.396 2h-.792a.25.25 0 0 0-.177.427z"/>
                      </svg>
                    <div class="dropdown-item">
                        <ul>
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Settings</a></li>
                            <li><a href="#">Log Out</a></li>
                        </ul>
                    </div>
            </li>
        </ul-->
        <div class="container">
            <div class="block">
                <div class="profile-card-details">
                    <div class="title">Patient Profile</div>
                    <div class="field">Name    </div><div class="val_field"><?php echo $_SESSION['f_name'].' '.$_SESSION['l_name']?></div>
                    <div class="field">Gender </div><div class="val_field"><?php echo $_SESSION['gender']?></div>
                    <div class="field">Birthday </div><div class="val_field"><?php echo $_SESSION['birthday']?></div>
                    <div class="field">Contact </div><div class="val_field"><?php echo $_SESSION['contact']?></div>
                    <div class="field">Email   </div><div class="val_field"><?php echo $_SESSION['email']?></div>
                    <div class="field">Address </div><div class="val_field"><?php echo $_SESSION['address']?></div>
                </div>
            </div>
        </div>
        <div class="databoard">
            <div class="data-card">
                Appointments
            </div>
            <div class="data-card">
                Lab Tests
            </div>
        </div>
        <div class="taskboard">
            <div class="col-5">
                    <div class="task-card">
                        <p>
                            <img src=<?php echo Router::base_url().'/files/icons/book.png'?> alt="view appointment" style="width:50px; height:50px;">
                        </p>
                        Appointments
                    </div>
                    <div class="dropdown-content">
                        <ul>
                            <li><a href="#">Make Appointment</a></li>
                            <li><a href="#">Doctor Schedule</a></li>
                        </ul>
                    </div>
            </div>
            <div class="col-5">
                <a href="#">
                    <div class="task-card">
                        <p>
                            <img src=<?php echo Router::base_url().'/files/icons/test-passed.png'?> alt="view lab test" style="width:50px; height:50px;">
                        </p>
                        View Lab Test Results
                    </div>
                </a>
            </div>
        </div>
    </body>
</html>