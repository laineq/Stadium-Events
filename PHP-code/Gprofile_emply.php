<?php
include_once 'staff.php';

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
        //echo $user_data['user_email'];
          $emply_query = "SELECT * FROM Employee_ManageBy1 where employeeID ='$id' ";
          $emply_result = mysqli_query($conn,$emply_query);
           if($emply_result && mysqli_num_rows($emply_result) > 0)
           {
              echo"success";
              $fetch = mysqli_fetch_assoc($emply_result);
           }
        ?>



        <h1>Employee Profile</h1>
        <p>Employee name: <?php echo $fetch['employee_name']; ?></p>
        <p>Employee password: <?php echo $fetch['password']; ?></p>
        <p>Employee ID: <?php echo $fetch['employeeID']; ?></p>
        
        
        
		</form>
	</div>
</body>
</html>
