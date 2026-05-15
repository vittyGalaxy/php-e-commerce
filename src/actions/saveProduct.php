<?php
    require "connection.php";

    $name      = $_POST["title"];
    $price      = $_POST["price"];

    $sql_product = "INSERT INTO Product (name, price) VALUES ('$name', '$price')";

    if ($conn->query($sql_product) === TRUE){
        echo "Product inserted correctly";
        echo "<p><a href=" . "../index.php" . "> Return to the homepage </a></p>";
    } else {
        echo "Error saving";
    }

    $conn->close();
?>