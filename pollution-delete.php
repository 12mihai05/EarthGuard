<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "earthguard";

    $con = new mysqli($servername,$username,$password,$db_name);
    

    $locationName = $_POST['locationName'];
        
    $query = "DELETE FROM `pol. record`
WHERE LocationID = (SELECT LocationID FROM location WHERE LocationName = '$locationName');
";
    
    mysqli_query($con, $query);
    header('location:pollution.php');
?>