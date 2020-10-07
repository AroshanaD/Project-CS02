<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login/Register</title>
        <link href="<?php echo base_url();?>files/style.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url();?>files/pharmasist.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <nav>
            <ul>
            <li class = "col-1"><a class="active" href="main_page.php"> <img src="icons/home.png"></a></li>
            <li class = "col-3"><a href="<?php echo site_url('Manage_inven/viewStatistic');?>" >Weekly</a></li>
                <li class = "col-3"><a  href="<?php echo site_url('Manage_inven/monthStatistic');?>" >Monthly</a></li>
                <li class = "col-3"><a href="<?php echo site_url('Manage_inven/yearStatistic');?>">Yearly</a></li>
            </ul>
        </nav>

        <div id = "yearly">
            <h1>yearly Statistics</h1>
        </div>
      
    </body>
</html>
