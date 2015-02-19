<?php
mysql_connect('localhost', 'root', '');
mysql_select_db('testt');
$name = $_POST['name'];
$text = $_POST['text'];

$sql = 'INSERT INTO news(name, text) VALUES ("'.$name.'", "'.$text.'")';
if (!mysql_query($sql)){
    echo 'Ошибка при добавлении данных';
}
else {
    echo 'Данные успешно добавлены!';
}
