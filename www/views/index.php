<!DOCTYPE html>
<html>
<head>
    <title>Новости</title>
    <meta charset="utf-8">
</head>
<body>
    <h3>Новости Москвы</h3>

    <?php foreach ($items as $item): ?>
    <?php echo $item['name']; ?></a>
    <br>
    <?php endforeach; ?>

    <a href="views/addNew.php"><h4>Добавить новость</h4></a>

</body>
</html>
