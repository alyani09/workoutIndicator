<?php
include_once("dbconnect.php");
include("navbarmain.php");


$name = $_GET['name'];
$email = $_GET['email'];
$id = $_GET['id'];

try{

$sql = "SELECT * FROM performance WHERE email = '$email' AND ID = '$id'";
$stmt = $conn->prepare($sql );
$stmt->execute();
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
$performances = $stmt->fetchAll(); 
//echo "<head></head><link rel='stylesheet' href='style.css'></head>";


echo "<div class='tableplan'>";
echo "<p><h1 align='center'>View Workout Intensity Indicator</h1></p>";
echo "<table border='1' >";


foreach($performances as $performance) {
    echo "<tr><td><b>Date</b></td><td>".date_format(date_create($performance['time']),"d/m/Y H:i a")."</td></tr>";
    echo "<tr><td><b>Maximum Heart Rate<b></td><td>".$performance['mhr']."</td></tr>";
    echo "<tr><td><b>Resting Heart Rate<b></td><td>".$performance['rhr']."</td></tr>";
    echo "<tr><td><b>Heart-Rate Reserve<b></td><td>".$performance['hrr']."</td></tr>";
    echo "<tr><td><b>Moderate</td><td>".$performance['moderate_min'].'-'.$performance['moderate_max']."</td></tr>";
    echo "<tr><td><b>Vigorous</td><td>".$performance['vigorous_min'].'-'.$performance['vigorous_max']."</td></tr>";
    echo "<tr><td><b>Interval Maximum<b></td><td>".$performance['interval_max']."</td></tr>";
    
    
 }
 echo "</table><br>";
 echo "<p align=\"center\"><a href=\"workout.php?email=$email&name=$name\">Back</a></p>";
 echo "</div>";

}  catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }
    
$conn = null;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-1.0">
        <title></title>
        <style>
/* table {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 16px;
} */
</style>
    </head>
    <body>
    <!-- <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
    </body>
</html>