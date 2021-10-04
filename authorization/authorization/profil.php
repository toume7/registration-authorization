<?php
session_start();
if(!$_SESSION['user']){
header('Location: index.php');}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main.css">
    <title>Document</title>
</head>
<body>
    <form>
        <img src="<?php echo($_SESSION['user']['avatar']);?>">
        <p><?php echo($_SESSION['user']['full_name'])?></p>
        <a href="https://mail.yandex.ru/" ><?php echo($_SESSION['user']['email'])?></a>
        <a href="bender/logout.php"  class="logout">Выход</a>
    </form>
</body>
</html>
