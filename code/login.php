<?php 

session_start();

	include("connect.php");
	include("functions.php");
    
	//if something posted 
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$user_email = $_POST['user_email'];
		$password = $_POST['password'];

		//query to read from database
		$query = "select user_email,password,type from audience1 where user_email = '$user_email' 
		UNION select employeeID,password,type from employee_manageby1 where employeeID = '$user_email'";


		if(!empty($user_email) && !empty($password))
		{
			
			//read from database		
			$result = mysqli_query($conn,$query);

			if($result && mysqli_num_rows($result) > 0)
			{
				$user_data = mysqli_fetch_assoc($result);
				// echo $user_data['type'];
				// echo $user_data['password'];

				
				//guest
				if($user_data['type']== 1 && $user_data['password']==$password)
				{
					//echo "Guest";
					$_SESSION['user_id'] = $user_data['user_email'];
					//echo $_SESSION['user_id'];
					header("Location: Gprofile.php");
              		exit;
							
				}
				
				//employee
				elseif($user_data['type']==2 && $user_data['password']==$password)
				{
					//echo"employee";
					$_SESSION['user_id'] = $user_data['user_email'];
					//echo $_SESSION['user_id'];
					//echo $user_data['user_email'];
					header("Location: staff.php");
              		exit;
							
				}
				/*
				elseif($user_data['type']==3 && $user_data['password']==$password)
				{
					//echo"player";
					$_SESSION['user_id'] = $user_data['playerID'];
					header("Location: player.php");
              	    exit;
							
				}
				*/
			
				else
				{
					echo "Check your password";
				
        		}
			}

			else
				{
					echo "Check your username";
				
        		}
				
		}

        else
        {
            echo "Please enter valid information";
			
        }
	}
    

?>


<!DOCTYPE html>
<html>
<head>
	<title>Sign up for new user</title>
</head>
<body id="one">

<link rel="stylesheet" href="mystyle.css" style type="text/css" />
	

	</style>

	<div id="box">
		
		<form method="post">
			<h1>Signup for new user</h1>

            <input type="text" name="user_email" placeholder="enter ID"><br><br>
            <input type="password" name="password" placeholder="enter password"><br><br>
			<input id="button" type="submit" value="Login"><br><br>

		</form>
	</div>
</body>
</html>
		