<?php
session_start();
include_once("dbconnect.php");

$email = $_POST['email']; 
$password = sha1($_POST['password']);

try {
    $sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
    $stmt = $conn->prepare($sql );
    $stmt->execute();
  
    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $count = $stmt->rowCount();
    $users = $stmt->fetchAll();  

    if ($count > 0){
        foreach($users as $user) {
            $email = $user['email'];
            $name = $user['name'];
        } 

        $_SESSION["name"] = $name;
        $_SESSION["email"] = $email;
        $_SESSION["password"] = $password;

        echo "<script> alert('Login Success')</script>";
        echo "<script> window.location.replace('add.php?email=".$email."&name=".$name."') </script>;";
    }else{
        echo "<script> alert('Login Failed')</script>";
        echo "<script> window.location.replace('login.html') </script>;";
    }

} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
?>