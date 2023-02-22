<?php
session_start();

    $host="localhost";
    $user="root";
    $password="";
    $db="oms1";

    $conn=mysqli_connect($host,$user,$password,$db);

    if(isset($_POST['submit']))
    {
	   $fname=$_POST['fname'];
       $enrolment=$_POST['enrolment'];
       $mobile=$_POST['mobile'];
       $password=$_POST['password'];
       $confirm_password=$_POST['confirm_password'];
       $usertype='student';

       if($password == $confirm_password)
       {
            $sql="INSERT INTO reg_students (fname,enrolment,mobile,password,usertype) VALUES ('$fname','$enrolment','$mobile','$password','$usertype')";
            $add=mysqli_query($conn,$sql);

            if($add)
            {
                echo "<script type='text/javascript'>alert('Registration Done')</script>";
                //header("Location: student_reg.php");
            }
            else
            {
                echo "<script type='text/javascript'>alert('Registration Failed')</script>";
                //header("Location: student_reg.php");
            }
        }
        else
        {
            echo "<script type='text/javascript'>alert('Password and confirm password does not match')</script>";
            //header("Location: student_reg.php");
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
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Mentor System</title>
</head>
<body>
<header class="text-gray-600 body-font shadow-md shadow-gray-500/40">  
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
        <a href="../index.php">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
        </svg>
        </a>
        <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center">
            <h1 href="" class="text-center text-indigo-600 hover:text-violet-500 hover:cursor-pointer font-bold text-2xl">Welcome Student's</h1>
        </nav>
    </div>
</header>
<section class="text-gray-600 body-font">
    <form method="post" class="container py-24 mx-auto">
        <div class="flex flex-col sm:flex-row sm:items-center items-start mx-auto justify-around">
            <section>
                <img src="../images/image 1-4.png" alt="" class="h-72 animate-[bounce_9s_ease-in-out_infinite]">
            </section>
            <div class="bg-gray-100 rounded-lg flex flex-col p-8 shadow-md shadow-gray-500/40">
                <h2 class="text-gray-900 text-lg font-medium title-font mb-5 text-center">Sign up</h2>
                <div class=" mb-4 mt-2">
                    <label for="E-id" class="leading-7 text-sm text-gray-600">Full Name</label>
                    <input type="text" id="e-id" name="fname" class="w-full bg-white rounded border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" required>
                </div>
                <div class=" mb-4 mt-2">
                    <label for="E-id" class="leading-7 text-sm text-gray-600">Enrolment No</label>
                    <input type="number" id="e-id" name="enrolment" class="w-full bg-white rounded border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" required>
                </div>
                <div class=" mb-4 mt-2">
                    <label for="E-id" class="leading-7 text-sm text-gray-600">Mobile</label>
                    <input type="number" id="e-id" name="mobile" class="w-full bg-white rounded border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" required>
                </div>
                <div class=" mb-4 mt-2">
                    <label for="E-id" class="leading-7 text-sm text-gray-600">Password</label>
                    <input type="password" id="e-id" name="password" class="w-full bg-white rounded border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" required>
                </div>
                <div class=" mb-4 mt-2">
                    <label for="E-id" class="leading-7 text-sm text-gray-600">Confirm password</label>
                    <input type="password" id="e-id" name="confirm_password" class="w-full bg-white rounded border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" required>
                </div>
                <button type="submit" name="submit" class=" text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-700 rounded text-lg">Submit</button>
                <p class="text-xs text-gray-500 mt-3 font-bold">Already have account ? <a href="./student_log.php" class="text-indigo-700"> Login</a> Here. </p>
</form>
            </div>
        </div>
</section>


</body>
</html>

<!-- Color pallet 
        indigo-600 : primary
        violet-500 : secondary
        indigo-400
        trueGray-50
    -->