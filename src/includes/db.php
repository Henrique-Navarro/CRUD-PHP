<?php
    $host = "db";
    $username = "user";
    $password = "password";
    $database = "crud_db";

    $connection = mysqli_connect($host, $username, $password, $database);

    if (!$connection) {
        die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
    }
?>
