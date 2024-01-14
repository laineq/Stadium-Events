<?php
include 'staff.php';
?>
<?php
    
    $output = "No Information Yet !!!";
    if(isset($_POST['submit'])){
        //if submit successfully do this
        //connect to the database
        $search = $_POST['search'];
        $name = $_POST['name'];
        $sql = "SELECT * FROM Players, Perform_in WHERE Perform_in.playerID = '$search' AND Players.player_name = '$name'";
        //query the db
        $result = mysqli_query($conn,$sql);
        
        if($result){
            while($row = mysqli_fetch_assoc($result)){
                $playerID = $row['playerID'];
                $playername = $row['player_name'];
                $playerpass = $row['password'];
                $perform_number = $row['perform_number'];
                $eventID = $row['eventID'];
                
                $output = "Player ID: $playerID<br/>Player Name: $playername<br/>Password: $playerpass<br/>Perform Number: $perform_number<br/> Event ID:$eventID";
            }
        }else{
            $output = "No results";
        }
    }
?>




<form method="post">
</br>
Search More information about player: </br>
</br>
Player ID: <input type="VARCHAR" placeholder="Enter the Player ID" name="search"/><br/>
Player Name: <input type="VARCHAR" placeholder="Enter the Player Name" name="name"/><br/>
Player Password: <input type="VARCHAR" placeholder="Enter the Player Password" name="password"/><br/>
<input type="submit" name="submit" value = "Search"/>
<button type="submit" name="button"><a href="playerNew.php">Back</a ></button>
</form>

<?php
    echo $output;
?>
