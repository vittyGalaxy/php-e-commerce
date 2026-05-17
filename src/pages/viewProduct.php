<html>
    <head>
        <title> View Product</title>
        <p><a href="../index.php"> Return to the homepage </a></p>
    </head>
    <body>
        <table border="1">
            <tr>
                <th> Name </th>
                <th> Price </th>

                <?php
                    require "../actions/connection.php";
                    $sql_product = "SELECT name, price FROM Product";
                    $result = $conn->query($sql_product);

                    while ($row = $result->fetch_assoc()){
                        echo "<tr>";
                            echo "<td>" . $row["name"]      . "</td>";
                            echo "<td>" . $row["price"]     . "</td>";
                        echo "</tr>";
                    }
                ?>
            </tr>
        </table>
    </body>
</html>