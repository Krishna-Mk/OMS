<?php

include 'connect.php';

if(isset($_GET['id'])){
    $id=$_GET['id'];

    $sql="delete from `studentlist` where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        //echo "Deleted Successfull";
        header('location:manage_std.php');
    }
    else{
        die(mysqli_error($con));
    }

}


?>