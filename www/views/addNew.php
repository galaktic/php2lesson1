<!DOCTYPE html>
<html>
<head>
    <title>Новости</title>
    <meta charset="utf-8">
</head>
<body>
<h4>Добавление новости</h4>
<form action="../models/functions/processNew.php" method="POST">
    <input type="text" name="name" value="Введите название новости" required />
    <br/>
    <input type="text" name="text" value="Введите текст новости" required />
    <br/>
    <input type="submit" value="Отправить" />
</form>


</body>
</html>