<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "oms1";

$conn = mysqli_connect($host, $user, $password, $db);
session_start();
if (!isset($_SESSION['mentor_id'])) {
    header('location:m_dashboard.php');
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

        <!-- Card info -->
        <div class="flex items-center justify-center gap-11 p-7 px-10">
            <div class="text-center shadow-md border border-violet-600 p-5 cursor-pointer text-violet-700 space-y-2 hover:shadow-none hover:border hover:bg-violet-500 hover:text-white hover:border-none hover:rounded-md">
                <i class="bi bi-person-fill"></i>
                <h2>Total Students</h2>
                <?php
                    $mid = $_SESSION['mentor_id'];
                    $id = "SELECT id FROM `mentorlist` WHERE mentor_id='$mid'";
                    $query = mysqli_query($conn, $id);
                    $info = $query -> fetch_assoc();
                    $mid2 =$info['id'];


                    $dash_query = "SELECT * FROM `studentlist`  WHERE mentor_id='$mid2'";
                    $dash_query_run = mysqli_query($conn, $dash_query);

                    if ($total_student = mysqli_num_rows($dash_query_run)) {
                        echo '<p>' . $total_student . '</p>';
                    } else {
                        echo '<p> No Data </p>';
                    }

                ?>
            </div>
            <div class="text-center shadow-md border border-violet-600 p-5 cursor-pointer text-violet-700 space-y-2 hover:shadow-none hover:border hover:bg-violet-500 hover:text-white hover:border-none hover:rounded-md">
                <i class="bi bi-people-fill"></i>
                <h2>Total Announcements</h2>
                <?php

                    $dash_query = "SELECT * FROM `announcement`";
                    $dash_query_run = mysqli_query($conn,$dash_query);

                    if($total_announce = mysqli_num_rows($dash_query_run))
                    {
                        echo '<p>'.$total_announce.'</p>';
                    }
                    else
                    {
                        echo '<p> No Data </p>';
                    }

                ?>
            </div>
            <!-- <div class="text-center shadow-md border border-violet-600 p-5 cursor-pointer text-violet-700 space-y-2 hover:shadow-none hover:border hover:bg-violet-500 hover:text-white hover:border-none hover:rounded-md">
                <i class="bi bi-chat-text-fill"></i>
            </div> -->
        </div>

        <div class="flex items-center justify-between p-2 px-10 shadow ">
            <div>
                <h3 >Students List</h3>
            </div>
        </div>
        <!-- Table for mentor  --> <!-- for creating sticky head of the table use the sticky postiotion and top-0 and other body side put the overflow or give a hight -->
        <div class="flex items-center justify-between p-5 px-10 shadow">
            <div class="w-full h-60 overflow-y-scroll scroll-smooth">
                <table class="w-full text-sm text-center text-gray-500 cursor-pointer">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-300 sticky top-0">
                            <tr class="">
                                <th scop="col" class="py-3 px-6">Sr.no</th>
                                <th scop="col" class="py-3 px-6">Name</th>
                                <th scop="col" class="py-3 px-6">E-mail</th>
                                <th scop="col" class="py-3 px-6">Department</th>
                                <th scop="col" class="py-3 px-6">Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-xs mt-4 overflow-y-auto h-auto">

                        <?php
                            $n = 1;
                            $sql="Select * from `studentlist`  WHERE mentor_id='$mid2'";
                            $result=mysqli_query($conn,$sql);
                            if($result){
                                while($row=mysqli_fetch_assoc($result)){
                                    $id=$row['id'];
                                    $name=$row['firstName'];
                                    $lname=$row['lastName'];
                                    $email=$row['email'];
                                    $course=$row['course'];

                                    echo '<tr class="bg-white border-b" >
                                    <th scope="row" class="py-4 px-6" >'.$n.'</th>
                                    <td>'.$name.' '.$lname.'</td>
                                    <td>'.$email.'</td>
                                    <td>'.$course.'</td>  
                                    <td class="py-4 px-6"><h3 class="px-4 py-1 text-sm text-center text-white bg-blue-500 rounded-full hover:bg-blue-700 hover:text-white"><a href="./student_profile.php?id='.$id.'">View</a></h3></td>
                                    </tr>';

                                $n ++;}
                            }
                            ?>
                            
                            <!-- <tr class="bg-white border-b">
                                <td class="py-4 px-6"><img src="https://randomuser.me/api/portraits/lego/5.jpg" alt="" class="rounded-full w-8"></td>
                                <td class="py-4 px-6"><h3>Keyur Malete</h3></td>
                                <td class="py-4 px-6"><h3>devkeyur4@gmail.com</h3></td>
                                <td class="py-4 px-6"><h3>BCA</h3></td>
                                <td class="py-4 px-6"><h3 class="px-4 py-1 text-sm text-center text-blue-600 bg-blue-200 rounded-full hover:bg-blue-500 hover:text-white">View</h3></td>
                            </tr> -->
                            
                        </tbody>
                    </table>
                </div>
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