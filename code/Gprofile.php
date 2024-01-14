<?php
include_once 'guestHeader.php';

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
        <h1>User Profile</h1>
        <p>User name: <?php echo $user_data['user_name']; ?></p>
        <p>User email: <?php echo $user_data['user_email']; ?></p>
        
        <p>User ID: <?php echo $user_data['userID']; ?></p>
		
        
        
		</form>
	</div>
</body>
</html>