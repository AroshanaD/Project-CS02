<!DOCTYPE html>
<html>
<title>View</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href=<?php echo Router::base_url()."/files/style.css" ?>>
    </head>
    
    <body style="background-image: linear-gradient(to left,  #fec007de, rgba(255, 255, 255, 0)), url(<?php echo Router::base_url().'/files/icons/schedule_picture.png'?>);">
          
    <div class ="container">
        <div class = "container-t">
        <table class ="reg-table">
        <div class="topic">Inventory</div>
            <div class = "search-bar">
                
                <form action="#"> 
                    <div class="site-search"> 
                    <input type="text" placeholder="ID" name="id"> 
                    </div>      <!--site-search-->  <!--text-->
                    <div class="site-search"> 
                    <input type="text" placeholder="Name " name="name"> 
                    </div>      <!--site-search-->  <!--date-->
                    <div class="site-search"> 
                    <button type = "submit">GO</button> 
                    </div>      <!--site-search-->  <!--btn-->
                </form> 
            </div>      <!--search-bar-->  
        
            
                <tr>
                    <!--th>No.</th-->
                    <th>Medicine Id</th>
                    <th>Medicine Name</th>
                    <th>Vendor</th>
                    <th>Description</th>
                    <th>Unit Price</th>
                    <th>Quantity</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
                <?php
                foreach($_POST['medicine'] as $row){
                    echo "<tr>";
                    echo "<td>".$row->id."</td>";
                    echo "<td>".$row->name."</td>";
                    echo "<td>".$row->vendor."</td>";
                    echo "<td>".$row->description."</td>";
                    echo "<td>".$row->unit_price."</td>";
                    echo "<td>".$row->quantity."</td>";
                    echo "<td></td>";
                    echo "<td></td>";
                    echo"</tr>";
                }
                ?>
            </table>
        </div>      <!--container-2-->
        </div>      <!--container-->
    </body>
</html>
