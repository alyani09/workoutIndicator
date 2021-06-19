<?php
include('navbarmain.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow:  5px 10px #888888;
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #CCCCFF;
  color: Black;
}
/* #e53809 */
/* #f0dbac */
/* #575617 */
/* #474e5d */
/* #8cbba0 */
.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: Black;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
  .img {
  display: block;
  margin-left: auto;
  margin-right: auto;
}
}
</style>
</head>
<body>

<div class="about-section">
  <h1>About Workout Intensity Indicator Page</h1>
  <p>Your heart rate at rest is a measure of heart health and fitness. For most adults, a healthy heart rate is 60 to 100 beats a minute.

To check your pulse over your carotid artery, place your index and middle fingers on your neck to the side of your windpipe.

To check your pulse at your wrist, place two fingers between the bone and the tendon over your radial artery, located on the palm side of your wrist below the thumb.

When you feel your pulse, look at your watch and count the number of beats in 15 seconds.</p>
</div>
<!-- <p><b>Your heart rate at rest is a measure of heart health and fitness. For most adults, a healthy heart rate is 60 to 100 beats a minute.

To check your pulse over your carotid artery, place your index and middle fingers on your neck to the side of your windpipe.

To check your pulse at your wrist, place two fingers between the bone and the tendon over your radial artery, located on the palm side of your wrist below the thumb.

When you feel your pulse, look at your watch and count the number of beats in 15 seconds.</b></p> -->
<h2 style="text-align:center">Exercise</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="logo/Picture1.png" alt="Hard" style="width:60% height: 40%" class="center">
      <div class="container">
        <h2>Interval</h2>
        <p class="title">Hard</p>
        <p>50%-70% of Heart Rate Reserve</p>
        <p>Get fast</p>
        <p>Performance</p>
        <p>Burn more calories</p>
        <p>Short</p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="logo/Picture2.png" alt="Moderate" style="width:60% height: 40%" class="center">
      <div class="container">
        <h2>Vigorous</h2>
        <p class="title">Aerobic</p>
        <p>70%-85% of Maximum Heart Rate</p>
        <p>Get fitter</p>
        <p>Fitness</p>
        <p>Burn lot of calories</p>
        <p>Most of your time</p></div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="logo/Picture4.png" alt="Easy" style="width:60% height: 40%" class="center">
      <div class="container">
        <h2>Moderate</h2>
        <p class="title">Easy</p>
        <p>>86% of Maximum Heart Rate</p>
        <p>Get fit</p>
        <p>Health</p>
        <p>Burn some calories</p>
        <p>Long</p></div>
    </div>
  </div>
</div>

</body>
</html>