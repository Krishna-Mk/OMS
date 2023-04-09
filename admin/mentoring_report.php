<?php
/* Database connection start */
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "oms1";
$con = mysqli_connect($servername, $username, $password, $dbname);
$sql = "SELECT * FROM `meeting`";
$result = mysqli_query($con, $sql);
// $run = mysqli_fetch_assoc($result);
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./images/logo icon.png" type="image/x-icon">
    <!-- <link rel="stylesheet" href="output.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Mentor System</title>
    <script src='jquery-3.3.1.js' type='text/javascript'></script>
       <script src='jquery-ui.min.js' type='text/javascript'></script>
       <script type='text/javascript'>
       $(document).ready(function(){
         $('.dateFilter').datepicker({
            dateFormat: "yy-mm-dd"
         });
       });
       </script>
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

<div class="p-7">
<form action="#" method="Post">
  <div class="bg-violet-600 text-white w-fit p-2 rounded-md space-x-4">
<label for="" class="">Date</label> 
<input type='date' class='cursor-pointer dateFilter bg-white text-violet-600 p-2 rounded-md' name='fromDate' value='<?php if(isset($_POST['fromDate'])) echo $_POST['fromDate']; ?>'>
<input type='submit' name='but_search' value='Search' class="shadow-md p-2 bg-violet-900 cursor-pointer rounded-md">
</div>
    </form>
    <table class="w-full text-lg text-center shadow-md p-2 mt-4">
        <tr class='bg-slate-200 p-2 border-b'>
            <th>id</th>
            <th>Mentor</th>
            <th>Title</th>
            <th>Date</th>
        </tr>
            <tr>
                <?php 
                    // $query = mysqli_query($con, "SELECT * FROM meeting WHERE date = '$selectdate'");
                    $emp_query = "SELECT * FROM meeting WHERE 5 ";
                    if(isset($_POST['but_search'])){
                        $fromDate = $_POST['fromDate'];
                        // $endDate = $_POST['endDate'];
              
                        if(!empty($fromDate)){
                           $emp_query .= " and date ='".$fromDate."'";
                        }
                      }
                      $emp_query .= " ORDER BY date DESC";
                      $employeesRecords = mysqli_query($con,$emp_query);
                      $n=1;
                      if(mysqli_num_rows($employeesRecords) > 0){
                        while($empRecord = mysqli_fetch_assoc($employeesRecords)){
                          $id = $empRecord['id'];
                          $mentor = $empRecord['mentor'];
                          $title = $empRecord['title'];
                          $date = $empRecord['date'];
                          $sql2 = "SELECT * FROM mentorlist WHERE mentor_id='".$mentor."'";
                          $query2 = mysqli_query($con,$sql2);
                          $info = mysqli_fetch_assoc($query2);
                          echo "<tr class='bg-white border-b hover:bg-violet-300 transition-all cursor-pointer'>";
                          echo "<td>". $n++."</td>";
                          echo "<td>". $info['fullname'] ."</td>";
                          echo "<td>". $title ."</td>";
                          echo "<td>". $date ."</td>";
                          echo "</tr>";
                        }
                      }else{
                        echo "<tr>";
                        echo "<td colspan='4'>No record found.</td>";
                        echo "</tr>";
                      }
                      ?>
                    </table>
        </tr>
</table>

</div>
    </main>
</div>
</body>
