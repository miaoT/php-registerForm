## php-registerForm
	
This is developing a Web app for registering details in a database, by using a MySQL database and PHP for processing the information. 
	

### Description	
There for 3 parts in this simple web app.

1. Registration form (`1_regForm.php`), a form with 3 columns (First name, last name and email) 
	for users to enter their information. The form also validates the users' input for some 
	possible omissions, such as mandatory fields left blank and invalid email address. 

2. Displaying input data (`2_getData.php`), this page shows all of the records that registered 
	in a MySQL database.  Connecting to MySQL and selecting webapp_test this database, and all 
	inputs from users are registered in a cusRegData table.

3. Submission successfully page (`3_submission.php`), this page shows an appropriate confirmation 
	that the user has done the registration. And also, stores the inquiry in a MySQL database table.

