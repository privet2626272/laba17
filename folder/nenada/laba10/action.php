<?php
// action.php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $gender = $_POST['gender'];


    if ($password !== $confirm_password) {
        die('Пароли не совпадают');
    }

   
    header('Location: calculator.php');
    exit();
}
?>

