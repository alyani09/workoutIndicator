<?php
include_once("dbconnect.php");
include('navbarmain.php');

$name = $_GET['name'];
$email = $_GET['email'];
$age = $_GET['age'];
$phone = $_GET['phone'];


if (isset($_GET['operation'])) {
    try {
        $sqlupdate = "UPDATE user SET age = '$age', phone = '$phone' WHERE email = '$email'";
        $conn->exec($sqlupdate);
        echo "<script> alert('Update Success')</script>";
        echo "<script> window.location.replace('workout.php?email=".$email."&name=".$name."') </script>;";
      } 
      catch(PDOException $e) {
        echo "<script> alert('Update Error')</script>";
      }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profile</title>
</head>
<body>

<div class="container">
    <form action="update.php" method="get" onsubmit="return confirm('Are you sure to update?');">
    <h1 >Update Profile:</h1>
    <input type="hidden" id="name" name="name" value="<?php echo $name;?>"><br>
        <input type="hidden" id="email" name="email" value="<?php echo $email;?>"><br>
        <input type="hidden" id="id" name="id" value="<?php echo $id;?>" required><br>
        <input type="hidden" id="operation" name="operation" value="update"><br>
        <label for="age">Age:</label><br>
        <input type="text" id="age" name="age" value="<?php echo $age;?>" required><br>
        <label for="phone">Phone:</label><br>
        <input type="text" id="phone" name="phone" value="<?php echo $phone;?>" required><br>
        <input type="submit" value="Update">
    <br>
    <p align="center"><a href="workout.php?email=<?php echo $email. '&name='.$name?>">Cancel</a></p>
    </form>
  </div>
</body>

</html>