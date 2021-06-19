<?php
include_once('dbconnect.php');
include('navbaradd.php');

$name = $_GET['name'];
$email = $_GET['email'];
$heart_rate = '';

//initialize
$result = false;

if(count($_POST)!=0)
{
    $result = true;

    //capture post
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $heart_rate = $_POST['heart_rate'];

    //calculate MHR
    $mhr = 220 - $age;

    //calculate RHR
    $rhr = $heart_rate;

    //calculate HRR
    $hrr = $mhr - $rhr;

    //calculate moderate min
    $moderate_min = (0.50 * $hrr) + $rhr;

    //calculate moderate max
    $moderate_max = (0.85 * $hrr) + $rhr;

    //calculate vigorous min
    $vigorous_min = (0.70 * $hrr) + $rhr;

    //calculate vigorous max
    $vigorous_max = (0.85 * $hrr) + $rhr;

    //calculate interval max
    $interval_max = (0.86 * $hrr) + $rhr;

    try {
        $sql = "INSERT INTO performance(heart_rate,mhr, rhr,hrr,moderate_min,moderate_max,vigorous_min,vigorous_max,interval_max, email)
        VALUES ('$heart_rate','$mhr','$rhr','$hrr','$moderate_min','$moderate_max','$vigorous_min','$vigorous_max','$interval_max','$email')";
      // use exec() because no results are returned
    //   echo $sql;
    //   exit();
      $conn->exec($sql);
    //   echo "<script> alert('Insert Success')</script>";
    //   echo "<script> window.location.replace('add.php?email=".$email."&name=".$name."') </script>;";
  
    } catch(PDOException $e) {
      echo "<script> alert('Insert Error : ".$e->getMessage()."')</script>";
      echo "Error: " . $e->getMessage();
    }


   // echo '<pre>';
    //print_r($_POST);
    //echo '</pre>';
    //exit();
}

// if (isset($_GET['id'])) {
//     $id = $_GET['id'];
//     $age = $_GET['age'];
//     $heart_rate = $_GET['heart_rate'];
//     $exercise = $_GET['exercise'];

//     try {
//         $sql = "INSERT INTO performance(id, heart_rate,exercise, email)
//         VALUES ('$id', '$heart_rate','$exercise', '$email')";
//       // use exec() because no results are returned
//       $conn->exec($sql);
//       echo "<script> alert('Insert Success')</script>";
//       echo "<script> window.location.replace('workout.php?email=".$email."&name=".$name."') </script>;";
  
//     } catch(PDOException $e) {
//       echo "<script> alert('Insert Error')</script>";
//       echo "Error: " . $e->getMessage();
//     }    
// }

//get user details
$sql = "SELECT * FROM user WHERE email = '$email'";
$stmt = $conn->prepare($sql );
$stmt->execute();
$user = $stmt->fetchAll();

/*echo '<pew>';
print_r($user);
echo '</pre>';
exit();*/


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workout Intensity Indicator</title>


</head>

<body>

    <div class="container">
        <form action="add.php?name=<?php echo $user[0]['name']; ?>&email=<?php echo $user[0]['email']; ?>" method="POST" >
            <h1>Workout Intensity Indicator</h1>
            <input type="hidden" name="name" name="name" value="<?php echo $user[0]['name']; ?>"><br>
            <input type="hidden" name="email" name="email" value="<?php echo $user[0]['email']; ?>"><br>
        <label for="age">Age:</label> <input type="text" id='age' name = 'age' size="7" value = "<?php echo $user[0]['age']; ?>">
        <label for="heart_rate">Heart Rate (rest 1min):</label><input type="text" id="heart_rate" name="heart_rate" value="<?php echo $heart_rate; ?>" required><br><br><br>
        
        <!-- <label for="exercise" style="text-align:center">Workout Intensity:</label><br><br>
        <div>
        <input class="radio-input" type="radio" name="exercise" value="moderate" />
        <label class="radio-label" for="moderate">Moderate</label>
        <input class="radio-input" type="radio" name="exercise" value="vigorous" />
        <label class="radio-label" for >Vigorous</label>
        <input class="radio-input" type="radio" name="exercise" value="intervals" />
        <label class="radio-label">Intervals</label>
        </div> -->

            <input type="submit" value="Calculate"><br>
            <br>
            <p align="center"><a href="add.php?email=<?php echo $email. '&name='.$name?>">Reset</a></p>
            <p align="center"><a href="workout.php?email=<?php echo $email. '&name='.$name?>">Cancel</a></p>
        </form>
    </div>

    <?php
    if($result)
    {
        ?>
       
    <div class="tableplan">
    <img src="logo/th.jpg" style="width:5%"> Here is your result
    <table>
        <!-- <tr>
            <td>Name</td>
            <td><?php echo $name; ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?php echo $email; ?></td>
        </tr> -->
        <tr>
            <td>Age</td>
            <td><?php echo $age; ?></td>
        </tr>
        <tr>
            <td>Heart Rate</td>
            <td><?php echo $heart_rate; ?></td>
        </tr>
        <tr>
            <td>Maximum Heart Rate (MHR)</td>
            <td><?php echo $mhr; ?></td>
        </tr>
        <tr>
            <td>Resting Heart Rate (RHR)</td>
            <td><?php echo $rhr; ?></td>
        </tr>
        <tr>
            <td>Heart Rate Reserve (HRR)</td>
            <td><?php echo $hrr; ?></td>
        </tr>
        <tr>
            <td>Moderate Min - Max</td>
            <td><?php echo $moderate_min; ?> - <?php echo $moderate_max; ?></td>
        </tr>
        <tr>
            <td>Vigorous Min - Max</td>
            <td><?php echo $vigorous_min; ?> - <?php echo $vigorous_max; ?></td>
        </tr>
        <tr>
            <td>Interval Max</td>
            <td><?php echo $interval_max; ?></td>
        </tr>
    </table>
    </div>
        <?php
    }
    ?>
    <!-- <script>
function on() {
  document.getElementById("overlay").style.display = "block";
}

function off() {
  document.getElementById("overlay").style.display = "none";
}
</script> -->
</body>

</html>