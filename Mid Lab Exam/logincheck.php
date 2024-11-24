<?php
    session_start();

    if(isset($_POST['submit'])){
 
        $username = ($_POST['username']);
        $password = ($_POST['password']);


        if($username == null || empty($password)){
            echo "Null username/password";
        }else if($username == $password){
            echo "valid user!";

            $_SESSION['xyz'] = true;
            header('location: home.php');
        }else{
            echo "Invalid user!";
        }
    }else{
        header('location: login.html');
    }
?>