<?php
require __DIR__ . '/models/functions/functions.php';
$items = News_getAll();
include __DIR__ . '/views/index.php';
?>
