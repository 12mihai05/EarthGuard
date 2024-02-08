<?php
require_once 'connect.php';


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/co2.css">
</head>

<body>
    
    <div class="navbar">
        <img src="images/images.jpeg" alt="">
      <a href="layout.php">Home</a>
      <a href="news.php" class="active">Records</a>
      <a href="contact.php">Contact</a>
    </div>
   
   
   <?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "earthguard";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT 
              `co2 em. record`.CO2Level, 
              `co2 em. source`.SourceName, 
              `co2 em. threshold`.ThresholdValue,
              location.LocationName
       FROM `co2 em. record`
       JOIN `co2 em. source` ON `co2 em. record`.CO2SourceID = `co2 em. source`.CO2SourceID
       JOIN `co2 em. threshold` ON `co2 em. record`.CO2SourceID = `co2 em. threshold`.SourceID
       JOIN `location` ON `co2 em. record`.LocationID = `location`.LocationID";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Initialize an array to store the retrieved data
    $data = array();

    // Fetch data and store it in the array
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }

    $result->close();

    echo "<table class='tabel'>";

    // Print table header
    echo "<tr>
            <th>CO2 Level</th>
            <th>Source Name</th>
            <th>Threshold Value</th>
            <th>Location Name</th>
          </tr>";

    // Print table rows
    foreach ($data as $row) {
        $co2Level = $row['CO2Level'];
        $sourceName = $row['SourceName'];
        $thresholdValue = $row['ThresholdValue'];
        $locationName = $row['LocationName'];

        echo "<tr>
                <td>$co2Level</td>
                <td>$sourceName</td>
                <td>$thresholdValue</td>
                <td>$locationName</td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "No results found";
}

// Close the database connection
$conn->close();
?>

    
    <h4 class="text-shadow">If the problems have been solved in an area you can delete it by writing the name of the location </h4>
    
     <form action="co2-delete.php" method="post">
           <div class="form-group">
               <label class="text-shadow">Location:</label>
               <input type="text" name="locationName" class="form-control">
            </div>
    
    <button type="submit" class="btn btn-success button">Submit</button>
            
        </form>
    
    <h4 class="text-shadow">
        If you want to edit the CO2 level from an area enter the name of the location and the co2 level value:
    </h4>
    
    
    <form action="co2-update.php" method="post">
           <div class="form-group">
               <label class="text-shadow">Location:</label>
               <input type="text" name="locationName" class="form-control">
               <label class="text-shadow">CO2 Level:</label>
               <input type="text" name="co2level" class="form-control">
            </div>
    
    <button type="submit" class="btn btn-success button">Submit</button>
            
        </form>
    
</body>
</html>