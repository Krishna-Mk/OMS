<?php

include 'connect.php';

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from `mentorlist` where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        //echo "Deleted Successfull";
        header('location:manage_ment.php');
    }
    else{
        die(mysqli_error($con));
    }

}


?>