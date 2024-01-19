<?php 
    try {
        $host = "localhost";
        $dbname = "id21790251_bikes";
        $user = "id21790251_bike";
        $password = "Qwerty123!";

        $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $err) {
        echo $err->getMessage();
    }
?>