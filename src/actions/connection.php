<?php
    $host = "172.23.0.1";
    $user = "dev";
    $password = "devpass";
    $database = "esercizi";
    $port = 3306;

    $conn = new mysqli($host, $user, $password, $database, $port);

    if (!$conn) {
        die("connection failed: " . mysqli_connect_error());
    }
?>