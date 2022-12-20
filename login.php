<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles_1.css">
   
</head>
<body>
<?php
include 'config.php'
?>


<H1>HELLO!</H1>

<div class="login">
        <div class="bgtext">
        <h1>    Sign in Here</h1>

<form action="/GYM_AWP/login.php" method="POST" >
   <input type="text" class="inputbox" placeholder="Enter the username" name="username" required>
   
   <!-- <input type="email" class="inputbox" placeholder="Enter Emailid" name="email" required> -->
   
   <input type="password" class="inputbox" placeholder="Enter the password" name="password" required>
   
   <!-- <input type="Password" class="inputbox" placeholder="Enter Confirm Password" required> -->

   <button name="submit" class="submitbutton">Sign In</button>
   <br>
   Don't have an account?  <a href="/GYM/signup.php">click here</a>
</form>

                


            </div>

            
        </div>
    </div>


     
        <br>
</body>
</html>