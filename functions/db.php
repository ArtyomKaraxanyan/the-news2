<?php
try {
    $conn = new PDO("mysql:host=homework; dbname=news", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->exec("set names utf8");
}
catch(PDOException $e) {
    echo $e->getMessage();
}
?>

