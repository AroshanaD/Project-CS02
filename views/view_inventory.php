<!DOCTYPE html>
<html>
<title>View</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="main.css">
    </head>
    
    <body style="background-image: linear-gradient(to left,  #fec007de, rgba(255, 255, 255, 0)), url(icons/schedule_picture.png);">
          
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
                    <th>No.</th>
                    <th>Medicine Id</th>
                    <th>Medicine Name</th>
                    <th>Vendor</th>
                    <th>Description</th>
                    <th>Quantity</th>
                    <th>Unit Price</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><button type = "t-btn">Update</td>
                    <td><button type = "t-btn">Delete</td>
                </tr>
            
        
        </table>
        </div>      <!--container-2-->
        </div>      <!--container-->
    </body>
</html>
