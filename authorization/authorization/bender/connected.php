<?php
$connect = mysqli_connect("localhost", "root", "root", 'rp-31');
if (!$connect) {
    die('Ошибка подключение к базе данных');
}