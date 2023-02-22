<?php

include 'config.php';

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from `announcement` where id=$id";
    $result=mysqli_query($cser,$sql);
    if($result){
        //echo "Deleted Successfull";
        header('location:accounce.php');
    }
    else{
        die(mysqli_error($cser));
    }

}


?>