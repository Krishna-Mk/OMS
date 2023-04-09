<?php
error_reporting(0);
session_start();
?>
<?php 
 $host="localhost";
 $user="root";
 $password="";
 $db="oms1";

$conn=mysqli_connect($host,$user,$password,$db);
$id = $_GET['id'];
$query = "SELECT * FROM attendance_report WHERE id = $id";
$result = mysqli_query($conn , $query);
$row = mysqli_fetch_array($result);
$attendance = $_POST['attendance'];
$absent = $_POST['absent'];
if (isset($_POST['update'])){
    $query2 = "UPDATE attendance_report set attendance = '$attendance', absent = '$absent' WHERE id = $id";
    mysqli_query($conn , $query2);
   echo '<script>alert("UPDATED!")</script>';
    // header('location:pdf.php');
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
    @include 'm_nav.php';
    ?>
    <main class="flex-1">
        <!-- head -->
        <?php
        @include 'm_head.php';
        ?>
<div class="flex items-center justify-center gap-11 p-28 px-10">
<form class="w-full max-w-sm border-2 p-5 shadow-md" action="#" method="post">
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
        Full Name
      </label>
    </div>
    <div class="md:w-2/3">
      <input name="name" value="<?php echo $row['name'];?>" required class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text">
    </div>
  </div>
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-password">
        Attendance
      </label>
    </div>
    <div class="md:w-2/3">
      <input name="attendance"   value="<?php echo $row['attendance'];?>" required class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-password" type="number">
    </div>
  </div>
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-password">
        Absent
      </label>
    </div>
    <div class="md:w-2/3">
      <input name="absent"   value="<?php echo $row['absent'];?>" required class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-password" type="number">
    </div>
  </div>
  <div class="md:flex md:items-center">
    <div class="md:w-1/3"></div>
    <div class="md:w-2/3">
      <input  type="submit" name="update" class="shadow-md bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="button">
      </input>
    </div>
  </div>
</form>
</div>


</main>
</div>
</body>
</html>