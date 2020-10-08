    <body>
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
    </body>