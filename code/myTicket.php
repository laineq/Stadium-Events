<?php
include_once 'guestHeader.php';

?>
<!DOCTYPE html>
<html>
	<head>
	<title>Myticket</title>
	<link rel="stylesheet" href="mystyle.css" style type="text/css" />
	</head>
	<body>
	
	<div>
		<h1>My Ticket</h1>
		
		<table>
			<thead>
				<tr>
					<th scope="col"> __Ticket Number__</th>
					<th scope="col"> Price__ </th>
					<th scope="col"> Gym Number__ </th>
					<th scope="col"> Seats Number__ </th>
					<th scope="col"> Event name__ </th>
					<th scope="col"> Event date__ </th>
					<th scope="col"> Event time__ </th>
				</tr>
			</thead>
			<tbody>
		

			
			<?php
		 $id = $user_data['userID'];
         $ticket_query = "SELECT * FROM audience2 a2, buy b, ticket_belong_to t, event_hold_in e 
		 where a2.userID = '$id' AND a2.user_receipt = b.user_receipt AND b.ticket_number = t.ticket_number 
		 AND t.eventID = e.eventID";
		 $count_ticket = "SELECT COUNT(t.ticket_number) FROM audience2 a2, buy b, ticket_belong_to t, event_hold_in e
		  where a2.userID = '$id' AND a2.user_receipt = b.user_receipt AND b.ticket_number = t.ticket_number 
		  AND t.eventID = e.eventID";
		 $ticket_result = mysqli_query($conn,$ticket_query);
		 $count_result = mysqli_query($conn,$count_ticket);
	
		 if($ticket_result && mysqli_num_rows($ticket_result) > 0)
		 {
			//echo"success";
			//$fetch = mysqli_fetch_assoc($ticket_result);
			$fetch_count = mysqli_fetch_assoc($count_result);
			$count = intval($fetch_count['COUNT(t.ticket_number)']);
			while($row = mysqli_fetch_assoc($ticket_result))
				{
					$ticket_num = $row['ticket_number'];
					$price = $row['price'];
					$gym = $row['gym_number'];
					$seats = $row["seats_number"];
					$event_name = $row['event_name'];
					$event_date = $row['event_date'];
					$event_time = $row['event_time'];
					echo '<tr>
					<th scope="row">'.$ticket_num.'</th>
					<td>'.$price.'</td>
					<td>'.$gym.'</td>
					<td>'.$seats.'</td>
					<td>'.$event_name.'</td>
					<td>'.$event_date.'</td>
					<td>'.$event_time.'</td>
					</tr>';
				}
		}
		   
	?>
	</tbody>
		</table>

		<p>Total number of tickets: <?php echo $count; ?></p>
        
	</div>
	</body>
</html>