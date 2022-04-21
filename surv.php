<!DOCTYPE html>
<html>
    <head>
        <title>PrimeHair</title>
        <link rel = "stylesheet" href = "surv.css">
    </head>
    <body>
        <div class = "container">
            <form action = "insertsurvey.php" method = "post" class = "form">
                <p class = "head_text">SURVEY</p>

                <div class = "input_group">
                    <a class = "problems">Firstname</a>
                    <input type="text" placeholder= "Firstname" name="firstname">
                </div>

                <div class = "input_group">
                    <a class = "problems">Lastname</a>
                    <input type="text" placeholder = "Lastname" name = "lastname">
                </div>

                <div class = "input_group">
                    <a class = "problems">What's your problems?</a>
                    <input type="text" placeholder = "Problems" name = "1st">
                </div>
                    
                <div class = "input_group">
                    <a class = "problems">What products you are using previously?</a>
                    <input type="text" placeholder = "Previously using products" name = "2nd">
                </div>

                <div class = "input_group">
                    <a class = "problems">Do you have any allergic reactions to any chemical?</a>
                    <input type="text" placeholder = "Allegies" name = "3rd">
                </div>

                <div class = "input_group">
                    <a class = "problems">How much time do you take to treat your hair in a day?</a>
                    <input type = "text" placeholder = "Treating time" name = "4th">
                </div>

                <div id = "submitbutton">
                    <input type = "submit" value = "Submit" name = "submit">
                </div>
            </form>
        </div>
    </body>
</html>