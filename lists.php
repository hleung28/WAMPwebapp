<html>
    <head>
        <title>Lists</title>
    </head>
    
    <body>
        <form action="createList.php" method="post">
            Create a List<br /><br />
            
            Name of List:<input type="text" name ="fList" /><br /><br />
            
            <input type="submit" value=Create />
        </form>
        
        <br /><br /><br />
        
        <form action="addToList.php" method="post">
            Add to a List<br /><br />
            
            Name of List:<input type="text" name ="fList" /><br /><br />
            
            Card ID#:<input type="text" name ="fID" /><br /><br />
            
            <input type="submit" value=Add />
        </form>
        
        <br /><br /><br />
        
        <form action="viewList.php" method="post">
            View a List<br /><br />
            
            Name of List:<input type="text" name ="fList" /><br /><br />
                        
            <input type="submit" value=View />
        </form>
        
        <form action="menu.php">
            <input type="submit" value="Back to Menu" />
        </form>
    </body>
</html>