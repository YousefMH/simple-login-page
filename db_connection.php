<?php
$just_testing_if_the_require_works = 12345667888;
// Database credentials
$DB_SERVER   = '127.0.0.1';
$DB_USERNAME = 'root';
$DB_PASSWORD = '';
$DB_NAME     = 'user-oop';

// Attempt MySQL database connection
$conn = new mysqli($DB_SERVER, $DB_USERNAME, $DB_PASSWORD, $DB_NAME);

// Check connection
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
