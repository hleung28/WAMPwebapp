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

        $result = mysqli_query($connect,"SELECT * FROM $myList");

        echo "<table border='1'>
        <tr>
        <th>Database ID#</th>
        <th>Player Name</th>
        <th>Player Team</th>
        <th>Product Company</th>
        <th>Card Set</th>
        <th>Card Subset</th>
        <th>Card Number</th>
        <th>Price</th>
        <th>Condition</th>
        <th>User</th>
        
        </tr>";

        while($row = mysqli_fetch_array($result))
        {    
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['PlayerName'] . "</td>";
            echo "<td>" . $row['PlayerTeam'] . "</td>";
            echo "<td>" . $row['ProductCompany'] . "</td>";
            echo "<td>" . $row['CardSet'] . "</td>";
            echo "<td>" . $row['CardSubset'] . "</td>";
            echo "<td>" . $row['CardNumber'] . "</td>";
            echo "<td>" . $row['Price'] . "</td>";
            echo "<td>" . $row['CardCondition'] . "</td>";
            echo "<td>" . $row['User'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";

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