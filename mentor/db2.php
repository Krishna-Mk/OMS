<?php
/* Database connection start */
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "oms1";
$con = mysqli_connect ($servername, $username, $password, $dbname);

if (!$con) {
	echo "Connection failed!";
}
?>
