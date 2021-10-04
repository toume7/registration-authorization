<?php
session_start();
if($_SESSION['user']){
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
<form action="bender/sign_in.php" method="post">
    <label>Log in</label>
    <input type="text" name="login">
    <label>Pass</label>
    <input type="password" name="pass">
    <button type="submit">Send</button>
    <p>
        У вас нет аккаунта? - <a href="Registr.php">Зарегистрируйтесь</a>
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
