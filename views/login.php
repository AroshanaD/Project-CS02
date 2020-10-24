<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="main.css">
    </head>
    <body style="background-image: linear-gradient(to left,  #fec007de, rgba(255, 255, 255, 0)), url(icons/undraw_authentication_fsn5.png);">
        <div class="container">
            <div class="block">
                    <form>
                        <div class="form-box">
                            <div class="title">Login</div>
                            <div class="label">
                                <label for="id">User ID</label>
                            </div>
                            <div class="input">
                                <input type="text" name="id" required>
                            </div>
                            <div class="label">
                                <label for="password">Password</label>
                            </div>
                            <div class="input">
                                <input type="password" name="passowrd" required>
                            </div>
                            <p><a href="#">Forget password?</a></p>
                            <p><a href="#">Not already an user</a></p>
                        
                            <div class="btn-area"><input type="submit" value="Login" class="submit-btn"></div>
                        </div>
                    </form>
            </div>
        </div>
    </body>
</html>