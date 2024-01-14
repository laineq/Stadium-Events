<?php
include_once 'staff.php'
?>
<?php
    
    $output = "NULL";
    if(isset($_POST['submit'])){
        //if submit successfully do this
        //connect to the database
        $search = $_POST['search'];
        $sql = "SELECT playerID, perform_number,eventID FROM Perform_in WHERE playerID = '$search'";
        //query the db
        $result = mysqli_query($conn,$sql);
        
        if($result){
            while($row = mysqli_fetch_assoc($result)){
                $playerID = $row['playerID'];
                $perform_number = $row['perform_number'];
                $eventID = $row['eventID'];
                
                $output = "Player ID: $playerID<br/> Perform Number: $perform_number<br/> Event ID:$eventID";
            }
        }else{
            $output = "No results";
        }
    }
?>




<form method="post">
Search: <input type="VARCHAR" placeholder="Enter the Player ID" name="search"/><br/>
<input type="submit" name="submit" value = "Search"/>
</form>

<?php
    echo $output;
?>

