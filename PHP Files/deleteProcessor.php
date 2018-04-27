<html>
    <body>
        <?php
        
        $connect = mysqli_connect("localhost","root","");
        
        if (mysqli_connect_errno())
        {
            echo "Failed to connect to MySQL " . mysqli_connect_error();
        }
        
        mysqli_select_db($connect, "tradingcardsdb");
        
        $myDelID=$_POST["fDelID"];
        
        $query = "DELETE FROM baseballcards WHERE id=$myDelID";
        
        if (mysqli_query($connect, $query))
        {
            echo "<h3>This card's data has been deleted successfully</h3>";
        }
        else
        {
            echo "<h3>Something went wrong.  The card was not deleted</h3>";
        }
                        
        mysqli_close($connect);
        ?>
        
        <form action="menu.php">
            <input type="submit" value="Back to Menu" />
        </form>
    </body>
</html>