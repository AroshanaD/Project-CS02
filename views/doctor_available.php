<!DOCTYPE html>
<html>
<head>
    <title>View</title>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
    <div class ="container-small">
            Search Doctor
        </div>  <!--container-small-->

        <div class ="container">
        <div class = "container-2">
        <table class ="reg-table">
            <div class = "search-bar">
                
                <form action="#"> 
                <div class="site-search"> 
                    <input type="text" placeholder=" Select Specialization" name="specialization"> 
                    </div>      <!--site-search-->  <!--text-->
                    <div class="site-search"> 
                    <input type="text" placeholder=" Doctor " name="name"> 
                    </div>      <!--site-search-->  <!--date-->
                    <div class="site-search"> 
                    <input type="date" placeholder=" Select Date" name="date"> 
                    </div>      <!--site-search-->
                    <div class="site-search"> 
                    <button type = "submit">GO</button> 
                    </div>      <!--site-search-->  <!--btn-->
                </form> 
            </div>      <!--search-bar-->  
                
                    <tr>
                        <th>Appointment date</th>
                        <th>Appiontment details</th>
                        <th><input type="button" id = "view-button" name = "viewButton" value="View"></th>
                        <th><input type="button" id = "cancel-button" name = "cancelButton" value="Cancel"></th>
                    </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><input type="submit" value="Update"></td>
                    <td><input type="submit" value="Delete"></td>
                </tr>
                <tr>
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