<!-- Файл для редактирования записей -->

<?php
require 'connectDB.php';

$id = $_GET['id'];
setcookie('id', $id, time() + 10);
$messageedit = $mysql -> query("SELECT * FROM message WHERE id = '$id'");
$ms = $messageedit -> fetch_assoc();
$textforedit = $ms['text'];

$newtext = $_GET['newmessage'];

if( isset( $_GET['button-edit'] ) )
{   
    $id = $_COOKIE['id'];
    $newmessage = $mysql -> query("UPDATE message SET text = '$newtext' WHERE id = '$id'");
    header('Location: /Lab%201/blog.php');
}

?>

<html>
<head>
    <meta charset = "utf-8">
    <title>Гостевая кинга Куманек А.А.</title>
    <link rel = "stylesheet" type = "text/css" href = "blog.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>
 <body>       
     <form action="blog.php">
        <div class = "cap cap-site">
            <h2>Редактор записей</h2>
        </div>
        <div class="user-exit" >
                <button type="submit" class="btn btn-exit">Отмена редактирования</button>
            </div>
    </form>
    <div class="card gedf-card">
                    <form method="GET">
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane fade show active">
                                <div class="form-group">
                                     <textarea class="form-control" name="newmessage" rows="3"><?php echo $textforedit ?></textarea> 
                                </div>
                            </div>
                        </div>
                        <div class="btn-toolbar justify-content-between">
                            <div class="btn-group">
                                <button type="submit" class="btn btn-primary" name="button-edit">Изменить текст</button>
                            </div>
                        </div>
                    </div>
                    </form>
    </div>
</body>
</html>
