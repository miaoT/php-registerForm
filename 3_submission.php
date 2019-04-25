<!DOCTYPE html>
<!-- This page is designed for the user who entered his/her data, the webpage outputs the user's first name and the submission time.-->
<html>
	<head>
		<meta charset="utf-8">
		<meta name="robots" content="index, follow"> 
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<title>Thanks for your registration</title>		
	</head>
	<body>
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
			$cusFirstName = $_POST["cusFirstName"];
			$cusLastName = $_POST["cusLastName"];
			$cusEmail = $_POST["cusEmail"];

			date_default_timezone_set('Europe/London');
			$submit_Time = date("Y-m-d H:i:s");
	
			$sql="INSERT INTO cusRegData (cusFirstName, cusLastName, cusEmail, submit_Time)
			VALUES ('$cusFirstName','$cusLastName','$cusEmail','$submit_Time')";
			$result=mysqli_query($con,$sql);
	
	    	
			echo "<p>Thank you, <b>".$_POST["cusFirstName"]."</b>, for your registration!</p>";
			echo "<p>Your registration has processed at <b> $submit_Time</b>";
		?>	
	</body>
</html>

