<?php
session_start();
unset($_SESSION['isLogged']);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Notespool</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    </head>
    <body>
        <div id="background"></div>
        <div  class="overlay"></div>
        
        <div id="center">
            
            <div id="logoBox">
                <img src="img/logoN.png" width="240px">
                <h1>Social |<span class="nBlue"> Note</span><span class="nBlue2">spool</span></h1>
            </div>
             
            <div id="loginBox">
                Successfully Logged out, <a href="index.php">Click Here</a> to return to login page
            </div>
            
        </div>
    </body>
</html>