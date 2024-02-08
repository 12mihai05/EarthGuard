<?php
require_once 'connect.php';


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/news.css">
</head>

<body>
    
    <div class="navbar">
        <img src="images/images.jpeg" alt="">
      <a href="layout.php">Home</a>
      <a href="news.php" class="active">Records</a>
      <a href="contact.php">Contact</a>
    </div>
   
<div>
   <div class="split left">
  <div class="centered">
     <img src="images/co2.jpg" alt="" id="co2">
     <h2 class="text-shadow">CO2 Emissions</h2>
    <button onclick="window.location.href='co2.php';">Check Records</button>
  </div>
</div>

<div class="split right">
  <div class="centered">
   <img src="images/pollution.jpg" alt="" id="pollution">
    <h2 class="text-shadow">Pollution</h2>
   <button onclick="window.location.href='pollution.php';">Check Records</button>
  </div>
</div>
</div>
    
</body>
</html>