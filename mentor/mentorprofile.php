<?php
session_start();
if (!isset($_SESSION['mentor_id'])){
    header("location:student_log.php");
}
else{
    $username = $_SESSION['mentor_id'];
}
// Important part need to be installed in all pages 
?>
<?php
    $host="localhost";
    $user="root";
    $password="";
    $db="oms1";

    $conn=mysqli_connect($host,$user,$password,$db);
    $sql=mysqli_query($conn,"Select * from `mentorlist` where mentor_id='$username'");
    $result=mysqli_fetch_array($sql);

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
        @include 'm_nav.php';
        ?>
        <main class="flex-1">
            <!-- head -->
        <?php
        @include 'm_head.php';
        ?>
        <!-- Mentor form -->

        <!-- <div class="col-lg-6">

            <h4><?php echo $result['fullname'];?>'s Profile</h4>

            <div class="flex items-center justify-center p-7 mx-10 rounded-lg shadow-lg bg-white max-w-md">
                <div class="text-centre mt-3">
                    <p class="text-muted mb-2 font-5">Full Name :<?php echo $result['fullname'].'';?><span class="ml-2"></span></p>
                    <p class="text-muted mb-2 font-13">Department : <?php echo $result['department'];?><span class="ml-2"></span></p>
                    <p class="text-muted mb-2 font-13"> Mentor-id :<?php echo $result['mentor_id'];?><span class="ml-2"></span></p>
                    <p class="text-muted mb-2 font-13">Email :<?php echo $result['email'];?> <span class="ml-2"></span></p>
                </div>
            </div>
            <br>
            <a href="forgotpassword.php">Reset password</a>
        </div> -->
        <div class="max-w-2xl mx-4 sm:max-w-sm md:max-w-sm lg:max-w-sm xl:max-w-sm sm:mx-auto md:mx-auto lg:mx-auto xl:mx-auto mt-16 bg-white shadow-xl rounded-lg text-gray-900">
    <div class="rounded-t-lg h-32 overflow-hidden">
        <img class="object-cover object-top w-full" src='../images/mentor.jpeg' alt='Mountain'>
    </div>
    <div class="mx-auto w-32 h-32 relative -mt-16 border-4 border-white rounded-full overflow-hidden">
        <img class="object-cover object-center h-32" src='../admin/img/profile/logo.jpg' alt='admin profile'>
    </div>
    <div class="text-center mt-2">
        <h2 class="font-semibold"><?php echo $result['fullname'].'';?></h2>
        <p class="text-gray-500"><?php echo $result['department'];?></p>
    </div>
    <ul class="py-4 mt-2 text-gray-700 flex items-center justify-around">
        <li class="flex flex-col items-center justify-around">
            <svg class="w-4 fill-current text-blue-900" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path
                    d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
            </svg>
            <div><?php echo $result['mentor_id'];?></div>
        </li>
        <li class="flex flex-col items-center justify-around">
            <svg class="w-4 fill-current text-blue-900" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path
                    d="M9 12H1v6a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-6h-8v2H9v-2zm0-1H0V5c0-1.1.9-2 2-2h4V2a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v1h4a2 2 0 0 1 2 2v6h-9V9H9v2zm3-8V2H8v1h4z" />
            </svg>
            <div><?php echo $result['email'];?></div>
        </li>
    </ul>
    <div class="p-4 border-t mx-8 mt-2">
        <a href="./resetpass/forget.php"><button class=" block mx-auto rounded-full bg-gray-900 hover:shadow-lg font-semibold text-white px-6 py-2">Reset Password ?</button></a>
    </div>
</div>

    </main>
</div>
<!-- component -->

</body>
</html>