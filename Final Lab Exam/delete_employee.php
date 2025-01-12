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
// Get data from POST
$username = $_POST['username'];
// Delete query
$sql = "DELETE FROM employees WHERE username = '$username'";
if ($conn->query($sql) === TRUE) {
    echo "Employee deleted successfully!";
} else {
    echo "Error: " . $conn->error;
}
$conn->close();
?>

 