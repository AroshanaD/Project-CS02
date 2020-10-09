<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Receptionist change details and password</title>
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
              <button type = "button" id = "change-button" onclick="changef()"> Change Details </button>
              <button type = "button" id = "password-button" onclick="passwordf()"> Change Password </button>
            </div>
            <div>
              <form  action ="#" method = "POST">
                <input type="textarea" name="userdetails" placeholder="Userdetails" required>
                <input type="tel"  name="contact" placeholder="Enter Contact No" pattern="[0-9]{3}[0-9]{2}[0-9]{2}[0-9]{3}" required>
                <input type="text"  name="address" placeholder="Enter Address" required></br>
                <input type="email"  name="email" placeholder="Email" maxlength ="50" required>
                <button type="submit" name="changeSubmit">Confirm</button>
              </form>
            </div>
            <div>
              <form  action ="#" method = "POST">
                <input type="password" name="old-password" placeholder="Enter Old Password" minlength="8" maxlength="12" required>
                <input type="password" name="new-password" placeholder="Enter New Password" minlength="8" maxlength="12" required>
                <input type="password" name="re-password" placeholder="Re-Enter Password" minlength="8" maxlength="12" required></br>
                <button type="submit" name="passwordSubmit" id ="pw-submit"  >Confirm</button>
              </form>
            </div>
          </div>
        </div>
      <script>
        var x = document.getElementById("changeDetails");
        var y = document.getElementById("changePassword");

        function changef(){
          x.style.left = "0px";
          y.style.left = "350px";
          document.getElementById("change-button").style.backgroundColor = "rgba(0, 0, 0, 0.8)";
          document.getElementById("password-button").style.backgroundColor = "transparent";
          document.getElementById("form-box").style.height = "400px";
        }

        function passwordf(){
          x.style.left = "-350px";
          y.style.left = "0px";
          document.getElementById("password-button").style.backgroundColor = "rgba(0, 0, 0, 0.8)";
          document.getElementById("change-button").style.backgroundColor = "transparent";
          document.getElementById("form-box").style.height = "350px";
        }

      </script>
      
    </body>
</html>
