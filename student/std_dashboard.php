<?php
error_reporting(0);
session_start();
if (!isset($_SESSION['enrolment'])) {
    header("location:student_log.php");
} else {
    $username = $_SESSION['enrolment'];
    $con2 = mysqli_connect('localhost', 'root', '', 'oms1');
    $query2 = "SELECT * FROM studentlist WHERE enrollment_no=$username";
    $result2 = mysqli_query($con2, $query2);
    $row = mysqli_fetch_assoc($result2);
    $query3 = "SELECT * FROM attendance_report WHERE enrollment = '$username'";
    $result3 = mysqli_query($con2 , $query3);
    $info = mysqli_fetch_assoc($result3);

}
// Important part need to be installed in all pages 
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
        @include 'std_nav.php';
        ?>
        <main class="flex-1">
            <!-- head -->
            <?php
            @include 'head.php';
            ?>
            <!-- Card info -->

            <?PHP
                $eid = $row['mentor_id'];
                $query3 = "SELECT * FROM `mentorlist` WHERE id=$eid";
                $sql = mysqli_query($con2, $query3);
                $result = mysqli_fetch_array($sql);
                ?>
                        <!-- <h4 class="text-center text-muted mb-2 font-13">Your Mentor</h4>
                        <p class="text-muted mb-2 font-13"> Mentor:<?php echo $result['mentor_id']; ?><span class="ml-2"></span></p>
                        <p class="text-muted mb-2 font-5">Full Name :<?php echo $result['fullname'] . ''; ?><span class="ml-2"></span></p>
                        <p class="text-muted mb-2 font-13">Department : <?php echo $result['department']; ?><span class="ml-2"></span></p>
                        <p class="text-muted mb-2 font-13">Email :<?php echo $result['email']; ?> <span class="ml-2"></span></p> -->
                        <!-- component -->
                        <div class="p-5 gap-10 text-black">
                        <div class="rounded-3xl overflow-hidden shadow-xl max-w-xs my-3 bg-violet-500">
                            <img src="../images/pu.jpeg" class="w-full" />
                            <div class="flex justify-center -mt-8">
                                <img src="../admin/img/profile/logo.jpg" class="rounded-full border-solid border-white border-2 w-20 h-20 -mt-3">
                            </div>
                            <div class="text-center px-3 pb-6 pt-2">
                                <h2 class=" bold font-sans"><?php echo $result['fullname'] . ''; ?></h2>
                                <p class="mt-2 font-sans font-light">Hello, i'm Your Mentor</p>
                                <h3 class=" text-sm bold font-sans"><?php echo $result['email']; ?></h3>
                            </div>
                            <div class="flex justify-center pb-3 text-center">
                                <div class="text-center mr-3 border-r pr-3">
                                <?php echo $result['mentor_id']; ?>
                                </div>
                                <div class="text-center">
                                <?php echo $result['department']; ?>
                                </div>
                            </div>
                        </div>

                        <!-- component -->
                        <div class="rounded-md bg-violet-400 h-auto">
                            <div class="text-center px-3 pb-6 pt-2">
                                <h3 class="bold font-sans">Your Attendance is..</h3>
                            </div>
                            <div class="flex justify-center pb-3">
                            <div class="text-center mr-3 border-r pr-3">
                                <h2>Present</h2>
                                <span><?php echo $info['attendance'];?> <br></span>
                            </div>
                            <div class="text-center">
                                <h2>Absent</h2>
                                <span><?php echo $info['absent'];?></span>
                            </div>
                            </div>
                        </div>
                        </div>

            <div class="flex mt-1">
                <div class="m-5 w-1/2 h-52 shadow-md">
                    <div class="overflow-y-scroll scroll-smooth h-52 overflow-x-hidden">
                        <?php
                        include("config.php");
                        //fetching data in descending order (latest entry first)

                        $result = mysqli_query($cser, "SELECT * FROM announcement ORDER BY id DESC"); // using mysqli_query instead
                        ?>
                        <table class="text-sm cursor-pointer w-full">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-300 sticky top-0">
                                <tr class="">
                                    <th scop="col" colspan="4" class="py-3 px-6">
                                        <h2 class="text-violet-600 text-base"> <i class="bi bi-megaphone-fill mr-2"> </i> Announcements </h2>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="text-xs mt-4 overflow-y-auto h-auto">
                                <?php
                                while ($res = mysqli_fetch_array($result)) {
                                    echo '<tr class="bg-white border-b text-base">';
                                    echo '<td class="py-4 px-6 hover:shadow-lg shadow-black hover: hover:bg-violet-400 transition-all" colspan="4">' . $res['messg'] . '</td>';
                                    echo '</tr>';
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                            </div>

                
            <!-- Card info -->
            
        </main>
    </div>
    </main>
    </div>
    <!-- component -->

</body>

</html>