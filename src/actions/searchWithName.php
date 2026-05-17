<?php
    require "../actions/connection.php";

    $name = "";

    if (!empty($_POST["name"])) {
        $name = $_POST["name"];
        $sql_product = "SELECT * FROM Product WHERE Product.name LIKE '%$name%'";
        $result = $conn->query($sql_product);
    }

    if ($result != null) {
        echo "<table border='1'>";
            echo "<tr>";
                echo "<th> ID Product </th>";
                echo "<th> name </th>";
                echo "<th> price </th>";
                echo "<th> add </th>";
            echo "</tr>";
            
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                    echo "<td>" . $row["idProduct"]     . "</td>";
                    echo "<td>" . $row["name"]          . "</td>";
                    echo "<td>" . $row["price"]         . "</td>";
                    echo "<td> <input type='submit' value='+'> </td>";
                echo "</tr>";
            }

        echo "</table>";
    }
?>