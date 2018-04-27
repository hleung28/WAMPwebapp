<html>
    <body>
        <form action="searchProcessor.php" method="post">
            
            Search by:
            <select name="fSelect">
                <option selected disabled>Choose a search term</option>
                <option value="PlayerName">Player Name</option>
                <option value="PlayerTeam">Team</option>
                <option value="ProductCompany">Product Company</option>
                <option value="CardSet">Card Set</option>
                <option value="CardSubSet">Card SubSet</option>
                <option value="CardNumber">Card Number</option>
                <option value="Price">Price</option>
                <option value="CardCondition">Condition</option>
                <option value="User">User</option>
            </select>
            
            <br /><br />
            
            Search text: <input type="text" name="fSearch" /><br /><br />
            
            <input type="submit" value="Search" />
        </form>
        
        <br /><br />
        
        <form action="menu.php">
            <input type="submit" value="Back to Menu" />
        </form>
        
    </body>
</html>