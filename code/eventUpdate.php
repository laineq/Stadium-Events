<?php
include 'staff.php';
$id = $_GET['updateid'];
if(isset($_POST['submit']))
{
	$name = $_POST['name'];
	$date = $_POST['date'];
	$time = $_POST['time'];
	$gym = $_POST['gym'];
	
	$sql = "update `Event_hold_in` set event_name='$name', event_date='$date', event_time='$time', gym_number='$gym' where eventID = '$id'";
	$result = mysqli_query($conn, $sql);
	if($result)
	{
		header('location:event.php');
	}
	else
	{
		die(mysqli_error($conn));
	}
}

?>


<!DOCTYPE html>
<html>
	<head>
	<title>Event Add</title>
	</head>
	<body>
	<form method="post">
		<div>
		<label>Event Name</label>
		<input type="VARCHAR" placeholder="Enter the event name" name="name">
		</div>
		<div>
		<label>Event Date</label>
		<input type="date" placeholder="Enter the event date" name="date">
		</div>
		<div>
		<label>Event Time</label>
		<input type="time" placeholder="Enter the event time" name="time">
		</div>
		<div>
		<label>Gym Number</label>
		<input type="INTEGER" placeholder="Enter the gym number" name="gym">
		</div>
		<button type="submit" name="submit">Update</button>
	</form>
	</body>
</html>
