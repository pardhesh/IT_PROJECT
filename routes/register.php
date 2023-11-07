<html>
    <head>
        <title>Registratrion Page</title>
        <link rel="stylesheet" href="../css/stylesheet.css">
        <style>
            fieldset{
             
                background-color:lemonchiffon;
                border: 2px solid #000;
                float:center;
    
            }
        </style>
    </head>
    <body>
        <center>
            <div id="headerSection">
            <h1>ONLINE VOTING WEBSITE</h1>  
            </div>
            <hr>
            <fieldset>
            <h2>Registration</h2>
           
                <form action="../api/register.php" method="POST" enctype="multipart/form-data">
                    <input type="text" name="name" placeholder="Name" required>&nbsp
                    <input type="number" name="mob" placeholder="Mobile" required><br><br>
                    <input type="password" name="pass" placeholder="Password" required>&nbsp
                    <input type="password" name="cpass" placeholder="Confirm Password" required><br><br>&nbsp
                    <input style="width: 31%" type="text" name="add" placeholder="Address" required><br><br>&nbsp
                    <div id="upload" style="width: 50%">
                        Upload your image: <input type="file" id="profile" name="image" required>
                    </div><br>
                    <div id="upload" style="width: 50%">
                        Select your role here:
                        <select name="role">
                            <option value="1">VOTER</option>
                            <option value="2">CANDIDATE</option>
                        </select><br>                   
                    </div><br>
                    <button id="loginbtn" type="submit" name="registerbtn">Register</button><br><br>
                        Already registered? <a href="../">Click to Login</a>
                </form>
                </fieldset>
            </center>
    </body>
</html>
