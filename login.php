<!DOCTYPE html>
<html>
    <head>
        <title>PrimeHair</title>
        <link rel = "stylesheet" href = "login.css">
    </head>

    <body>
        <div class = "container">
            <form action="check.php" method="post" class = "login">
                <p class = "login_text">LOGIN</p>

                <div class = "input_group">
                    <a class = "username">Username</a>
                    <input type = "text" placeholder = "username" name = "username">
                </div>

                <div class = "input_group">
                    <a class = "password">Password</a>
                    <input type = "password" placeholder = "password" name = "password">
                </div>
                
                <div class = "forgetpwd_button">
                    <a href = "pw.php">Forgot password?</a>
                </div>

                <div class = "button">
                    <input type = "submit" value = "Sign in" name = "login">
                </div>

                <p class = "login_regis_text">Don't have an account?</p>

                <div class = "button">
                    <a class = "signup_button" href = "signup.php" name = "signup">Sign up</a>
                </div>
            </form>
        </div>
    </body>
</html>