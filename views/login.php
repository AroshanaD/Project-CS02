    <body>
      <div class = "background">
        <div id = "form-box">
          <div class = "block-0">
            Login
          </div>
            <div id = "login" class = "input-field">
              <form class="login" action ="<?php echo(Router::site_url().'/login/authenticate')  ?>" method = "POST">
                <input type="text" class = "input" name="userid" placeholder="Enter Username" required>
                <input type="password" class = "input" name="password" placeholder="Enter Password" required></br>
                <input type="checkbox" class = "check-box"> <span id = "rember"> Remember Me </span>
                <button name="login-submit" id = "log-submit" class = "submit-button" >Submit</button>
                <div><a href="#">Forget Password ?</a></div>
                <div><a href="#">Not already an user</a></div>
              </form>
            </div>
        </div>
      </div>
    </body>
</html>
