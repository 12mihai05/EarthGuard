<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "earthguard";

    $con = new mysqli($servername,$username,$password,$db_name);
    

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
        
    $query = "INSERT INTO user (Username, Password, Email) VALUES ('$name', '$password', '$email')";
    
    mysqli_query($con, $query);
    header('location:register.php');
?>