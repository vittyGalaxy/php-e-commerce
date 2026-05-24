<?php
    require "connection.php";

    session_start();
    $taxIdCode = $_SESSION["taxIdCode"];
    $idProduct = $_POST["idProduct"];

    echo "<p><a href=" . "../index.php" . "> Return to the homepage </a></p>";

    if ($_POST["handle"] === "add") {
        $sql_cart = "INSERT INTO User_Cart (idProduct, taxIdCode) VALUES ('$idProduct', '$taxIdCode')";
        $sql_product = "UPDATE Product SET quantity = quantity - 1 WHERE (Product.idProduct = '$idProduct')";

        if ($conn->query($sql_cart) && $conn->query($sql_product)){
            echo "Product inserted correctly";
        } else {
            echo "Error saving";
        }
    }

    if ($_POST["handle"] === "remove") {
        $sql_cart = "DELETE FROM User_Cart WHERE idProduct = '$idProduct'";
        $sql_product = "UPDATE Product SET quantity = quantity + 1 WHERE (Product.idProduct = '$idProduct')";

        if ($conn->query($sql_cart) && $conn->query($sql_product)){
            echo "Product removed correctly";
        } else {
            echo "Error";
        }
    }
    
    $conn->close();
?>