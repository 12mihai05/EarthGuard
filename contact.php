<?php
    
require_once 'connect.php';


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="css/contact.css">
</head>
<body>
   
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
      <a href="layout.php">Home</a>
      <a href="news.php">Records</a>
      <a href="contact.php" class="active">Contact</a>
    </div>
   
   
   
    
      
       
        <h1 class="text-shadow">Feedback:</h1>
        
        <form action="contact-submit.php" method="post">
          <div class="input">
           <div class="form-group">
               <label class="text-shadow">Name:</label>
               <input type="text" name="name" class="form-control">
            </div>
            
            <div class="form-group">
               <label class="text-shadow">Email:</label>
               <input type="email" name="email" class="form-control">
            </div>
            
            </div>
            <div class="form-group message">
               <label class="text-shadow">Message:</label>
                <textarea type="text" name="message" class="message" rows="6" cols="50">
                </textarea>
            </div>    
            
            
            <button type="submit" class="btn btn-success button">Submit</button>
            
        </form>
        
        
        
    
    
    
</body>
</html>