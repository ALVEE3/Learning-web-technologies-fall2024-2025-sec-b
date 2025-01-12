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
$newName = $_POST['newName'];
$newContact = $_POST['newContact'];
$newPassword = password_hash($_POST['newPassword'], PASSWORD_DEFAULT);
// Update query
$sql = "UPDATE employees SET name = '$newName', contact_no = '$newContact', password = '$newPassword' WHERE username = '$username'";
if ($conn->query($sql) === TRUE) {
    echo "Employee updated successfully!";
} else {
    echo "Error: " . $conn->error;
}
$conn->close();
?>

 