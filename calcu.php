<?php
$name = $_GET['name'];
$email = $_GET('email');
$age = $_GET['age'];
$heart_rate = $_GET['heart_rate'];
$exercise = $_GET['exercise'];

//if (isset($_GET['submit'])) {
    try {
        $sql = "SELECT performance.id as id, heart_rate,exercise, user.age 
        FROM performance join user on user.email = performance.id WHERE perfomance.id = id'";
        $conn->exec($sqL);
        echo "<script> alert('Update Success')</script>";
        echo "<script> window.location.replace('workout.php?email=".$email."&name=".$name."') </script>;";
      } 
      catch(PDOException $e) {
        echo "<script> alert('Update Error')</script>";
      }
    }









?>