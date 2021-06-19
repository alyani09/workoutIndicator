<?php
include_once("dbconnect.php");
// $email = $_GET['email'];
// $password = $_GET['password'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <style>
   * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif; 
  }
  body {
    background: -webkit-linear-gradient(left);
  }
  .container form, .tableplan table, .tableprofile table {
    width: 100%;
    height: 100%;
    padding: 20px;
    background: white;
    border-radius: 4px;
  }
  .container form h1 {
    color: rgb(8, 7, 7);
    margin-bottom: 24px;
    text-align: center;
  }
  input[type=text],input[type=date],select {
    width: 100%;
    height: 40px;
    padding: 12px 20px;
    margin: auto auto;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    
  }
  input[type=submit] {
    width: 100%;
    height: 40px;
    background-color: #4c8caf;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    text-align:center;
    font: bold;
  }
    /* table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 50%;
    text-align : center;
    margin-left: auto;
    margin-right: auto;
    } */

    td, th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
      text-align : center;
    }

    tr:nth-child(even) {
      background-color: #dddddd;
    }
        
    .center {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 50%;
    }
    
    /* .container {
      margin: 100px auto;
      width: 700px;
      max-width: 100%;
      padding: 10px;
  } */
    
    
    }.margin {
      margin-bottom: 20px;
    }
    .list-group-item:first-child {
      border-top-right-radius: 0;
      border-top-left-radius: 0;
    }
    .btn {
      padding: 10px 20px;
      background-color: #333;
      color: #f1f1f1;
      border-radius: 0;
      transition: .2s;
    }
    .btn:hover, .btn:focus {
      border: 1px solid #333;
      background-color: #DCDCDC;
      color: #000;
    }
    .modal-header, h4, .close {
      background-color: #333;
      color: #fff !important;
      text-align: center;
      font-size: 30px;
    }
    .modal-header, .modal-body {
      padding: 40px 50px;
    }
    .nav-tabs li a {
      color: #777;
    }  
    .navbar {
      margin-bottom: 0;
      background-color: #2d2d30;
      border: 0;
      font-size: 12px !important;
      letter-spacing: 4px;
      opacity: 0.9;
    }
    .navbar li a, .navbar .navbar-brand { 
      color: white font !important;
      line-height: 20px;
      font-size: 17px;
      color
    }
    .navbar-nav li a:hover {
      color:#DCDCDC !important;
    }
    .navbar-nav li.active a {
      color: #fff !important;
      background-color: #29292c !important;
      line-height: 20px;
    }
    .navbar-default .navbar-toggle {
      border-color: transparent;
    }
  }
    #text{
      position: absolute;
      top: 50%;
      left: 50%;
      font-size: 20px;
      color: black !important;
      transform: translate(-50%,-50%);
      -ms-transform: translate(-50%,-50%);
    }
    /* .footer { 
    position: fixed;
    height:20%;
    left: 0;
    bottom: 0;
    width: 100%;
    background-color:  #2f2f2f; /* Black Gray */
    color: white;
    text-align: center;

  } */
    
  </style>
</head>
<body>

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header" style="height:50%">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Workout Intensity Indicator</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
      <li><a href="aboutmain.php">About Us</a></li>
        <li><a href="login.html">Log In</a></li>
      </ul>
    </div>
  </div>
</nav>
</body>
</html>