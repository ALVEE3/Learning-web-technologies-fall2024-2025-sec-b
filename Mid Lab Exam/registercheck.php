<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $_SESSION['user_data'] = [
        'username' => $username,
        'email' => $email,
        'password' => $password
    ];

    header("Location: login.html");
    exit();
} else {
    echo "Invalid request.";
}
?>
