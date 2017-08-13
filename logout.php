<?php
session_start();
unset($_SESSION['isLogged']);
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
  <meta name="description" content="Find parks in Brisbane">
  <meta name="keywords" content="Brisbane,Park,Location,Reviews,Register">
  <meta name="author" content="Olivia McDonald, Alex Stevens">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sign up </title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type="text/javascript" src="javascript.js"></script>
</head>
<body>

    <header>
    
        <div class="headWrap">
            <nav> 
            <!-- Navigation Links --> 
                <ul>
                    <li><a href="search.php">Search</a></li>  
                    <li><a href="register.php">Register</a></li>  
                    <li><a href="index.php">Login</a></li>   
                </ul>
            </nav>
        </div>
    </header>

	<span class="succBox">You are now logged out, return to <a href="index.php">login</a></span>
	
	<div id="map">
	
	</div>

<!-- Footer--> 
<footer>

    <div class="footer"> 
<!-- Social media links in footer --> 
        <a href="https://www.instagram.com">
            <i class="fa fa-instagram" aria-hidden="true"></i>
        </a>
        <a href="https://www.facebook.com">
            <i class="fa fa-facebook-official" aria-hidden="true"></i>
        </a>
        <a href="https://www.twitter.com">
            <i class="fa fa-twitter-square" aria-hidden="true"></i>
        </a>
           <!-- Copyright statement --> 
        <div id= "copyright">
            Copyright &copy; 2017 CAB230 Inc. All rights reserved.
        </div>
		</div>


</footer>
</body>
</html>
