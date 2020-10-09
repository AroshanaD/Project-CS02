<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Appointment details</title>
        <!-- rel="stylesheet" href="style.css"-->
        <!--link rel="stylesheet" href="pharmasist.css"-->
    </head>
    <body>
        <nav>
            <ul>
                <li class = "col-1"><a class="active" href="main_page.php"> <img src="icons/home.png"></a></li>
            </ul>
        </nav>

        <div >
          <div >
            <div>
              <form  action ="#" method = "POST">
                <h>Appointment Details</h><br>
                <select name = "specialization" name = "specialization">;
                    <option value = "Any"> Any Specialization </option>
                </select></br>
                <input type = "text"  name = "doctor" placeholder = "Doctor" pattern = "[a-zA-Z]{0-10}" maxlength = "10" required></br>
                <input type = "date"  name = "date" placeholder = "Avilable Date" required></br>
                <input type = "time" name ="time" placeholder="Available Time" required ></br>

                <h>Patient Details</h><br>
                <input type="text" name="userid" placeholder="Patient Id"></br>
                <input type="text" name="name" placeholder="Full name" required></br>
                <input type="text" name="age" placeholder="Age" required></br>
                <input type="tel" name="contact" placeholder="Contact Number" required></br>
                <button type= "submit "name="proceed">Proceed</button>
              </form>
            </div>
          </div>
        </div>  
    </body>
</html>
