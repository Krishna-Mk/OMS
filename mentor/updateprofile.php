<?php
    $dbservername="localhost";
    $dbuser="root";
    $dbpass="";
    $dbname="oms1";
    $conn=mysqli_connect($dbservername,$dbuser,$dbpass,$dbname);
    $id=$_GET['id'];
    $select= "select * from mentorlist where id='$id'";
    $sql = mysqli_query($conn,$select);
    $row = mysqli_fetch_assoc($sql);
?>

<?php

 session_start();
 if(isset($_POST['edit']))
 {
    $id=$_GET['id'];
    $fullname=$_POST['fullname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $designation=$_POST['designation'];
    $phonenumber=$_POST['phonenumber'];
    $select= "select * from mentorlist where id='$id'";
    $sql = mysqli_query($conn,$select);
    $row = mysqli_fetch_assoc($sql);
    $res= $row['id'];
    if($res === $id)
    {
   
       $update = "update mentorlist set fullname='$fullname',email='$email', password='$password' , designation='$designation', phonenumber='$phonenumber' where id='$id'";
       $sql2=mysqli_query($conn,$update);
       if($sql2)
       { 
           /*Successful*/
           header('location:m_Dashboard.php');
       }
       else
       {
           /*sorry your profile is not update*/
           header('location:Profile_edit_form.php');
       }
    }
    else
    {
        /*sorry your id is not match*/
        header('location:Profile_edit_form.php');
    }
 }
?>

<form action="#" method="post">
   fullname: <input type="text" value="<?php echo $row['fullname'];?>" name="fullname"><br><br>
 
   email: <input type="text" value="<?php echo $row['email'];?>" name="email"><br><br>
 
   password: <input type="text" value="<?php echo $row['password'];?>" name="password"><br><br>

   designation: <input type="text" value="<?php echo $row['designation'];?>" name="designation"><br><br>

   phonenumber: <input type="tel" value="<?php echo $row['phonenumber'];?>" name="phonenumber" maxlength="10" ><br><br>
   
   <input type="submit" name="edit">
   
</form>
