<?php 
session_start();
$con=mysqli_connect("localhost","root","","oms1");
$name = $query_run=['firstName'];

if(isset($_POST['submit']))
{
    $mentor=$_POST['mentor'];
    $assignlist = $_POST['assignlist'];
    foreach($assignlist as $assigned )
    {
        echo $name;

        $query ="UPDATE  studentlist  SET mentor_id =  '$mentor' WHERE id = '$assigned' ";
        $query_run = mysqli_query($con,$query);
    }

    if($query_run)
    {
        $_SESSION['status'] = "Inserted succesfully";
        // print_r($assignlist);
        // echo $mentor;
        // print_r( $name);
        header("Location: assign_ment.php");
    }
    else
    {
        $_SESSION['status'] = "not Inserted ";
        header("Location: assign_ment.php");
    }
}





?>
