<html>
    <head>
        <title>Search Product</title>
        <p><a href="../index.php"> Return to the homepage </a></p>
    </head>
    <body>
        <!-- name -->
        <form action="../actions/searchWithName.php" method="post">
            <p>
                Name:<br>
                <input type="text" name="name">
            </p>

            <p>
                <input type="submit" value="Search">
            </p>
        </form>

        <!-- prices -->
        <form action="../actions/searchWithPrices.php" method="post">
            <p>
                Min Range:<br>
                <input type="text" name="min">
            </p>

            <p>
                Max Range:<br>
                <input type="text" name="max">
            </p>

            <p>
                <input type="submit" value="Search">
            </p>
        </form>
    </body>
</html>