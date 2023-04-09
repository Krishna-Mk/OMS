<?php
session_start();
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
    <title>Announcement</title>
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
<div class="flex justify-center gap-11 p-5 px-10">
 <form action="" method="post" name="form1" class="w-full max-w-sm border-2 p-5 shadow-md">
 <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
        Create a Announcement
      </label>
    </div>
    <div class="md:w-2/3">
      <input type="text" name="messg" required class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full ml-3 py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name">
    </div>
  </div>
  <div class="md:flex md:items-center">
    <div class="md:w-1/3"></div>
    <div class="md:w-2/3">
      <input  type="submit" name="submit" value="Create" class="shadow-md bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="button">
      </input>
    </div>
  </div>
    </form>
</div>
</body>
</html>

<?php
//including the database connection file
//insert data
include("config.php");
if(isset($_POST['submit'])) {    
$messg = $_POST['messg'];

        
// checking empty fields
if(empty($messg) ) {                
if(empty($messg)) {
echo "this cannnot be empty";
}
//link to the previous page

 } else { 
// if all the fields are filled (not empty)             
//insert data to database
$result = mysqli_query($cser, "INSERT INTO announcement(messg) VALUES('$messg')");
        
//display success message
// echo "<script> alert('Data added successfully')</script>";
echo '<div id="toast-msg" class="fixed top-20 right-6 px-4 py-2 m-2 rounded-lg bg-green-500 text-white animate-pulse duration-75">Announcement Created successfully</div>';
        
}
}
?>

<!-- to delete the posted announcements -->
<?php

//fetching data in descending order (latest entry first)

$result = mysqli_query($cser, "SELECT * FROM announcement ORDER BY id DESC"); // using mysqli_query instead
?>
     <div class="flex items-center justify-between p-5 px-10 shadow">
    <div class="w-full h-96 overflow-y-scroll scroll-smooth">
    <table class="w-full text-base text-black cursor-pointer">
        <thead class="text-base uppercase bg-gray-300 sticky top-0">
            <tr>
            <td scop="col">announcement</td>
            <td scop="col">Action</td>
        </tr>
        </thead>
        <tbody class="text-base mt-4 overflow-y-auto h-auto">
        <?php 
        
        while($res = mysqli_fetch_array($result)) {         
            echo '<tr class="bg-white border-b">';
            echo "<td>".$res['messg']."</td>";
            echo '';
            ?> 
            <td><h3 class="px-4 py-1 text-sm text-center text-white bg-red-500 rounded-full hover:bg-red-700 hover:text-white"><?php echo"<a href='deleteannounce.php?deleteid={$res['id']}'>Delete</a>";?></h3></td>
            <!-- <td><a href="delete.php?id="><button name="deleteid"> Delete</button></a></td> -->
            <?php
            }
        ?>

       
    </table>
    </div>
     </div>

    <script>
    var sucessmsg = document.getElementById("toast-msg");
    if (sucessmsg) {
        setTimeout(function() {
            sucessmsg.style.display = "none"
        }, 3000);
    }
    // if (errormsg) {
    //     setTimeout(function() {
    //         errormsg.style.display = "none"
    //     }, 3000);
    // }
</script>

<!-- delete announcement -->