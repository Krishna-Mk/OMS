<?php
session_start();
$con = new mysqli('localhost', 'root', '', 'oms1');

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
<?php
$mid = $_SESSION['mentor_id'];
$sql1 = "SELECT * FROM mentorlist WHERE mentor_id = '$mid'";
$query1 = mysqli_query($con, $sql1);
$mentor = mysqli_fetch_assoc($query1);
$id = $mentor['id'];
$sql = "SELECT * FROM document_report WHERE mentor_id = '$id'";
$result = mysqli_query($con, $sql);

?>
<style>
    #myImg {
        border-radius: 5px;
        cursor: pointer;
        transition: 0.3s;
    }

    #myImg:hover {
        opacity: 0.7;
    }

    /* The Modal (background) */
    .modal {
        display: none;
        /* Hidden by default */
        position: fixed;
        /* Stay in place */
        z-index: 1;
        /* Sit on top */
        padding-top: 100px;
        /* Location of the box */
        left: 0;
        top: 0;
        width: 100%;
        /* Full width */
        height: 100%;
        /* Full height */
        overflow: auto;
        /* Enable scroll if needed */
        background-color: rgb(0, 0, 0);
        /* Fallback color */
        background-color: rgba(0, 0, 0, 0.9);
        /* Black w/ opacity */
    }

    /* Modal Content (image) */
    .modal-content {
        margin: auto;
        display: block;
        width: 80%;
        max-width: 700px;
    }

    /* Caption of Modal Image */
    #caption {
        margin: auto;
        display: block;
        width: 80%;
        max-width: 700px;
        text-align: center;
        color: #ccc;
        padding: 10px 0;
        height: 150px;
    }

    /* Add Animation */
    .modal-content,
    #caption {
        -webkit-animation-name: zoom;
        -webkit-animation-duration: 0.6s;
        animation-name: zoom;
        animation-duration: 0.6s;
    }

    @-webkit-keyframes zoom {
        from {
            -webkit-transform: scale(0)
        }

        to {
            -webkit-transform: scale(1)
        }
    }

    @keyframes zoom {
        from {
            transform: scale(0)
        }

        to {
            transform: scale(1)
        }
    }

    /* The Close Button */
    .close {
        position: absolute;
        top: 15px;
        right: 35px;
        color: #f1f1f1;
        font-size: 40px;
        font-weight: bold;
        transition: 0.3s;
    }

    .close:hover,
    .close:focus {
        color: #bbb;
        text-decoration: none;
        cursor: pointer;
    }

    /* 100% Image Width on Smaller Screens */
    @media only screen and (max-width: 700px) {
        .modal-content {
            width: 100%;
        }
    }
</style>
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
        <div class="text-center shadow-md">
            <h2 class="p-2 text-base text-violet-700">Document's Report</h2>
        </div>
        <div>
            <!-- Table -->
            <div class="flex items-center justify-between p-5 px-10 shadow">
                <div class="w-full h-96 overflow-y-scroll scroll-smooth">
                    <table class="w-full text-sm text-center text-gray-500 cursor-pointer">
                        <thead class=" text-gray-700 uppercase bg-gray-300 sticky top-0">
                            <tr class="">
                                <th scop="col" class="py-3 px-6">Sr no.</th>
                                <th scop="col" class="py-3 px-6">Name</th>
                                <th scop="col" class="py-3 px-6">Enrollment</th>
                                <th scop="col" class="py-3 px-6">Department</th>
                                <th scop="col" class="py-3 px-6">Semester</th>
                                <th scop="col" class="py-3 px-6">Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-base mt-4 overflow-y-auto h-auto text-center">

                            <?php

                            $n = 1;
                            $sql = "SELECT * FROM document_report where mentor_id = '$id'";
                            $result = mysqli_query($con, $sql);

                            // Display the retrieved data
                            while ($leave_request = mysqli_fetch_assoc($result)) { ?>
                                <tr>

                                    <td><?php echo $n++; ?></td>
                                    <td><?php echo $leave_request['fullname']; ?></td>
                                    <td><?php echo $leave_request['enrolment']; ?></td>
                                    <td><?php echo $leave_request['department']; ?></td>
                                    <td><?php echo $leave_request['sem'];
                                        echo '<sup>th</sup>' ?></td>
                                    <td class="py-4 px-6 flex gap-2">
                                        <button><a href="./document_img.php?id=<?php echo $leave_request['id']; ?>" class="px-4 py-1 text-sm text-blue-500 text-center border border-blue-500 rounded-full hover:bg-blue-700 hover:text-white" href="document_img.php?viewid='.$id.'">View Documents</a></button>
                                    </td>

                                </tr>
                            <?php }

                            ?>


                            <!-- <td class="py-4 px-6 flex gap-2">
                                <button><h3 class="px-4 py-1 text-sm text-green-500 text-center border border-green-500 rounded-full hover:bg-green-700 hover:text-white">Approve</h3></button>
                                <button><h3 class="px-4 py-1 text-sm text-red-500 text-center border border-red-500 rounded-full hover:bg-red-700 hover:text-white">Reject</h3></button>
                            </td> -->

                        </tbody>
                    </table>
                </div>
                <div id="myModal" class="modal">
                    <span class="close">&times;</span>
                    <img class="modal-content" id="img01">
                    <div id="caption"></div>
                </div>
            </div>
        </div>
    </main>
</div>