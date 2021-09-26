<!-- Файл для добавления всех сообщений из БД на страницу blog.php -->

<?php
require 'connectDB.php';

$outmessage = $mysql -> query("SELECT * FROM message ORDER BY id DESC");



while($row = $outmessage -> fetch_assoc()){
   echo '<div class="card messageoutput">';
        echo '<div class="card-header">';
            echo '<div class="d-flex justify-content-between align-items-center">';
                echo '<div class="d-flex justify-content-between align-items-center">';
                    echo '<div class="ml-2">';
                        echo '<div class="h5 m-0">';
                            echo "@";
                            echo $row['name'];
                        echo '</div>';
                    echo '</div>';
                echo '</div>';
            echo ' </div>';

        echo ' </div>';
        echo ' <div class="card-body"> ';
            echo '<div class="text-muted h7 mb-2"> <i class="fa fa-clock-o"></i>';
                echo $row['data'];
            echo '</div> ';
                echo '<p class="card-text">';
                    echo $row['text'];
                echo ' </p>';
        echo ' </div>';
            echo '<div class="card-footer">';
                echo ' <a href="delete.php?id='.$row['id'].'" class="card-link"><i class="fa fa-gittip"></i>Delete</a>';
                echo ' <a href="edit.php?id='.$row['id'].'" class="card-link"><i class="fa fa-comment"></i>Edit</a>';
            echo ' </div>';
    echo ' </div> ';

}


?>