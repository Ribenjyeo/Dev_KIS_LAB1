<!DOCTYPE html>
<html>
<head>
    <meta charset = "utf-8">
    <title>Гостевая кинга Куманек А.А.</title>
    <link rel = "stylesheet" type = "text/css" href = "blog.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>
 <body>       
     <!-- \\\\\\\Top -->
     <form action="exit.php">
        <div class = "cap cap-site">
            <h2>Гостевая книга <?=$_COOKIE['user']?></h2>
            <div class="user-exit" >
                <button type="submit" class="btn btn-exit">Смена пользователя </button>
            </div>
        </div>
    </form>
     <!-- Top //////-->
     <!--- \\\\\\\Post-->
     <div class="card gedf-card">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                                <a class="nav-link active">Сделать публикацию</a>
                            </li>
                        </ul>
                    </div>
                    <form action="message.php" metod="GET">
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane fade show active">
                                <div class="form-group">
                                     <textarea class="form-control" name="newmessage" rows="3" placeholder="Что напишем?"></textarea> 
                                </div>
                            </div>
                        </div>
                        <div class="btn-toolbar justify-content-between">
                            <div class="btn-group">
                                <button type="submit" class="btn btn-primary">Опубликовать</button>
                            </div>
                        </div>
                    </div>
                    </form>
    </div>
    <!-- Post /////-->     
   
    <?php
        require 'Outputmessage.php';
    ?>
  
</body>
</html>