<?php
error_reporting(0);
session_start();

    $host="localhost";
    $user="root";
    $password="";
    $db="oms1";

    $conn=mysqli_connect($host,$user,$password,$db);
    
    if(isset($_POST['login']))
    {
        $username = $_POST['username'];
        $pass = $_POST['password'];

        $sql="SELECT * FROM `login` where username='".$username."'AND password='".$pass."' limit 1";

        $result=mysqli_query($conn,$sql);
        $row=mysqli_fetch_array($result);

        if($row["usertype"]=="admin")
        {
            $_SESSION["username"]=$username;
            $_SESSION['usertype']="admin";
            header("location:a_dashboard.php");
        }
        else
        {   
            $_SESSION['status'] = "Invalid Email or Password";
            header("location:admin_log.php");
        
        }
    }


?>