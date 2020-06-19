<?php

//$mysql = false;
function connectDB()
{
    // параметры для подключения
    $host = 'localhost'; // адрес сервера
    $database = 'user_log'; // имя базы данных
    $user = 'root'; // имя пользователя
    $password = ''; // пароль

    global $mysql;
    $mysql = mysqli_connect($host, $user, $password, $database) // подключение к базе данных
        or die("Ошибка при подключении: " . mysqli_error($mysql));
    $mysql->query('SET NAMES "UTF-8"');
}

function closeDB() {
    global $mysql;
    $mysql->close();
}
