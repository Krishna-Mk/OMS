<?php
error_reporting(0);
class db{
	var $con;
	function __construct(){
		$this->$con=mysqli_connect("localhost","root","") or die(mysqli_error());
		mysqli_select_db($this->$con,"oms1") or die(mysqli_error());
	}

	public function getcourse(){
		$query="SELECT * from course";
		$result=mysqli_query($this->$con,$query);
		return $result;
	}
	public function getsem($sem){
		$query="SELECT * from sem where course_id =".$sem."";
		$result=mysqli_query($this->$con,$query);
		return $result;
	}
	public function getAllstudents(){
		$query="SELECT s.id ,s.firstName ,s.enrollment_no ,s.institute ,s.course ,s.mentor_id ,s.sem ,d.sem from studentlist AS e,sem AS d where e.sem_id=d.sem_id ";
		$result=mysqli_query($this->$con,$query) or die(mysqli_error());
		return $result;
	}
	public function getEmployee($designation){
		$query="SELECT * from employee where desig_id=".$designation."";
		$result=mysqli_query($this->$con,$query);
		return $result;
	}
	public function closeCon(){
		mysqli_close($this->$con);
	}
}
?>