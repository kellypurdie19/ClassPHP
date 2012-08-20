<?php
    $dsn = 'mysql:host=localhost;dbname=family';
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