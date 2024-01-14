<?php
include 'staff.php';
if(isset($_POST['submit']))
{
	$id = $_POST['id'];
	$name = $_POST['name'];
	$date = $_POST['date'];
	$time = $_POST['time'];
	$gym = $_POST['gym'];
	
	$sql = "insert into `Event_hold_in` (eventID , event_date , event_name , event_time , gym_number) values ('$id' , '$date' , '$name' , '$time' , '$gym')";
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
		<label>eventID</label>
		<input type="VARCHAR" placeholder="Enter the event ID" name="id">
		</div>
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
		<button type="submit" name="submit">Submit</button>
	</form>
	</body>
</html>
