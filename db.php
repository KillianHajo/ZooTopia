<?php
$pdo = new PDO('mysql:host=localhost;dbname=espace_membre;charset=utf8', 'root', 'sedebombe1303MOMO', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
]);

?>