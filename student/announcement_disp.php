<?php
session_start();
if (!isset($_SESSION['enrolment'])){
    header("location:student_log.php");
}
else{
    $username = $_SESSION['enrolment'];
    $con2 = mysqli_connect('localhost','root','','oms1');
    $query2 = "SELECT * FROM studentlist WHERE enrollment_no=$username";
    $result2 = mysqli_query($con2,$query2);
    $row = mysqli_fetch_assoc($result2);
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
            <div class="m-5 h-96 shadow-md">
                <div class="overflow-y-scroll scroll-smooth h-96 overflow-x-hidden">
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
                                while($res = mysqli_fetch_array($result)) {         
                                    echo '<tr class="bg-white border-b text-base">';
                                    echo '<td class="py-4 px-6 hover:shadow-lg shadow-black hover:text-white hover:bg-violet-400 transition-all" colspan="4">'.$res['messg'].'</td>';
                                    echo '</tr>';
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