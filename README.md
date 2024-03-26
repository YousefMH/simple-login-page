PHP-MySQL Login and Signup Page

This repository contains a simple login and signup page implemented using PHP and MySQL. It's designed to work with the XXAMP stack, which includes Apache, MySQL, and PHP, providing a local development environment.

Features
User Authentication: Users can register for a new account and then log in securely.
Secure Password Storage: Passwords are hashed using PHP's password_hash() function for security.
MySQL Database Integration: User data is stored and managed in a MySQL database.
Session Management: User sessions are managed using PHP's session handling capabilities.
Requirements
To use this project, you need to have the following installed on your system:

XXAMP: A development environment that consists of Apache, MySQL, and PHP.
A web browser (e.g., Chrome, Firefox, Safari).
Installation
Clone this repository to your local machine or download the ZIP file and extract it.
Move the folder to your XXAMP's htdocs directory.
Start your XXAMP server if it's not already running.
Import the provided database.sql file into your MySQL database. This will create the necessary tables.
Navigate to http://localhost/<your-folder-name> in your web browser.
Configuration
Before running the application, you need to configure the database connection settings. Follow these steps:

Open the config.php file located in the root directory.
Modify the database connection variables ($dbHost, $dbUsername, $dbPassword, $dbName) with your MySQL database credentials.

	// Database configuration
	$dbHost     = 'localhost'; // MySQL database host name
	$dbUsername = 'root';      // MySQL database username
	$dbPassword = '';          // MySQL database password
	$dbName     = 'oop-users'; // MySQL database name
  Note: 
	Make sure you have a database with name 'oop-users' and a table inside it with name 'users' and inside that have four rows:
 
	1. id
	2. name
 	3. mail
  	4. password
 Usage:
Open your web browser and navigate to http://localhost/.
You'll see the homepage with options to either login or signup.
Click on "Signup" to create a new account. Fill in the required details and submit the form.
Once registered, you can use the same credentials to login.
Upon successful login, you'll be redirected to the dashboard.

Credits

 	This project was created by Yousef Hosney. Feel free to modify and extend it as needed. Contributions are welcome!
