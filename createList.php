<html>
    <body>
        <?php
        
        $connect = mysqli_connect("localhost","root","");
        
        if (mysqli_connect_errno())
        {
            echo "Failed to connect to MySQL " . mysqli_connect_error();
        }
        
        $myList = $_POST["fList"];
        
        mysqli_select_db($connect, "tradingcardsdb");
              
        //$query = "CREATE TABLE $myList ( 'id' INT(30) NOT NULL AUTO_INCREMENT , 'PlayerName' VARCHAR(50) NOT NULL , 'CardNumber' VARCHAR(20) NOT NULL ,
        //                    'PlayerTeam' VARCHAR(50) NOT NULL , 'ProductCompany' VARCHAR(10) NOT NULL , 'CardSet' VARCHAR(100) NOT NULL ,
        //                    'Card Subset' VARCHAR(100) NOT NULL , 'Price' VARCHAR(20) NOT NULL , 'CardCondition' VARCHAR(10) NOT NULL ,
        //                    'User' VARCHAR(20) NOT NULL , PRIMARY KEY ('id'))";
        
        $query = "CREATE TABLE $myList AS (SELECT * FROM baseballcards)";
        
        if (mysqli_query($connect, $query))
        {
            echo "<h3>The list has been created successfully</h3>";
            $delQuery = "TRUNCATE $myList";
            mysqli_query($connect, $delQuery);
        }
        else
        {
            echo "<h3>Something went wrong.  The list was not created</h3>";
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