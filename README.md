## php-registerForm
	
This is developing a Web app for registering details in a database, by using a MySQL database and PHP for processing the information. 
	

### Description	
There for 3 parts in this simple web app.

1. Registration form (`1_regForm.php`), a form with 3 columns (First name, last name and email) 
	for users to enter their information. The form also validates the users' input for some 
	possible omissions, such as mandatory fields left blank and invalid email address. 
	![demo: 1_regForm.php](/img/screenshot_1_regForm.png)


2. Displaying input data (`2_getData.php`), this page shows all of the records that registered 
	in a MySQL database.  Connecting to MySQL and selecting webapp_test this database, and all 
	inputs from users are registered in a cusRegData table.
	![demo: 2_getData.png](/img/screenshot_2_getData.png)

3. Submission successfully page (`3_submission.php`), this page shows an appropriate confirmation 
	that the user has done the registration. And also, stores the inquiry in a MySQL database table.
	![demo: 3_submission.png](/img/screenshot_3_submission.png)

#### Testing connection and creating a table in MySQL
![demo: 4_mySQL.png](/img/screenshot_4_mySQL.png)

