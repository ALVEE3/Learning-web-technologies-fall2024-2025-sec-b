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
$adminName = $_POST['adminName'];
$adminUsername = $_POST['adminUsername'];
$adminPassword = password_hash($_POST['adminPassword'], PASSWORD_DEFAULT);

// Insert into admins table
$sql = "INSERT INTO admins (name, username, password) VALUES ('$adminName', '$adminUsername', '$adminPassword')";

if ($conn->query($sql) === TRUE) {
    echo "New admin registered successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
