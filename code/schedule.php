<?php
include_once 'staff.php';
include("connect.php");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
</head>
<body>

<link rel="stylesheet" href="mystyle.css" style type="text/css" />
	

	</style>

	<div id="box">
		
    <form method="post">
    <?php
    $id = $user_data['user_email'];
      $schedule_query = "SELECT * FROM event_hold_in ev, Employee_ManageBy1 e1, Employee_ManageBy2 e2, employee_runby2 r2 
      where e2.employeeID = '$id' AND e1.employeeID = '$id' AND r2.employeeID = '$id' AND e2.eventID = ev.eventID";
      $schedule_result = mysqli_query($conn,$schedule_query);
       if($schedule_result && mysqli_num_rows($schedule_result) > 0)
       {
          //echo"success";
          $fetch = mysqli_fetch_assoc($schedule_result);
       }
    ?>

        <h1>Employee Schedule</h1>
        <p>Manage Event Date: <?php echo $fetch['event_date']; ?></p>
        <p>Manage Event Time: <?php echo $fetch['event_time']; ?></p>
        <p>Manage Event ID: <?php echo $fetch['eventID']; ?></p>
        <p>Manage Event Name: <?php echo $fetch['event_name']; ?></p>
        <p>Manage Store Time: <?php echo $fetch['R_time']; ?></p>
        <p>Job Title: <?php echo $fetch['job_title']; ?></p>
        <p>Store location: <?php echo $fetch['location']; ?></p>
        
        
        
		</form>
	</div>
</body>
</html>
