<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Appointments</title>
        <!--link rel="stylesheet" href="style.css"-->
        <style>
            table, th, td{
                border: 1px solid black;
                border-collapse: collapse;
            }
        </style>
        
    </head>

    <body>
        <nav>
            <ul>
                <li class = "col-1"><a class="active" href="main_page.php"> <img src="icons/home.png"></a></li>
            </ul>
        </nav>
        <div>
            <div >
                <form >
                <table>
                    <tr>
                        <th>Appiontment details and Appointment date</th>
                        <th>View</th>
                        <th>Cancel</th>
                    </tr>

                    <tr>
                        <th><input type="date" id = "day"  placeholder = "Appointment Date" name = "date"><input type="text" id = "detail"  placeholder = "Appointment Details" name = "details"></th>
                        <th><input type="button" id = "view-button" name = "viewButton" value="View"></th>
                        <th><input type="button" id = "cancel-button" name = "cancelButton" value="Cancel"></th>
                    </tr>
                </form>
            </div>
        </div>
    </body>
</html>