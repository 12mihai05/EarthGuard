<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/pollution.css">
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

$sql = "SELECT `pol. record`.PollutionLevel, 
               `pol. source`.SourceName, 
               `pol. threshold`.ThresholdValue,
               location.LocationName
        FROM `pol. record`
        JOIN `pol. source` ON `pol. record`.SourceID = `pol. source`.SourceID
        JOIN `pol. threshold` ON `pol. record`.SourceID = `pol. threshold`.SourceID
        JOIN location ON `pol. record`.LocationID = location.LocationID";

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
    echo "<tr>
            <th>Pollution Level</th>
            <th>Source Name</th>
            <th>Threshold Value</th>
            <th>Location</th>
          </tr>";

    foreach ($data as $row) {
        $pollutionLevel = $row['PollutionLevel'];
        $sourceName = $row['SourceName'];
        $thresholdValue = $row['ThresholdValue'];
        $locationName = $row['LocationName'];

        echo "<tr>
                <td>$pollutionLevel</td>
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
   
   
    <form action="pollution-delete.php" method="post">
           <div class="form-group" >
               <label class="text-shadow">Location:</label>
               <input type="text" name="locationName" class="form-control">
            </div>
    
    <button type="submit" class="btn btn-success button">Submit</button>
            
        </form>
    
    
   <h4 class="text-shadow">
        If you want to edit the Pollution level from an area enter the name of the location and the Pollution level value:
    </h4>
    
    
    <form action="pollution-update.php" method="post">
           <div class="form-group">
               <label class="text-shadow">Location:</label>
               <input type="text" name="locationName" class="form-control">
               <label class="text-shadow">Pollution Level:</label>
               <input type="text" name="pollevel" class="form-control">
            </div>
    
    <button type="submit" class="btn btn-success button">Submit</button>
    </form>
</body>
</html>