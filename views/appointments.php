<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Appointments</title>
        <!--link rel="stylesheet" href="appointments.css"-->
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
                    <select name = "specialization" name = "specialization">;
                        <option value = "Any"> Any Specialization </option>
                    </select></br>
                    <input type = "text"  name = "doctor" placeholder = "Doctor" pattern = "[a-zA-Z]{0-10}" maxlength = "10"></br>
                    <input type = "date" id = "day"  placeholder = "Date" name = "date"></br>
                    <input type = "submit"  name = "submit-button" value = "Search"></br>
                </form>
            </div>
        </div>
    </body>
</html>