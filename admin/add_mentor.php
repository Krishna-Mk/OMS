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

    if(isset($_POST['add_mentor']))
    {
	   $fullname=$_POST['fullname'];
	   //$lastname=$_POST['lastname'];
       $email=$_POST['email'];
       $department=$_POST['department'];
       $password=$_POST['password'];
       $usertype='mentor';

       $check="	SELECT * FROM mentorlist WHERE email='$email'";

       $check_user=mysqli_query($conn,$check);

       $row_count=mysqli_num_rows($check_user);

       if ($row_count==1) 
       {
       		echo "<script type='text/javascript'>
       	alert('Username Already Exist')
       	</script>";
       }
       else
       {
        // Generate a unique ID for the mentor
        $random_number = rand(1000, 9999);
        $fullname_initials = substr($fullname, 0, 4);
        //$lastname_initials = substr($lastname, 0, 2);
        $unique_id = $fullname_initials. $random_number;

        // Generate a random password
        $pass = bin2hex(random_bytes(3));

        // Hash the password
        //$password = hash('sha256', $password);

        // Check if unique_id is already in the table
        $select_query = "SELECT mentor_id FROM mentorlist WHERE mentor_id = '$unique_id'";
        $result = mysqli_query($conn, $select_query);
        if (mysqli_num_rows($result) > 0) {
            // If the unique_id is already in the table, generate a new unique_id
            $random_number = rand(1000, 9999);
            $unique_id = $fullname_initials. $random_number;
        }

       $sql="INSERT INTO mentorlist (fullname,department,usertype,mentor_id,email,password) 	VALUES ('$fullname','$department','$usertype','$unique_id','$email','$pass')";

       $add=mysqli_query($conn,$sql);

       if($add)
       {
        // Send email with login credentials
        $to = $email;
        $subject = "Login Credentials";
        $message = "Your login Credentials for the Mentor portal are as follows:\n\n Your Mentor-id is : " . $unique_id . "\nPassword: " . $pass . "\n\nPlease keep these details safe and do not share them with anyone.";
        $headers = "From: no-reply@example.com";

        if (mail($to, $subject, $message, $headers)) {
             echo "<script type='text/javascript'>
             alert('Mentor added successfully and login credentials have been sent to their email.')
             </script>";
        } 
        else {
             echo "Error sending email. Please try again later.";
             echo $email;
        }

       	// echo "<script type='text/javascript'>
       	// alert('Data Uploaded Successfully')
       	// </script>";
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
                <h1 class="text-base font-medium">Add Mentor</h1>
            </div>
        </div>
        <div class="flex items-center justify-center p-6 ml-60 rounded-lg shadow-lg bg-white max-w-md">
            <form action="" method="post" action="#">
         
                <div class="form-group mb-6">
                    <input type="text" name="fullname" id="" class="block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Full Name" required>
                </div>
                <div class="form-group mb-6">
                    <input type="email" name="email" id="" class="block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="abc@email" required>
                </div>
                <div class="form-group mb-6">
                    <input type="text" name="department" id="" class="block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Department" required>
                </div>
                <div class="form-group mb-6 bg-violet-600 text-white shadow-md shadow-gray-600 rounded-lg hover:bg-violet-800">
                    <input type="submit" name="add_mentor" id="" class="block w-full px-3 py-1.5 text-base font-normal text-white border border-none rounded transition ease-in-out m-0 cursor-pointer">
                </div>
            </form>
        </div>
    </main>
</div>
<!-- component -->

</body>
</html>

<!-- Color pallet 
        indigo-600 : primary
        violet-500 : secondary
        indigo-400
        trueGray-50
    -->