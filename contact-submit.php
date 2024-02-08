<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "earthguard";

    $con = new mysqli($servername,$username,$password,$db_name);
    

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
        
    $query = "INSERT INTO feedback (Name, Email, FeedbackContent) VALUES ('$name', '$email', '$message')";
    
    mysqli_query($con, $query);
    header('location:contact.php');
?>