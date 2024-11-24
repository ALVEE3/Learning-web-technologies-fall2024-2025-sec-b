<?php
session_start();
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: login.html");
    exit();
}

$user_data = $_SESSION['user_data'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
</head>
<body>
    <h2>Welcome, <?php echo htmlspecialchars($user_data['username']); ?>!</h2>
    <p>Email: <?php echo htmlspecialchars($user_data['email']); ?></p>
    <p><a href="logout.php">Logout</a></p>
</body>
</html>
