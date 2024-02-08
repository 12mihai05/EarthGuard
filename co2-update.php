<?php

$servername = "localhost";
$username = "root";
$password = "";
$db_name = "earthguard";

$con = new mysqli($servername, $username, $password, $db_name);

$locationName = $_POST['locationName'];
$co2level = $_POST['co2level'];

$query = "UPDATE `co2 em. record`
          SET CO2Level = '$co2level'
          WHERE LocationID = (SELECT LocationID FROM location WHERE LocationName = '$locationName')";

if ($con->query($query) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $con->error;
}

$con->close();
header('location:co2.php');
?>
