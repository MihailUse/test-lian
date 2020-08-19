<?php

$name = testInput($_POST['name']);
$email = testInput($_POST['email']);
$massage = testInput($_POST['massage']);


function testInput($value)
{
    $value = trim($value);
    $value = stripslashes($value);
    $value = strip_tags($value);
    $value = htmlspecialchars($value);
    if (empty($value)) {
        echo 'Введены некоректные данные';
        exit;
    }
    return $value;
}

$subject = '=?utf-8?B?' . base64_encode('Сообщение с сайта Lian') . '?=';
$message = wordwrap($message, 70, "\r\n");  // На случай если какая-то строка письма длиннее 70 символов
$headers = 'From: $email' . "\r\n" .
    'Reply-To: ' . $email . "\r\n" .
    'Content-type: text/html; charset=utf-8';

mail('alkaevmih@gmail.com', $subject, $massage, $headers);

//echo '<script type="text/javascript"> function show_alert() { alert("Спасибо за сообщение"); } </script>';
header('location: ../pages/contact.php');
