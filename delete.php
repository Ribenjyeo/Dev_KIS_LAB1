<!-- Файл для удаления записи -->

<?php
require 'connectDB.php';

$id = $_GET['id'];

$sql = "DELETE  FROM message WHERE id = '$id'";
$query = $mysql -> prepare($sql);
$query -> execute();

header('Location: /Lab%201/blog.php');
?>