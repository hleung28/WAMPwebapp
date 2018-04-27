<html>
    <head>
        <title>Forms</title>
    </head>
    
    <body>
        <?php
        
        $connect = mysqli_connect("localhost","root","");
        
        if (mysqli_connect_errno())
        {
            echo "Failed to connect to MySQL " . mysqli_connect_error();
        }
        
        mysqli_select_db($connect, "tradingcardsdb");
        
        $myUser=$_POST["fUser"];
        $myName=$_POST["fName"];
        $myTeam=$_POST["fTeam"];
        $myCompany=$_POST["fCompany"];
        $mySet=$_POST["fSet"];
        $mySubset=$_POST["fSubset"];
        $myNumber=$_POST["fNumber"];
        $myPrice=$_POST["fPrice"];
        $myCondition=$_POST["fCondition"];
        
        mysqli_query($connect,"SELECT * FROM baseballcards");
        
        $query = "INSERT INTO baseballcards (PlayerName,CardNumber,PlayerTeam,ProductCompany,CardSet,CardSubset,Price,CardCondition,User)
                    VALUES ('$myName','$myNumber','$myTeam','$myCompany','$mySet','$mySubset','$myPrice','$myCondition','$myUser')";
        
        //mysqli_query($connect, $query);
        
        if (mysqli_query($connect, $query))
        {
            echo "<h3>This card's data has been added successfully</h3>";
        }
        else
        {
            echo "<h3>Something went wrong.  The card was not added to the database</h3>";
        }
                        
        mysqli_close($connect);
        ?>
    
        <form action="menu.php">
            <input type="submit" value="Back to Menu" />
        </form>
    </body>
</html>