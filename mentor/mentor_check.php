<?php
error_reporting(0);
session_start();

$host="localhost";
$user="root";
$password="";
$db="oms1";

$conn=mysqli_connect($host,$user,$password,$db);

    
            //if($_SERVER["REQUEST_METHOD"]=="POST")
           if(isset($_POST['login']))
           {

            $mentor_id = $_POST['mentor_id'];
            $pass = $_POST['password'];

            $sql="SELECT * FROM `mentorlist` where mentor_id='".$mentor_id."'AND password='".$pass."' limit 1";

            $result=mysqli_query($conn,$sql);
            $row=mysqli_fetch_array($result);

            if($row["usertype"]=="mentor")
            {
                $_SESSION["mentor_id"]=$mentor_id;
                $_SESSION['usertype']="mentor";
                header("location:m_dashboard.php");
            }
            else
            {   
                $_SESSION['status'] = "Invalid Email or Password";
                header("location:mentor_log.php");
            }
           }

?>