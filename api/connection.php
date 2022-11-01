<?php
    $host = "localhost";
    $user = "root";
    $pass="";
    $dbname = "nodejs";
    $port = 3306;

    try {
        $conn = new PDO("mysql:host=$host; dbname=" .$dbname, $user, $pass);
        // echo "Success!";
    } catch(PDOException  $err ) {
        echo "Erro" . $err->getMessage();
    }