<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login/Register</title>
        <link rel="stylesheet" href="login_register.css">
    </head>
    <body>
      <div class = "background">
        <div id = "form-box">
            <div class = "button-area">
              <button type = "button" id = "log-button" class = "toggle-button" onclick="loginf()"> Log In </button>
              <button type = "button" id = "reg-button" class = "toggle-button" onclick="registerf()"> Register </button>
            </div>
            <div id = "login" class = "input-field">
              <form class="login" action ="login-form.php" method = "POST">
                <input type="text" class = "input" name="userid" placeholder="Enter Username" required>
                <input type="password" class = "input" name="password" placeholder="Enter Password" required></br>
                <input type="checkbox" class = "check-box"> <span id = "rember"> Remember Me </span>
                <button name="login-submit" id = "log-submit" class = "submit-button" >Submit</button>
                <a href="#">Forget Password ?</a>
              </form>
            </div>
            <div id = "register" class = "input-field">
              <form class="Register" action ="register-form.php" method = "POST">
                <input type="text" class = "input" name="id" placeholder="ID" pattern="[0-9]{12}" required>
                <input type="text" class = "input" name="f_name" placeholder="First Name" minlength="3" maxlength="15" required>
                <input type="text" class = "input" name="l_name" placeholder="Last Name" minlength="3" maxlength="15" required>
                <input type="date" class = "input" name="birthday" placeholder="Birthday" min="1940-01-01" max="2002-01-01" required></br>
                <input type="radio" class = "gender-radio" name = "gender" value= "Male">
                <label for="Male">Male</label>
                <input type="radio" class = "gender-radio" name = "gender" value= "Female">
                <label for="Female">Female</label>
                <input type="radio" class = "gender-radio" name = "gender" value= "Other">
                <label for="Other">Other</label>
                <input type="text" class = "input" name="address" placeholder="Address" maxlength="100">
                <input type="tel" class = "input" name="contact" placeholder="Contact No" pattern="[0-9]{3}[0-9]{2}[0-9]{2}[0-9]{3}" required>
                <input type="email" class = "input" name="email" placeholder="Email" maxlength ="50" required>
                <input type="password" class = "input" name="password" placeholder="Enter Password" minlength="8" maxlength="12" required>
                <input type="password" class = "input" name="re-password" placeholder="Re-Enter Password" minlength="8" maxlength="12" required></br>
                <input type="checkbox" class = "check-box" required> <span id = "remember"> Agree to Terms and Conditions </span>
                <button name="register-submit" id = "reg-submit" class = "submit-button" >Submit</button>
              </form>
            </div>
        </div>
      </div>
      <script>
        var x = document.getElementById("login");
        var y = document.getElementById("register");

        function loginf(){
          x.style.left = "0px";
          y.style.left = "350px";
          document.getElementById("log-button").style.backgroundColor = "rgba(0,0,0,0.8)";
          document.getElementById("reg-button").style.backgroundColor = "transparent";
          document.getElementById("form-box").style.height = "260px";
        }

        function registerf(){
          x.style.left = "-350px";
          y.style.left = "0px";
          document.getElementById("reg-button").style.backgroundColor = "rgba(0,0,0,0.8)";
          document.getElementById("log-button").style.backgroundColor = "transparent";
          document.getElementById("form-box").style.height = "550px";
        }

      </script>
    </body>
</html>
