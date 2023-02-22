<?php
error_reporting(0);
    $host="localhost";
    $user="root";
    $password="";
    $db="oms1";

    $conn=mysqli_connect($host,$user,$password,$db);

    $eid=$_GET['viewid'];
    $sql=mysqli_query($conn,"Select * from `mentorlist` where id='$eid'");
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
        @include 'a_nav.php';
        ?>
        <main class="flex-1">
            <!-- head -->
        <?php
        @include 'head.php';
        ?>
        <!-- Mentor form -->
        <div class="p-3">
<div class="dark:!bg-navy-800 shadow-xl shadow-violate-500 rounded-xl border-4 relative mx-auto flex h-full w-full max-w-[550px] flex-col items-center bg-white bg-cover bg-clip-border p-[16px] dark:text-white dark:shadow-none">
  <div class="relative mt-1 flex h-32 w-full justify-center rounded-xl bg-cover" style='background-image: url("https://i.ibb.co/FWggPq1/banner.png");'>
    <div class="absolute -bottom-12 flex h-[88px] w-[88px] items-center justify-center rounded-full border-[4px] border-white bg-pink-400">
        <img class="h-full w-full rounded-full" src="../admin/img/profile/logo.jpg" alt="" />
    </div>
  </div>
  <div class="mt-16 flex flex-col items-center">
    <h4 class="text-xl font-bold text-black"><?php echo $result['fullname'].'';?></h4>
    <p class="text-base font-normal text-black"><?php echo $result['department'];?></p>
  </div>
  <div class="mt-6 mb-3 flex gap-4 md:!gap-14">
    <div class="flex flex-col items-center justify-center">
      <h3 class=" text-2xl font-bold text-black"><?php echo $result['mentor_id'];?></h3>
      <p class=" text-sm font-normal text-black">Mentor ID</p>
    </div>
    <div class="flex flex-col items-center justify-center">
      <h3 class=" text-2xl font-bold text-black"><?php echo $result['email'];?></h3>
      <p class=" text-sm font-normal text-black">E-mail</p>
    </div>
  </div>
</div>
</div>

    </main>
</div>
<!-- component -->

</body>
</html>