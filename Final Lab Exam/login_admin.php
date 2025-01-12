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
$password = $_POST['password'];

// Check if admin exists
$sql = "SELECT * FROM admins WHERE username = '$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    // Verify password
    if (password_verify($password, $row['password'])) {
        echo "Admin login successful!";
    } else {
        echo "Incorrect password!";
    }
} else {
    echo "Admin username not found!";
}

$conn->close();
?>
