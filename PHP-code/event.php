<?php
include_once 'staff.php';
//include("connect.php");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Event</title>
</head>
<body>

<link rel="stylesheet" href="mystyle.css" style type="text/css" />
	
</head>
<body>

<div>
    <h1>Event Information</h1>
    
    <table>
        <thead>
            <tr>
                <th scope="col"> EventID </th>
                <th scope="col"> Event Name </th>
                <th scope="col"> Event Date </th>
                <th scope="col"> Event Time </th>
                <th scope="col"> Gym Number </th>
            </tr>
        </thead>
        <tbody>
        
        <?php
        $query = "SELECT * FROM `Event_hold_in`";
        $result = mysqli_query($conn, $query);
        if($result)
        {
            while($row = mysqli_fetch_assoc($result))
            {
                $id = $row['eventID'];
                $name = $row['event_name'];
                $date = $row['event_date'];
                $time = $row['event_time'];
                $gym = $row['gym_number'];
    
                echo '<tr>
                <th scope="row">'.$id.'</th>
                <td>'.$name.'</td>
                <td>'.$date.'</td>
                <td>'.$time.'</td>
                <td>'.$gym.'</td>
                <td>
                <button><a href="eventDelete.php?deleteid='.$id.'">Delete</a></button>
                <button><a href="eventUpdate.php?updateid='.$id.'">Update</a></button>
                </td>
                </tr>';
            }
        }
        
        ?>
        </tbody>
        </table>
        </br>
        </br>
        Insert More Event Informatiion:</br>
        <button type="submit" name="submit"><a href="eventAdd.php">Insert</a ></button></br>
        Project More Event Informatiion:</br>
        <button type="submit" name="submit"><a href="projection.php">Search</a ></button></br>
        Count Number of tickets sold:</br>
        <button type="submit" name="submit"><a href="countEvent.php">Search</a ></button>
	</div>
</body>
</html>
