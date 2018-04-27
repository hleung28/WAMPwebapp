<html>
    <body>
        
        <form action="formProcessor.php" method="post">
            Add a new card to the collection: <br /><br /><br />
            
            User: <input type="text" name="fUser" /><br /><br />
            
            Player Information: <br />
            
            Player Name: <input type="text" name="fName" /><br />
                        
            Player Team:
            <select name="fTeam">
                <option selected disabled>Choose a team</option>
                <optgroup label="AL East">
                    <option value="Baltimore Orioles">Baltimore Orioles</option>
                    <option value="Boston Red Sox">Boston Red Sox</option>
                    <option value="New York Yankees">New York Yankees</option>
                    <option value="Tampa Bay Rays">Tampa Bay Rays</option>
                    <option value="Toronto Blue Jays">Toronto Blue Jays</option>
                </optgroup>
                <optgroup label="AL Central">
                    <option value="Chicago White Sox">Chicago White Sox</option>
                    <option value="Cleveland Indians">Cleveland Indians</option>
                    <option value="Detroit Tigers">Detroit Tigers</option>
                    <option value="Kansas City Royals">Kansas City Royals</option>
                    <option value="Minnesota Twins">Minnesota Twins</option>
                </optgroup>
                <optgroup label="AL West">
                    <option value="Houston Astros">Houston Astros</option>
                    <option value="Los Angeles Angels">Los Angeles Angels</option>
                    <option value="Oakland Athletics">Oakland Athletics</option>
                    <option value="Seattle Mariners">Seattle Mariners</option>
                    <option value="Texas Rangers">Texas Rangers</option>
                </optgroup>
                <optgroup label="NL East">
                    <option value="Atlanta Braves">Atlanta Braves</option>
                    <option value="Miami Marlins">Miami Marlins</option>
                    <option value="New York Mets">New York Mets</option>
                    <option value="Philadelphia Phillies">Philadelphia Phillies</option>
                    <option value="Washington Nationals">Washington Nationals</option>
                </optgroup>
                <optgroup label="NL Central">
                    <option value="Chicago Cubs">Chicago Cubs</option>
                    <option value="Cincinnati Reds">Cincinnati Reds</option>
                    <option value="Milwaukee Brewers">Milwaukee Brewers</option>
                    <option value="Pittsburgh Pirates">Pittsburgh Pirates</option>
                    <option value="St. Louis Cardinals">St. Louis Cardinals</option>
                </optgroup>
                <optgroup label="NL West">
                    <option value="Arizona Diamondbacks">Arizona Diamondbacks</option>
                    <option value="Colorado Rockies">Colorado Rockies</option>
                    <option value="Los Angeles Dodgers">Los Angeles Dodgers</option>
                    <option value="San Diego Padres">San Diego Padres</option>
                    <option value="San Francisco Giants">San Francisco Giants</option>
                </optgroup>
                
            </select>
            <br /><br /><br />
            
            Card Details: <br />
            
            Product Company:
            Topps<input type="radio" value="Topps" name="fCompany">
            Panini<input type="radio" value="Panini" name="fCompany">
            Other<input type="radio" value="Other" name="fCompany">
            <br />
            
            Card Set: <input type="text" name="fSet" /><br />
            Card Subset: <input type="text" name="fSubset" /><br />
            Card Number: <input type="text" name="fNumber" /><br /><br />
            
            Collector Information: <br />
            Price: $<input type="text" name="fPrice" /><br />
            Card Condition:
            <select name="fCondition">
                <option selected disabled>Select a condition</option>
                <option value="Near Mint">Near Mint</option>
                <option value="Very Good">Very Good</option>
                <option value="Good">Good</option>
                <option value="Acceptable">Acceptable</option>
                <option value="Damaged">Damaged</option>
            </select>
            
            <br /><br />
            
            <input type="submit" value=Submit />
            
            <br /><br />
        </form>
        
        <form action="menu.php">
            <input type="submit" value="Back to Menu" />
        </form>
    </body>
</html>