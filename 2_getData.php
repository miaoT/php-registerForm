<!DOCTYPE html>
<?php
	$con = mysqli_connect("localhost","root","PASSWORD","webapp_test");
	// Check connection
    if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
	//formulate SQL query to obtain customers information
	$get_cusRegData_sql = "SELECT cLogID, cusFirstName, cusLastName, cusEmail, submit_Time FROM cusRegData";
	//send query and store result set in $result
	$result = mysqli_query($con, $get_cusRegData_sql) or die ("Query failed:".mysqli_error($con));
?>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<title> getData from MySQL Database </title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
	</head>
	<body>
		<div class="px-5 py-3">
			<h1>Here are registration details</h1>
			<table class="table table-striped table-hover">
				<thead class="thead-dark">
					<tr> 
						<th> Log ID</th>
						<th> First Name</th>
						<th> Last Name</th>
						<th> Customer Email</th>
						<th> Submit Date</th>
					</tr>
				</thead>
					
				<?php
				//go through the result set, putting each row into an array $result_row
				while ($result_row = mysqli_fetch_array($result)) {

				//put the row details into variables $cLogID,$submit_Time,$cusFirstName,$cusLastName,$cusEmail
				$cLogID = $result_row['cLogID'];
				$cusFirstName = $result_row['cusFirstName'];
				$cusLastName = $result_row['cusLastName'];
				$cusEmail = $result_row['cusEmail'];
				$submit_Time = $result_row['submit_Time'];
									
				//output all
				echo "
					<tr>
						<td>$cLogID</td>
						<td>$cusFirstName</td>
						<td>$cusLastName</td>
						<td>$cusEmail</td>
						<td>$submit_Time</td>
					</tr>";
				}
				?>
			</table>
		</div>		
	</body>
</html>

