<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "earthguard";

$con = new mysqli($servername, $username, $password, $db_name);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// Assuming you are using POST method to submit the form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize user input to prevent SQL injection
    $name = $con->real_escape_string($_POST['name']);
    $password = $con->real_escape_string($_POST['password']);

    // Query to check if the user exists with the provided name and password
    $query = "SELECT user.*, userrole.rolename 
              FROM user 
              LEFT JOIN userrole ON user.userrole_id = userrole.userrole_id 
              WHERE user.name = '$name' AND user.password = '$password'";

    $result = $con->query($query);

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $rolename = $row['rolename'];

        echo "<p>Login successful. Welcome, $name! Your role is: $rolename</p>";
        header('location:layout.php');
    } else {
        echo "<p>Invalid username or password. Please try again.</p>";
        header('location:login.php');
    }
}

    mysqli_query($con, $query);
    ?>