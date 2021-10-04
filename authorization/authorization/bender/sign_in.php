<?php
session_start();
require_once 'connected.php';
$login = $_POST['login'];
$pass = md5($_POST['pass']);
$check_user = mysqli_query($connect, "SELECT * FROM `users` where `login`='$login'and `password`='$pass'");
if (mysqli_num_rows($check_user) > 0) {
    $user = mysqli_fetch_assoc($check_user);
    $_SESSION['user'] =[
        "id" =>$user["id"],
        "full_name"=>$user["Full_name"],
        "avatar"=>$user["logo"],
        "email"=>$user["email"]
    ];
    header('location: ../profil.php');
} else {
    $_SESSION['message'] = 'неверные данные';
    header('location: ../index.php');
}