<?php
session_start();
if($_SESSION['user']) {
    header('Location: profil.php');
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<form action="bender/sign_up.php" method="post" enctype="multipart/form-data">
    <label>ФИО</label>
    <input type="text" name="full_name" placeholder="Введите свое полное имя">
    <label>Логин</label>
    <input type="text" name="login" placeholder="Введите логин">
    <label>Изображение профиля</label>
    <input type="File" name="logo" placeholder="Загрузите изображение">
    <label>Почта</label>
    <input type="email" name="email" placeholder="Введите Email">
    <label>Pass</label>
    <input type="password" name="pass" placeholder="Введите пароль">
    <label>Подтверждение пароля</label>
    <input type="password" name="verf_pass" placeholder="Подтвердите пароль">
    <button>Send</button>
    <p>
        У вас уже есть аккаунт? - <a href="index.php">Войти</a>
    </p>
        <?php

        if($_SESSION['message'])
        {
            echo '<p class="msg">'.$_SESSION['message'].'</p> ';
        }
        unset($_SESSION['message']);
        ?>

</form>

</body>
</html>
