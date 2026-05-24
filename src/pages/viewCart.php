<?php session_start(); ?> 

<html>
    <head>
        <title> View Cart</title>
        <p><a href="../index.php"> Return to the homepage </a></p>
    </head>
    <body>
        <table border="1">
            <tr>
                <th> Name </th>
                <th> Price </th>
                <th> Minus </th>

                <?php
                    require "../actions/connection.php";
                   
                    // per tenere l'utente attivo
                    echo "<form action='../actions/setUser.php' method='POST'>";
                        echo "<p>User Code: </p>";
                        echo "<input type='text' name='taxIdCode'>";
                        echo "<input type='hidden' name='redirect' value='viewCart.php'>";
                        echo "<input type='submit' value='Conferma'>";
                    echo "</form>"; 

                    if (isset($_SESSION["taxIdCode"])){
                        
                        $taxIdCode  = $_SESSION["taxIdCode"];
                        $sql_cart   = " SELECT Product.name, Product.price, Product.idProduct
                                        FROM User_Cart
                                        JOIN Product ON User_Cart.idProduct = Product.idProduct
                                        WHERE User_Cart.taxIdCode = '$taxIdCode'";

                        $result = $conn->query($sql_cart);
    
                        while ($row = $result->fetch_assoc()){
                            echo "<form action='../actions/productManagement.php' method='POST'>";
                                echo "<input type='hidden' name='idProduct' value='" . $row["idProduct"] . "'>";
                                echo "<tr>";
                                    echo "<td>" . $row["name"]  . "</td>";
                                    echo "<td>" . $row["price"] . "</td>";
                                    echo "<td><input type='submit' name='handle' value='remove'></td>";
                                echo "</tr>";
                            echo "</form>";
                        }
                    }
                ?>
            </tr>
        </table>
    </body>
</html>