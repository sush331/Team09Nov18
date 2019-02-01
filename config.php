<?php
define("MYSQLUSER","jc505984");
define("MYSQLPASS","Password1");
define("HOSTNAME","localhost");
define("MYSQLDB","_team09nov18");

// Create database connection
$db = mysqli_connect(HOSTNAME, MYSQLUSER, MYSQLPASS, MYSQLDB);

 
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
?>