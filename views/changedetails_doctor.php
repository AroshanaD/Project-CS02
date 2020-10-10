<!DOCTYPE html>
<html>
    <head>
        <title>Doctor</title>
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <nav>
            <ul>
                <li class = "col-1"><a class="active" href="#"><img src="img/home.png"></a></li>
            </ul>
        </nav>


        <div class = "background">
            <div id ="form-box">
            <div class = "button-area">
              <button type = "button" id = "change-button" class = "toggle-button" onclick="changef()"> Change Details </button>
              <button type = "button" id = "password-button" class = "toggle-button" onclick="passwordf()"> Change Password </button>
            </div>  <!--button area-->

            <div id = "changeDetails" class = "input-field">
              <form  action ="#" method = "POST">
                <input type="textbox" class = "input" name="userdetails" placeholder="Userdetails" required>
                <input type="tel" class = "input" name="contact" placeholder="Enter Contact No" pattern="[0-9]{3}[0-9]{2}[0-9]{2}[0-9]{3}" required>
                <input type="text" class = "input" name="address" placeholder="Enter Address" required></br>
                <input type="email" class = "input" name="email" placeholder="Email" maxlength ="50" required>
                <div>
                <button name="changeSubmit" id = "change-submit" class = "submit-button" >Confirm</button>
                </div>
              </form>   <!--action-->
            </div> <!--change details-->

            <div id = "changePassword" class = "input-field">
              <form  action ="#" method = "POST">
                <input type="password" class = "input" name="old-password" placeholder="Enter Old Password" minlength="8" maxlength="12" required>
                <input type="password" class = "input" name="new-password" placeholder="Enter New Password" minlength="8" maxlength="12" required>
                <input type="password" class = "input" name="re-password" placeholder="Re-Enter Password" minlength="8" maxlength="12" required></br>
                <br><br><br>
                <button name="passwordSubmit" id = "pw-submit" class = "submit-button" >Confirm</button>
              </form>   <!--change password-->
            </div>  <!--changePassword-->

            </div> <!--from box-->

        </div>  <!--background-->

        <script>
            var x = document.getElementById("changeDetails");
        var y = document.getElementById("changePassword");

        function changef(){
          x.style.left = "0px";
          y.style.left = "350px";
          document.getElementById("change-button").style.backgroundColor = "transparent";
          document.getElementById("password-button").style.backgroundColor = "rgba(0, 0, 0, 0.8)";
          document.getElementById("form-box").style.height = "400px";
        }

        function passwordf(){
          x.style.left = "-350px";
          y.style.left = "0px";
          document.getElementById("password-button").style.backgroundColor = "transparent";
          document.getElementById("change-button").style.backgroundColor ="rgba(0, 0, 0, 0.8)";
          document.getElementById("form-box").style.height = "350px";
        }

        </script>

    </body>
</html>