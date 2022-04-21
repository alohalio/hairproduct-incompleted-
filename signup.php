<!DOCTYPE html>
<html>
    <head>
        <title>PrimeHair</title>
        <link rel = "stylesheet" href = "sign_up.css">
    </head>

    <body>
        
        <form action="insertsignup.php" method="post" class = "form">
            <p class = "signup_text">SIGN UP</p>
            <div id = "firstnameinput">
                <label for="firstname">Firstname</label>
                <input type="text" placeholder = "Firstname" name = "firstname">
            </div>
            <div id = "lastnameinput">
                <label for="lastname">Lastname</label>
                <input type="text" placeholder = "Lastname" name = "lastname">
            </div>
            <div id = "emailinput">
                <label for="email">Email</label>
                <input type="text" placeholder = "Email" name = "email">
            </div>
            <div id = "usernameinput">
                <label for="username">Username</label>
                <input type="text" placeholder = "Username" name = "username">
            </div>
            <div id = "passwordinput">
                <label for="password">Password</label>
                <input type="password" placeholder = "Password" name = "password">
            </div>
            <div id = "reenterpasswordinput">
                <label for="reenterpassword">Confirmed Password</label>
                <input type="password" placeholder = "Confirmed Password" name = "reenterpassword">
            </div>
            <div id = "agreement">
                <input type = "checkbox" name = "agreement">
                <label for = "agreement"> I agree to the Term of User</label>
            </div>
            <div id = "signupbutton">
                <input type = "submit" value = "Sign Up" name = 'signup'>
            </div>

            <p class = "login_regis_text">Have an account?</p>

            <div class = "button">
                <a class = "signin_button" href = "login.php" name = "signin">Sign in</a>
            </div>
        </form>
        
    </body>