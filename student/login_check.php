<?php
error_reporting(0);
session_start();

    $host="localhost";
    $user="root";
    $password="";
    $db="oms1";

    $conn=mysqli_connect($host,$user,$password,$db);

    if($conn===false)
    {
        die("connection error");
    }
        if($_SERVER["REQUEST_METHOD"]=="POST")
        {
            $enrolment = $_POST['username'];

            $pass = $_POST['pass'];

            $sql="SELECT * FROM `reg_students` where enrolment ='".$enrolment."'AND password ='".$pass."' limit 1";

            $result=mysqli_query($conn,$sql);

            $row=mysqli_fetch_array($result);
            if($row["usertype"]=="student")
            {
                $_SESSION["enrolment"]=$enrolment;

                $_SESSION['usertype']="student";

                header("location:std_dashboard.php");
            }
            else
            {   
                $_SESSION['status'] = "Invalid Email or Password";
                header("location:student_log.php");
            }
        }

?>