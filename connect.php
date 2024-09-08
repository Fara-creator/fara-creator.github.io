<?php
$servername = "sql211.byethost24.com"; // Usually 'localhost' for Byethost
$username = "b24_37072027";
$password = "Jafolkasa01?";
$dbname = "b24_37072027_Users";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Example query
$sql = "SELECT * FROM Users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data in JSON format
    $data = array();
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    echo json_encode($data);
} else {
    echo "0 results";
}


$conn->close();
?>
