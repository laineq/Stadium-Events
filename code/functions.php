<?php
    
//check login data 
function check_login($conn)
{

	if(isset($_SESSION['user_id']))
	{

		$id = $_SESSION['user_id'];
		$query = "select user_name,user_email,password,userID from audience1 where user_email = '$id'
		UNION select employee_name, employeeID,password,type from employee_manageby1 where employeeID = '$id'";
		$result = mysqli_query($conn,$query);
		if($result && mysqli_num_rows($result) > 0)
		{

			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}
	}

	//redirect to login
	header("Location: login.php");
	die;

}

?>