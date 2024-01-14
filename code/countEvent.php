<?php
include_once 'staff.php';
?>

<!DOCTYPE html>
<html>
	<head>
	<title>Number of tickets sold</title>
	<link rel="stylesheet" href="mystyle.css" style type="text/css" />
	</head>
	<body>
	
	<div>
		<h1>Number of tickets sold</h1>
		
		<table>
			<thead>
				<tr>
					<th scope="col"> ___eventID______ </th>
					<th scope="col"> number of tickets sold___</th>
		
				</tr>
			</thead>
			<tbody>
			
			<?php
			$query = "SELECT eventID,COUNT(t.ticket_number) FROM ticket_belong_to t GROUP BY eventID";
			$result = mysqli_query($conn, $query);
			if($result)
			{
				while($row = mysqli_fetch_assoc($result))
				{
					$eventID = $row['eventID'];
					$count = $row['COUNT(t.ticket_number)'];
					
					echo '<tr>
					<th scope="row">'.$eventID.'</th>
					<td>'.$count.'</td>
				
					</tr>';
				}
			}
			
			?>
			</tbody>
		</table>
		
	</div>
	</body>
</html>

