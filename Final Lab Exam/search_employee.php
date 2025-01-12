<?php
// Database connection
$host = 'localhost';
$db = 'online_shop';
$user = 'root';
$pass = '';
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$username = $_GET['username'];
// Search query
$sql = "SELECT * FROM employees WHERE username LIKE '%$username%'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Name: " . $row["name"] . " - Contact: " . $row["contact_no"] . "<br>";
    }
} else {
    echo "No employee found.";
}
$conn->close();
?>

 