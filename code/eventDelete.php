<?php
include 'staff.php';
if(isset($_GET['deleteid']))
{
	$id = $_GET['deleteid'];
	
	$delete_sql = "delete from `Event_hold_in` where Event_hold_in.eventID = '$id' ";
	$result = mysqli_query($conn, $delete_sql);
	if($result)
	{
        header('location:event.php');
		exit;
	}
	else
	{
		echo "Error Unable to Delete record";
	}
}

?>



