<!DOCTYPE html>
<html>
    <head>
        <title>Notespool</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    </head>
    <body>
        <?php 
            include "login.php";
            include "register.php";
        ?> 
        <div id="background"></div>
        <div  class="overlay"></div>
        
        <div id="center">
            
            <div id="logoBox">
                <img src="img/logoN.png" width="240px">
                <h1>Social |<span class="nBlue"> Note</span><span class="nBlue2">spool</span></h1>
            </div>
             
            <div id="loginBox">
                
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <input name="email" type="text" placeholder="Student Email">
                    <input name="pass" type="password" placeholder="Password">
                    <input name="login" type="submit" value="Log in">
                </form>
            </div>
            <div id="registerBox">
                <button class="accordion">Not a member yet?</button>
                
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <input name="ID" type="text" placeholder="Student Number">
                    <input name="firstName" type="text" placeholder="First Name">
                    <input name="surname" type="text" placeholder="Surname">
                    <input name="emailReg" type="text" placeholder="QUT Email"></br>
                    <label for="dob">Date of Birth</label></br>
                    <input name="dob" type="date" placeholder="Date of Birth">
                    <input name="password" type="password" placeholder="Password">
                    <input name="confPassword" type="password" placeholder="Confirm Password">
                    <input name="submit" type="submit" placeholder="Sign Up!">
                </form>
            
            </div>
            
        </div>
         <script>
            var acc = document.getElementsByClassName("accordion");
            var i;

            for (i = 0; i < acc.length; i++) {
                acc[i].onclick = function() {
                    this.classList.toggle("active");
                    if (registerBox.style.maxHeight){
                        registerBox.style.maxHeight = null;
                        center.style.marginTop = -250 +"px";
                        registerBox.style.marginTop = null;
                    } else {
                        registerBox.style.maxHeight = registerBox.scrollHeight + "px";
                        registerBox.style.marginTop = -622 +"px";
                        registerBox.style.zIndex = 3;
                    } 
                }
            }
            </script>
    </body>
</html>