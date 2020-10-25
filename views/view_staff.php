<!DOCTYPE html>
<html>
    <head>
    <title>View</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="main.css">
    </head>
   
    <body style="background-image: linear-gradient(to left,  #fec007de, rgba(255, 255, 255, 0)), url(icons/schedule_picture.png);">
    
    <div class ="container">
    <div class=container-t>

    <div class="topic">View staff</div>
    
            <table class ="reg-table">
            <div class = "search-bar">
                <form action="#"> 
                    <div class="site-search"> 
                    <input type="text" placeholder=" Id" name="id"> 
                    </div>      <!--site-search-->  <!--text-->
                    <div class="site-search"> 
                    <input type="text" placeholder=" Name " name="name"> 
                    </div>      <!--site-search-->  <!--date-->
                    <div class="site-search"> 
                    <button type = "submit">GO</button> 
                    </div>      <!--site-search-->  <!--btn-->
                       
                </form> 
                </div>      <!--search-bar-->  
            
                <tr>
                    <th>No.</th>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>Contact</th>
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
                    <td><input type="submit" value="Update"></td>
                    <td><input type="submit" value="Delete"></td>
                </tr>

            </table>
            
        </div>      <!--container-2-->
        </div>      <!--container-->
    </body>
    
</html>
