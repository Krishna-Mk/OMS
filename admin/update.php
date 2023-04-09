<?php
session_start();
error_reporting(0);
    if(!isset($_SESSION['username']))
    {
        header("location:index.php");
    }
    elseif($_SESSION['usertype']=='student')
    {
        header("location:index.php");
    }

    $host="localhost";
    $user="root";
    $password="";
    $db="oms1";

    $conn=mysqli_connect($host,$user,$password,$db);

    $id=$_GET['updateid'];
    $sql="Select * from `mentorlist` where id=$id";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
    $fullname=$row['fullname'];
    $email=$row['email'];
    $department=$row['department'];
 
    if(isset($_POST['update']))
    {

	   $fullname=$_POST['fullname'];
       $email=$_POST['email'];
       $department=$_POST['department'];
       //$password=$_POST['password'];
       //$usertype='mentor';

       $check="	SELECT * FROM mentorlist WHERE email='$email'";

       $check_user=mysqli_query($conn,$check);

       $row_count=mysqli_num_rows($check_user);

       if ($row_count==1) 
       {
            //header('location:manage_ment.php');
       }

       else
       {

       $sql="update `mentorlist` set id=$id,fullname='$fullname',email='$email',department='$department' where id=$id";
       $result=mysqli_query($conn,$sql);

       if($result)
       {
       	    header('location:manage_ment.php');
       }
       else
       {
       	echo "upload failed";
       }
   	}
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./images/logo icon.png" type="image/x-icon">
    <!-- <link rel="stylesheet" href="output.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Mentor System</title>
</head>
<body>
<!-- admin navbar page -->
<div class="w-full min-h-screen font-sans text-gray-900 bg-gray-50 flex">
    <?php
    @include 'a_nav.php';
    ?>
    <main class="flex-1">
        <!-- head -->
        <?php
        @include 'head.php';
        ?>
        <!-- Mentor form -->
        <div class="flex items-center justify-end gap-11 p-3 px-10">
            <div class="bg-violet-600 p-2 text-white flex gap-3 shadow-md shadow-violet-300 hover:bg-violet-800 cursor-pointer text-center justify-between">
                <i class="bi bi-person-fill"></i>
                <h1 class="text-base font-medium">Update Mentor</h1>
            </div>
        </div>
        <div class="flex items-center justify-center p-7 mx-10 rounded-lg shadow-lg bg-white max-w-md">
            <form action="" method="post" action="#">

                <div class="form-group mb-6">
                    <input type="text" name="fullname" id="" class="block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Full Name" required
                        value=<?php echo $fullname;?>>
                </div>
                <div class="form-group mb-6">
                    <input type="email" name="email" id="" class="block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="abc@gmail.com" required
                    value=<?php echo $email;?>>
                </div>
                <div class="form-group mb-6">
                    <input type="text" name="department" id="" class="block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Department" required 
                    value=<?php echo $department;?>>
                </div>
                <div class="form-group mb-6 bg-violet-600 text-white shadow-md shadow-gray-600 rounded-lg hover:bg-violet-800">
                    <input type="submit" name="update" id="" class="block w-full px-3 py-1.5 text-base font-normal text-white border border-none rounded transition ease-in-out m-0 cursor-pointer">
                </div>
            </form>
        </div>
    </main>
</div>
<!-- component -->

</body>
</html>