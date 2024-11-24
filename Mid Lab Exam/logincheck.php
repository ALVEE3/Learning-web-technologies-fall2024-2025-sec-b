<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (isset($_SESSION['user_data']) && $_SESSION['user_data']['username'] === $username) {
        if (password_verify($password, $_SESSION['user_data']['password'])) {
            $_SESSION['logged_in'] = true;
            header("Location: home.php");
            exit();
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "User not found.";
    }
} else {
    echo "Invalid request.";
}
?>
