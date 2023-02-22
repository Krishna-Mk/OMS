<?php

include 'connect.php';
session_start();
//error_reporting(0);
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
            <div class="flex items-center justify-end gap-11 p-3 px-10">
                <!-- <form method="post" class="bg-violet-500 rounded-md">
                <input type="text" id="search-input"  name="search-input" placeholder="search" autocomplete="off" class="p-2 border-2 form-control">
                <button type="submit"><i class="bi bi-search  text-white p-2 cursor-pointer"></i></button>
            </form> -->

                <div class="bg-violet-600 p-2 text-white flex gap-3 shadow-md shadow-violet-300 hover:bg-violet-800 cursor-pointer text-center justify-between">
                    <i class="bi bi-person-fill"></i>
                    <h1 class="text-base font-medium">View Students</h1>
                </div>
            </div>

            <!-- Manage mentor -->
            <div class="flex items-center justify-between p-5 px-10 shadow">
                <div class="w-full h-96 overflow-y-scroll scroll-smooth">
                    <table id="myTable" class="w-full text-center cursor-pointer">
                        <thead class="text-gray-700 uppercase bg-gray-300 sticky top-0">
                            <tr class="">
                                <th scop="col" class="py-3 px-6">Sr no.</th>
                                <th scop="col" class="py-3 px-6">First Name</th>
                                <th scop="col" class="py-3 px-6">Last Name</th>
                                <th scop="col" class="py-3 px-6">Enrolment</th>
                                <th scop="col" class="py-3 px-6">Course</th>
                                <th scop="col" class="py-3 px-6">Sem</th>
                                <th scop="col" class="py-3 px-6">Email</th>
                            </tr>
                        </thead>
                        <tbody class=" mt-4 overflow-y-auto h-auto">

                        <?php
                            $mid = $_SESSION['mentor_id'];
                            $id = "SELECT id FROM `mentorlist` WHERE mentor_id='$mid'";
                            $query = mysqli_query($con, $id);
                            $info = $query -> fetch_assoc();
                            $mid2 =$info['id'];

                            $n = 1;
                            $sql="Select * from `studentlist`  WHERE mentor_id='$mid2'";
                            $result=mysqli_query($con,$sql);
                            if($result){
                                while($row=mysqli_fetch_assoc($result)){
                                    $id=$row['id'];
                                    $name=$row['firstName'];
                                    $lname=$row['lastName'];
                                    $enrol=$row['enrollment_no'];
                                    $course=$row['course'];
                                    $sem=$row['sem'];
                                    $email=$row['email'];

                                    echo '<tr class="bg-white border-b" >
                                    <th scope="row" class="py-4 px-6" >'.$n.'</th>
                                    <td>'.$name.'</td>
                                    <td>'.$lname.'</td>
                                    <td>'.$enrol.'</td>
                                    <td>'.$course.'</td>
                                    <td>'.$sem.'</td>
                                    <td>'.$email.'</td>  
                                    </tr>';

                                $n ++;}
                            }
                        ?>
                            
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