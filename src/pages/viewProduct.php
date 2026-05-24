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
                <th> Quantity </th>
                <th> Add </th>

                <?php
                    require "../actions/connection.php";
                    $sql_product = "SELECT idProduct, name, price, quantity FROM Product WHERE Product.quantity > 0";
                    $result = $conn->query($sql_product);

                    // per tenere l'utente attivo
                    echo "<form action='../actions/setUser.php' method='POST'>";
                        echo "<p>User Code: </p>";
                        echo "<input type='text' name='taxIdCode'>";
                        echo "<input type='hidden' name='redirect' value='viewProduct.php'>";
                        echo "<input type='submit' value='Conferma'>";
                    echo "</form>"; 

                    while ($row = $result->fetch_assoc()){
                        echo "<form action='../actions/productManagement.php' method='POST'>";
                            echo "<tr>";
                                echo "<td>" . $row["name"]          . "</td>";
                                echo "<td>" . $row["price"]         . "</td>";
                                echo "<td>" . $row["quantity"]      . "</td>";
                                echo "<input type='hidden' name='idProduct' value=" . $row["idProduct"] . ">";
                                echo "<td> <input type='submit' name='handle' value='add'></td>";
                            echo "</tr>";
                        echo "</form>";
                    }
                ?>
            </tr>
        </table>
    </body>
</html>