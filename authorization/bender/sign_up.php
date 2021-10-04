<?php
session_start();
require_once 'connected.php';
$full_name = $_POST['full_name'];
$login = $_POST['login'];
$email = $_POST['email'];
$pass = md5($_POST['pass']);
$verf_pass = md5($_POST['verf_pass']);
if ($pass === $verf_pass) {
    $path = 'uploads/' . time() . $_FILES['logo']['name'];
    if (!move_uploaded_file($_FILES['logo']['tmp_name'], '../' . $path)) {
        $_SESSION['message'] = 'Ошибка при загрузке изображения';
        header('location: ../Registr.php');
    }
        mysqli_query($connect, "INSERT INTO `users` (`id`, `Full_name`, `login`, `email`, `password`, `logo`) VALUES (NULL, '$full_name', '$login', '$email', '$pass', '$path')");
    $_SESSION['message'] = "Регистрация прошла успешно";
    header('location: ../index.php');
} else {
    $_SESSION['message'] = "пароли не совпадают";
    header('location: ../Registr.php');
}
