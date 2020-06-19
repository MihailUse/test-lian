<?php
require_once 'connect.php';

function getDetails() {
    global $mysql;
    connectDB();
    $result = $mysql->query('SELECT * FROM `portfolio` ORDER BY `portfolio`.`id` ASC');
    closeDB();
    return resultToArray($result);
}

function resultToArray($result) {
    $array = array();
    while (($row = $result->fetch_assoc()) != false) {
        $array[] = $row;
    }
    return $array;
}

