<html>
    <body>
        <?php
        
        $connect = mysqli_connect("localhost","root","");
        
        if (mysqli_connect_errno())
        {
            echo "Failed to connect to MySQL " . mysqli_connect_error();
        }
        
        mysqli_select_db($connect, "tradingcardsdb");
        
        $myList = $_POST["fList"];
        $myID = $_POST["fID"];
        
        $query = "INSERT INTO $myList SELECT * FROM baseballcards WHERE id = $myID";
        
        if (mysqli_query($connect, $query))
        {
            echo "<h3>This card's data has been added successfully</h3>";
        }
        else
        {
            echo "<h3>Something went wrong.  The card was not added to the list</h3>";
        }

        mysqli_close($connect);
        ?>
        
        <form action="lists.php">
            <input type="submit" value="Back to Lists" />
        </form>
        
        <form action="menu.php">
            <input type="submit" value="Back to Menu" />
        </form>
    </body>
</html>