<?php
session_start();
include('navbarmain.php'); 
include_once("dbconnect.php");


$name = $_GET['name'];
$email = $_GET['email'];

  if (isset($_SESSION["email"])){
    if (isset($_GET['operation'])) {
      $id = $_GET['id'];
      try {
        $sql = "DELETE FROM performance WHERE email='$email' AND id='$id'";
        $conn->exec($sql);
        echo "<script> alert('Delete Success')</script>";
      } catch(PDOException $e) {
        echo "<script> alert('Delete Error')</script>";
      }
    }

  //   if (isset($_GET['button'])) {
  //     $searchkey = addslashes($_GET['search']);
  //     $sqlworkout = "SELECT * FROM performance WHERE email = '$email' AND time = '$time' AND time LIKE '%$searchkey%' ORDER BY date_created DESC";
  // } else {
  //     $sqlworkout = "SELECT * FROM performance WHERE email = '$email' AND time = '$time' ORDER BY date_created DESC";
  //}

    try {
       
        $sql = "SELECT * FROM performance WHERE email = '$email'";    
        $stmt = $conn->prepare($sql );
        $stmt->execute();
        // set the resulting array to associative
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $performances = $stmt->fetchAll(); 

        echo "<div class='tableplan'>";
        echo "<p><h1 align='center'>Workout Intensity Indicator</h1></p>";
        echo "<table border='1'>
        <tr>
          <th>Time</th>
          <th>Heart Rate </th>
          <th>Moderate</th>
          <th>Vigorous</th>
          <th>Interval</th>
          <th>Operation</th>
        </tr>";
        echo "</div>";
        
        foreach($performances as $performance) {
            echo "<tr>";

            echo "<td>".date_format(date_create($performance['time']),"d/m/Y H:i a")."</td>";
            echo "<td><p align='center'>".$performance['heart_rate']."</td>";
            echo "<td><p align='center'>".$performance['moderate_min'].'-'.$performance['moderate_max']."</td>";
            echo "<td><p align='center'>".$performance['vigorous_min'].'-'.$performance['vigorous_max']."</td>";
            echo "<td><p align='center'>".$performance['interval_max']."</td>";
            
            echo '<td><a href="workout.php?email='.$email.'&name='.$name.'&id='.$performance['id'].'&operation=del" >Delete</a>';
            echo '&nbsp;&nbsp;';
            echo '<a href="preview.php?email='.$email.'&name='.$name.'&id='.$performance['id'].'">View</a></td>';
            echo '</tr>';
        } 
        echo "</table>";

    } catch(PDOException $e) {
      echo $sql . "<br>" . $e->getMessage();
    }
    
      }else{
        echo "<script> alert('Session Expired!!!')</script>";
        echo "<script> window.location.replace('login.html') </script>;";
      }
  $conn = null;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
    <!-- <script src='https://kit.fontawesome.com/a076d05399.js'></script> -->
    <!-- <i class='fa fa-trash' style='font-size:15px'></i> -->
</body>
</html>

