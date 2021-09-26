<!-- Файл для записи публикации в БД -->

<?php
$message = $_GET['newmessage'];
$login = $_COOKIE['user'];

if($message == "" || !trim($message)){
    echo '<h1>Вы ничего не записали</h1>';
    exit();
}

require 'connectDB.php';
$mysql -> query("INSERT INTO message (name, text, data) VALUES ('$login', '$message', NOW())");
$mysql -> close();
header('Location: /Lab%201/blog.php');
?>
