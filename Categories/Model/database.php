<?php
    $dsn = 'mysql:host=localhost;dbname=test2';
    $username = 'root';//default
    $password = '';//default

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>