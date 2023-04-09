<?php
session_start();
$con=new mysqli('localhost','root','','oms1');

?>

<head></head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./images/logo icon.png" type="image/x-icon">
    <!-- <link rel="stylesheet" href="output.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Mentor System</title>
   
</head>

<div class="w-full min-h-screen font-sans text-gray-900 bg-gray-50 flex">
    <?php
    @include 'm_nav.php';
    ?>
    <main class="flex-1">
        <!-- head -->
        <?php
        @include 'm_head.php';
        ?>

        <div class="">
            <div class="text-center p-2">
                <h4>Documents </h4>
            </div>
        </div>
        <div class="container grid grid-cols-3 gap-2 mx-auto">
            <?php

                $id = $_GET['id'];
                $sql = "SELECT * FROM document_report WHERE id= $id ";
                $result = mysqli_query($con, $sql);

                // Display the retrieved data
                $leave_request = mysqli_fetch_assoc($result)  ?>

                            <div class="group relative block overflow-hidden rounded-md transition-all duration-500">
                            <?php $image = $leave_request['student_photo']; 
                                echo ' <img src="images/std_photo/'.$image.'" width="100px" height="100px" <div class="w-full rounded">' ?>
                                <div class="text-center absolute -bottom-52 group-hover:bottom-2 right-2 left-2 transition-all duration-500 bg-white dark:bg-slate-900 p-4 rounded shadow dark:shadow-gray-700">
                                <a href="#" class="hover:text-white text-white text-lg transition duration-500 font-medium">Student Photo</a>
                                </div>
                            </div>

                            <div class="group relative block overflow-hidden rounded-md transition-all duration-500">
                            <?php $image = $leave_request['aadharcard_photo']; echo ' <img src="images/aadhar_card_photo/'.$image.'" width="100px" height="100px" <div class="w-full rounded" >' ?>
                                <div class="text-center absolute -bottom-52 group-hover:bottom-2 right-2 left-2 transition-all duration-500 bg-white dark:bg-slate-900 p-4 rounded shadow dark:shadow-gray-700">
                                <a href="#" class="hover:text-white text-white text-lg transition duration-500 font-medium">Aadhar Card</a>
                                </div>
                            </div>

                            <div class="group relative block overflow-hidden rounded-md transition-all duration-500">
                            <?php $image = $leave_request['ssc_result']; echo ' <img src="images/SSC_result_photo/'.$image.'" width="100px" height="100px" <div class="w-full rounded">' ?>
                                <div class="text-center absolute -bottom-52 group-hover:bottom-2 right-2 left-2 transition-all duration-500 bg-white dark:bg-slate-900 p-4 rounded shadow dark:shadow-gray-700">
                                <a href="#" class="hover:text-white text-white text-lg transition duration-500 font-medium">SSC_Result</a>
                                </div>
                            </div>

                            <div class="group relative block overflow-hidden rounded-md transition-all duration-500">
                            <?php $image = $leave_request['hsc_result']; echo ' <img src="images/HSC_result_photo/'.$image.'" width="100px" height="100px" <div class="w-full rounded">' ?>
                                <div class="text-center absolute -bottom-52 group-hover:bottom-2 right-2 left-2 transition-all duration-500 bg-white dark:bg-slate-900 p-4 rounded shadow dark:shadow-gray-700">
                                <a href="#" class="hover:text-white text-white text-lg transition duration-500 font-medium">HSC_Result</a>
                                </div>
                            </div>

                            <div class="group relative block overflow-hidden rounded-md transition-all duration-500">
                            <?php $image = $leave_request['vaccine_certificate']; echo ' <img src="images/vac_certi_photo/'.$image.'" width="100px" height="100px" <div class="w-full rounded">' ?>
                                <div class="text-center absolute -bottom-52 group-hover:bottom-2 right-2 left-2 transition-all duration-500 bg-white dark:bg-slate-900 p-4 rounded shadow dark:shadow-gray-700">
                                <a href="#" class="hover:text-white text-white text-lg transition duration-500 font-medium">Vaccine_Certificate</a>
                                </div>
                            </div>
                    <?php 
                    
            ?>
        </div>


        
                            
                                                            