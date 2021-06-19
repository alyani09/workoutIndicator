<?php
include('indexcss.php');
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
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #99a75e;
  color: white;
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
  color: grey;
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
  <p>Heart Rate Training.</p>
  <p><b><i>Keep track of your progress in improving your fitness. Take the same measurements about six weeks after you begin an exercise program and periodically afterward.

Each time you repeat your assessment, celebrate your progress and adjust your fitness goals accordingly. Share your results with your doctor or personal trainer for additional guidance.</i></b></p>
</div>

<h2 style="text-align:center">Exercise</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="logo/Picture1.png" alt="Hard" style="width:70%" class="center">
      <div class="container">
        <h2>Interval</h2>
        <p class="title">Hard</p>
        <p>50%-70% of Heart Rate Reserve</p>
        <p>Performance</p>
        <p>Burn more calories</p>
        <p>Activities
          <li>Running</li>
           <li>Lifting weights or using resistance bands</li>
           <li>Calisthenics that use body weight for resistance</li>
           <li>Heavy gardening or yardwork</li></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="logo/Picture2.png" alt="Moderate" style="width:70%" class="center">
      <div class="container">
        <h2>Vigorous</h2>
        <p class="title">Aerobic</p>
        <p>70%-85% of Maximum Heart Rate</p>
        <p>Burn lot of calories</p>
        <p>Activities
        <li>Running</li>
           <li>Swimming laps</li>
           <li>Fast bicycling or biking hills</li>
           <li>Playing basketball or soccer</li>
           <li>Playing singles tennis</li></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="logo/Picture4.png" alt="Easy" style="width:70%" class="center">
      <div class="container">
        <h2>Moderate</h2>
        <p class="title">Easy</p>
        <p>>86% of Maximum Heart Rate</p>
        <p>Get fit</p>
        <p>Burn some calories</p>
        <p>Activities
          <li>Walking fast</li>
           <li>Water aerobics</li>
           <li>Bicycling on mostly level ground</li>
           <li>Pushing a lawn mower</li></p>
      </div>
    </div>
  </div>
</div>

</body>
</html>