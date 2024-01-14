<?php
include_once 'staff.php';
include("connect.php");

?>

<form method="post">
</br>
Search More information about event: </br>
</br>
<input type="submit" name="submit1" value = "All Event ID"/><br/>
<input type="submit" name="submit2" value = "All Event Name"/><br/>
<input type="submit" name="submit3" value = "All Event Time"/><br/>
<input type="submit" name="submit4" value = "All Event Date"/><br/>
<input type="submit" name="submit5" value = "All Gym Number"/><br/>
</form>

<?php
    $output = "NULL";
    if(isset($_POST['submit1'])){
        //if submit successfully do this
        //connect to the database
        
        $sql = "SELECT eventID FROM Event_hold_in";
        //query the db
        $result = mysqli_query($conn,$sql);
        
        if($result){
            while($row = mysqli_fetch_assoc($result)){
            $eventid = $row['eventID'];
            echo '<tr>
            <th scope="row">'.$eventid.'</th>
            </tr>';
            }
            mysqli_free_result($result);
        }else{
            $output = "No results";
        }
    }else if(isset($_POST['submit2'])){
    
        $sql = "SELECT event_name FROM Event_hold_in";
   
        $result = mysqli_query($conn,$sql);
    
        if($result){
            while($row = mysqli_fetch_assoc($result)){
                $eventname = $row['event_name'];
                echo '<tr>
                <th scope="row">'.$eventname.'</th>
                </tr>';
            }
            mysqli_free_result($result);
        }else{
            $output = "No results";
        }
    }else if(isset($_POST['submit3'])){
     
         $sql = "SELECT event_time FROM Event_hold_in";
    
         $result = mysqli_query($conn,$sql);
     
         if($result){
             while($row = mysqli_fetch_assoc($result)){
                 $eventtime = $row['event_time'];
                 echo '<tr>
                 <th scope="row">'.$eventtime.'</th>
                 </tr>';
             }
             mysqli_free_result($result);
         }else{
             $output = "No results";
         }
     }else if(isset($_POST['submit4'])){
      
          $sql = "SELECT event_date FROM Event_hold_in";
     
          $result = mysqli_query($conn,$sql);
      
          if($result){
              while($row = mysqli_fetch_assoc($result)){
                  $eventdate = $row['event_date'];
                  echo '<tr>
                  <th scope="row">'.$eventdate.'</th>
                  </tr>';
              }
              mysqli_free_result($result);
          }else{
              $output = "No results";
          }
      }else if(isset($_POST['submit5'])){
       
           $sql = "SELECT gym_number FROM Event_hold_in";
      
           $result = mysqli_query($conn,$sql);
       
           if($result){
               while($row = mysqli_fetch_assoc($result)){
                   $gym = $row['gym_number'];
                   echo '<tr>
                   <th scope="row">'.$gym.'</th>
                   </tr>';
               }
               mysqli_free_result($result);
           }else{
               $output = "No results";
           }
       }
?>




