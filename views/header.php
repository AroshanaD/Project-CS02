<div style="float:left; margin-left:60px"><img src="<?php echo Router::base_url() . '/files/icons/Logo.png' ?>"></div>
<div class="dropdown" style="float:right;margin-right:80px; margin-top:15px;background-color:transparent ; color:#5e60ce; border:none">
    <i class="fas fa-user-circle fa-2x"></i>
    <div class="dropdown-content" style="position:fixed; min-width:80px; background-color: #223843;">
        <a href='<?php echo Router::site_url() . "/user/change_details" ?>' style="margin-top:0px; margin-bottom:0px ;min-width:80px;"><i class="fas fa-user"></i> Profile</a></br>
        <a href='<?php echo Router::site_url() . '/user/logout' ?>' style="margin-top:0px; margin-bottom:0px;min-width:80px;"><i class="fas fa-sign-out-alt"></i> Log out</a>
    </div>
</div>
<button id="nav-icon">
</button>
<button id="close-icon">
</button>