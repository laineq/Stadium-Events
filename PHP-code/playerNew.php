<?php
include_once 'staff.php'
?>

<!DOCTYPE html>
<html>
	<head>
	<title>Player website</title>
	<link rel="stylesheet" href="mystyle.css" style type="text/css" />
	</head>
	<body>
	
	<div>
		<h1>Player Table</h1>
		
		<table>
			<thead>
				<tr>
					<th scope="col"> playerID </th>
					<th scope="col"> playerName </th>
					<th scope="col"> password </th>
					<th scope="col"> performID </th>
					<th scope="col"> eventID </th>
				</tr>
			</thead>
			<tbody>
			
			<?php
			$query = "SELECT * FROM `players`,`perform_in` WHERE players.playerID = perform_in.playerID";
			$result = mysqli_query($conn, $query);
			if($result)
			{
				while($row = mysqli_fetch_assoc($result))
				{
					$id = $row['playerID'];
					$name = $row['player_name'];
					$pswd = $row['password'];
					$perform = $row['perform_number'];
					$event = $row['eventID'];
					echo '<tr>
					<th scope="row">'.$id.'</th>
					<td>'.$name.'</td>
					<td>'.$pswd.'</td>
					<td>'.$perform.'</td>
					<td>'.$event.'</td>
					</tr>';
				}
			}
			
			?>
			</tbody>
		</table>
		</br>
				Find all the players who attend all events:</div>
                    <button><a href="all.php">Check</a ></button></br>
				Find specific players information:</br>
 <button type="submit" name="submit"><a href="search.php">Search</a ></button>
	</div>
	</body>
</html>

