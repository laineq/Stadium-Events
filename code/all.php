<?php
include_once 'staff.php'
?>

<!DOCTYPE html>
<html>
	<head>
	<title>ALL website</title>
	<link rel="stylesheet" href="mystyle.css" style type="text/css" />
	</head>
	<body>
	
	<div>
		<h1>All players who attend all events</h1>
		
		<table>
			<thead>
				<tr>
					<th scope="col"> player ID </th>
					<th scope="col"> playerName </th>
				</tr>
			</thead>
			<tbody>
			
			<?php
			$query = "SELECT playerID, player_name FROM `players` WHERE NOT EXISTS(( SELECT eventID FROM `perform_in`) EXCEPT ( SELECT eventID FROM `perform_in` WHERE players.playerID = perform_in.playerID))";
			$result = mysqli_query($conn, $query);
			if($result)
			{
				while($row = mysqli_fetch_assoc($result))
				{
					$id = $row['playerID']; 
					$name = $row['player_name'];
					echo '<tr>
					<th scope="row">'.$id.'</th>
					<td>'.$name.'</td>
					</tr>';
				}
			}
			
			?>
			</tbody>
		</table>
	</div>
	</body>
</html>