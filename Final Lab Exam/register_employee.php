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
$name = $_POST['name'];
$contactNo = $_POST['contactNo'];
$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
// Insert into database
$sql = "INSERT INTO employees (name, contact_no, username, password) VALUES ('$name', '$contactNo', '$username', '$password')";
if ($conn->query($sql) === TRUE) {
    echo "New employee registered successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>