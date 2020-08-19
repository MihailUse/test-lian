<?php

class base {
    const DB_HOSTNAME = 'localhost';  // адрес сервера
    const DB_NAME = 'user_log';       // имя базы данных
    const DB_USERNAME = 'root';       // имя пользователя
    const DB_PASSWORD = '';           // пароль
    public $mysqli;
    public $resultArray;
    
    function __construct() {
        $this->mysqli = @new mysqli(self::DB_HOSTNAME, self::DB_USERNAME, self::DB_PASSWORD, self::DB_NAME);
        if ($this->mysqli->connect_errno) {
            $message = array('error' => "Не удалось подключиться: " . mysqli_connect_error());
            exit(json_encode($message));
        }
    }
    
    public function getPosts($limit = 5, $filter = "_") {
        $sql = "SELECT * FROM portfolio WHERE tags LIKE '%" . $filter . "%' ORDER BY id ASC LIMIT $limit";
        $result = $this->mysqli->query($sql) or die('Ошибка при запросе' . $this->mysqli->error);
        $this->db_close();
        
        /* извлечение ассоциативного массива */
        $array = array();
        while (($row = $result->fetch_assoc())) {
            $array[] = $row;
        }
        
        $this->resultArray = $array;
    }
    
    public function sendPosts() {
        echo json_encode($this->resultArray);
    }
    
    public function db_close() {
        $this->mysqli->close();
    }
}

$limit = (int)$_GET['limit'];
$filter = $_GET['filter'];

$selectBase = new base();

if (isset($filter)) {
    $selectBase->getPosts($limit, $filter);
} else {
    $selectBase->getPosts($limit);
}

$selectBase->sendPosts();


/*
require_once 'connect.php';

function getDetails($limit)
{
    global $mysql;
    connectDB();
    $result = $mysql->query("SELECT * FROM `portfolio` ORDER BY `portfolio`.`id` ASC LIMIT $limit");
    closeDB();
    return resultToArray($result);
}

function resultToArray($result)
{
    $array = array();
    while (($row = $result->fetch_assoc()) != false) {
        $array[] = $row;
    }
    return $array;
}

$limit = (int)$_GET['limit'];
$filter = $_GET['filter'];

if ($limit) {
    $limit = ($limit - 2) . ", 2";
} elseif ($limit == null) {
    $limit = 5;
}

exit(json_encode(getDetails($limit)));
*/