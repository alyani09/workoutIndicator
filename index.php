<?php
include_once("dbconnect.php");
include("indexcss.php"); 
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

.bg-img {
  /* The image used */
  /* background-image: url("logo/run.jpg"); */
 
  min-height: 100px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: 200px 100px;
  /* margin: right 200px; */
  position: relative;
}

/* Add styles to the form container */
.container {
  position: absolute;
  border: 1px solid black;
  right: -5;
  margin: 10px;
  margin-right:230px;
  max-width: 400px;
  padding: 16px;
  background-color: ash grey;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit button */
.btn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
.column {
  float: left;
  width: 50%;
  padding: 100px;
}
/* 33.33%; */
/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}
</style>
</head>
<body>

 <div class="row">
   <div class="column">
     <img src="logo/run.jpg" alt="Snow" style="width:100%">
  </div>
   

<div class="column" >
  <form action="login.php" method="POST" class="container">
    <h1>Login</h1>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Email" name="email" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Password" name="password" required>

    <button type="submit" class="btn">Login</button>
    <p align="center">Not Register?<a href="register.html"> Register</a></p>
  </form>
</div>
</div>

<!-- <p>This example creates a form on a responsive image. Try to resize the browser window to see how it always will cover the whole width of the screen, and that it scales nicely on all screen sizes.</p> -->
<!-- <footer class="footer"><br>
  <p>Workout Intensity Indicator System</p><br>
  <p> Made By Nurul Alyani Fatini</p><br>
</footer> -->
</body>
</html>

