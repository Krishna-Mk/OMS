<?php
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$enrollment_no = $_POST['enrollment_no'];
	$father_name = $_POST['father_name'];
	$mother_name = $_POST['mother_name'];
	$father_mobile_number = $_POST['father_mobile_number'];
	$mother_mobile_number = $_POST['mother_mobile_number'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$institute = $_POST['institute'];
	$course = $_POST['course'];
	$sem = $_POST['sem'];
	$date_of_birth = $_POST['date_of_birth'];
	$district = $_POST['district'];
	$state = $_POST['state'];
	$mobile_number = $_POST['mobile_number'];
	$address = $_POST['address'];
	
	//Database connection
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "oms1";
	$con = mysqli_connect ($servername, $username, $password, $dbname);
	$query  = "INSERT INTO studentlist (firstName, lastName,enrollment_no,father_name, mother_name, father_mobile_number, mother_mobile_number, gender, email, institute, course, sem, date_of_birth, district , state ,mobile_number,address) VALUES ('$firstName',' $lastName','$enrollment_no',' $father_name',' $mother_name',' $father_mobile_number', '$mother_mobile_number',' $gender',' $email',' $institute',' $course','$sem','$date_of_birth',' $district','$state','$mobile_number','$address')";
	$result = mysqli_query($con,$query);
	//echo $father_mobile_number;
?>