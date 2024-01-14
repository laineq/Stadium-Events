<?php
session_start();
include("connect.php");
include("functions.php");
$user_data = check_login($conn);


?>

<!DOCTYPE html>
<html>
    <head>
    <title>User website</title>
    <link rel="stylesheet" href="mystyle.css" type="text/css" />
    </head>
    <body>
    <br>
    Hello, <?php echo $user_data['user_name']; ?>
</body>


<div>
<nav>
<ul>
  <li><a class="active" href="Gprofile.php">Profile</a></li>
  <li><a href="myTicket.php">My Ticket</a></li>
  
  <li><a href="logout.php">Logout</a></li>
</ul>
<nav>
</div>
<div class="bodytext">
<body>
    

</body>
</html>

