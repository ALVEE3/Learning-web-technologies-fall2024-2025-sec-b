<?php
session_start();

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];

    if (empty($username) || empty($password) || empty($confirmpassword)) {
        echo "All fields are required!";
    } else if ($password !== $confirmpassword) {
        echo "Passwords do not match!";
    } else {
        $_SESSION['registered_user'] = [
            'username' => $username,
            'password' => $password 
        ];

        echo "Registration successful!";
        header('location: login.html');
    }
} else {
    header('location: register.html');
}
?>
