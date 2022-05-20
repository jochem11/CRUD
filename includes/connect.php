<?php
    $host = 'localhost';
    $db = 'crud';
    $user = 'root';
    $pass = '';
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

    try
    {
        $connect = new PDO($dsn, $user, $pass);
    }
    catch (PDOExeption $e)
    {
        echo $e->getMessage();
        die("sorry, database probleem");
    }
?>