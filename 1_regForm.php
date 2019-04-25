<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">	
		<meta name="description" content="We provide IT services and digital marketing services, join us to learn more information about promoting your company."> 
		<title> Registration details </title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
		<script type="text/javascript">
			function validateForm() {
				var x = document.forms.dataForm.cusFirstName.value;
				if (x == null || x == " ") {
					alert("Please fill your first name correctly.");
					return false;
				}

				var y = document.forms.dataForm.cusLastName.value;
				if (y == null || y == " ") {
					alert("Please fill your last name correctly.");
					return false;
				}
				
				var em = document.forms.dataForm.cusEmail.value;
				if (em == null || em == " ") {
					alert("Please provide your Email");
					return false;
				}
				var atpos = em.indexOf("@");
				var dotpos = em.lastIndexOf(".");
				if (atpos<1 || dotpos<atpos+2 || dotpos+2>=em.length) {
					alert("Not a valid e-mail address");
					return false;
				}
			}
		</script>
		<?php
			date_default_timezone_set('Europe/London');
			$submit_Time = date('m/d/Y h:i:s a', time());
		?>
	</head>
	<body>
		<div class="px-5 py-3">	
		<div class="CustomerReg">
			<form action= "3_submission.php" method="POST" name="dataForm" id="id_dataForm" onsubmit="return validateForm()">
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="inputFirstName">First Name *</label>
						<input type="text" class="form-control" name="cusFirstName" id="id_first_name" maxlength="60">
					</div>
					<div class="form-group col-md-6">
						<label for="inputLastName">Last Name *</label>
						<input type="text" class="form-control" name="cusLastName" id="id_last_name" maxlength="60"> 
					</div>
				</div>
				<div class="form-group">
					<label for="inputEmail">Email *</label>
					<input type="text" class="form-control" name="cusEmail" id="id_email" maxlength="254">  
				</div>
				<div class="form-group col-md-6">
					<input type="submit" class="btn btn-primary" name="submit" value="Submit Form">
					<input type="reset" class="btn btn-secondary" value="Clear">
				</div>
		</form>
		</div>
		</div>
	</body>
</html>

