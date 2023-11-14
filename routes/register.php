<html>
    <head>
        <title>Online voting system - Registratrion</title>
        <link rel="stylesheet" href="../css/stylesheet.css">
        <style>
            body{
        background-image: url('bg2.jpg');
        background-repeat: no-repeat;
        background-size: 100% 100%;
        background-attachment: fixed;
            }
            h1{
                font-size: 200%;
            }
            ::placeholder{
    color: black;
   }
        </style>
    </head>
    <body>
        <center>
            <div id="headerSection">
            <h1>ONLINE VOTING WEBSITE</h1>  
            </div>
            <hr>
            
            <h1>REGISTRATION</h1>
           
                <form action="../api/register.php" method="POST" enctype="multipart/form-data">
                    <input style="width: 31%" type="text" name="name" placeholder="Enter Usernme" required><br><br>
                    <input style="width: 31%" type="number" name="mob" placeholder="Enter Mobile No." required><br><br>
                    <input style="width: 31%" type="password" name="pass" placeholder="Enter Password" required><br><br>
                    <input style="width: 31%" type="password" name="cpass" placeholder="Confirm Password" required><br><br>
                    <input style="width: 31%" type="text" name="add" placeholder="Address" required><br><br>
                    <div id="upload" style="width: 30%">
                        Upload image: <input type="file" id="profile" name="image" required>
                    </div><br>
                    <div id="upload" style="width: 30%">
                        Select your role:
                        <select name="role">
                            <option value="1">Voter</option>
                            <option value="2">Candidate</option>
                        </select><br>                   
                    </div><br>
                    <button class="gradient-button gradient-button-1" type="submit" name="registerbtn"><b>Register</b></button><br><br>
                       <b> Already an user?</b> <a href="../"><b>Click here to Login</b></a>
                </form>
                
            </center>
            </body>
</html>