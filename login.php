<?php
    require_once 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <h1>Log-in</h1>
    
    <form action="login-submit.php" method="post">
          <div class="input">
           <div class="form-group">
               <label>Name:</label>
               <input type="text" name="name" class="form-control">
            </div>
            
            <div class="form-group">
               <label>Password:</label>
               <input type="text" name="password" class="form-control">
            </div>
        
        <button type="submit" class="btn btn-success button">Submit</button>
        </div>
    </form>
    
    <button onclick="window.location.href='register.php';">Register</button>
    
    
    
</body>
</html>