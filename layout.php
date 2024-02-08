<?php
require_once 'connect.php';


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    
    <div class="navbar">
        <img src="images/images.jpeg" alt="">
      <a href="layout.php" class="active">Home</a>
      <a href="news.php">Records</a>
      <a href="contact.php">Contact</a>
    </div>
   
   <div class="home">
       <div class="section">
           <img src="images/images.jpeg" alt="">
           <div class="home-title">
               <h1>EARTHGUARD</h1>
           </div>
           <div class="home-content">
               <h4 class="text-shadow">We are the guards of our planet. <br>
               Check the latest records about pollution and CO2 emmisions.</h4>
           </div>
           <button onclick="window.location.href='pollution.php';">Pollution</button>
           <button onclick="window.location.href='co2.php';">CO2 emmisions</button>
       </div>
   </div>
   

    
</body>
</html>