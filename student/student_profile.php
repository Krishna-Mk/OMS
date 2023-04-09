<?php
error_reporting(0);
session_start();
if (!isset($_SESSION['enrolment'])) {
    header("location:student_log.php");
} else {
    $username = $_SESSION['enrolment'];
    $con2 = mysqli_connect('localhost', 'root', '', 'oms1');
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
            $query3 = "SELECT * FROM studentlist WHERE enrollment_no=$username";
            $sql = mysqli_query($con2,$query3);
             $result=mysqli_fetch_array($sql);
             ?>
            <div class="flex-row justify-center w-auto p-3">
    <div class="bg-white shadow-xl rounded-lg py-3">
        <div class="photo-wrapper p-2 flex">
            <img class="w-20 h-20 rounded-full" src="https://avatars.githubusercontent.com/u/73838745?v=4" alt="John Doe">
            <div class="p-2 ml-5">
                <h3 class="text-start text-xl text-gray-900 font-medium leading-8"><?php echo $result['firstName'].' '.$result['lastName'];?></h3>
                <div class="text-start text-gray-400 text-xs font-semibold">
                    <p><?php echo $result['course'].' - '.'Sem'.' '. $result['sem'];?></p>
                    <p><?php echo $result['enrollment_no'];?></p>
                    <p><?php echo $result['institute'];?></p>
                </div>
            </div>
        </div>
            <table class="text-sm my-3">
                <tbody>
                <tr>
                    <td class="px-2 py-2 text-gray-500 font-semibold">DOB</td>
                    <td class="px-2 py-2"><?php echo $result['date_of_birth'];?></td>
                </tr>
                <tr>
                    <td class="px-2 py-2 text-gray-500 font-semibold">father name</td>
                    <td class="px-2 py-2"><?php echo $result['father_name'];?></td>
                </tr>
                <tr>
                    <td class="px-2 py-2 text-gray-500 font-semibold">Mother name</td>
                    <td class="px-2 py-2"><?php echo $result['mother_name'];?></td>
                </tr>
                <tr>
                    <td class="px-2 py-2 text-gray-500 font-semibold">phone</td>
                    <td class="px-2 py-2"><?php echo $result['mobile_number'];?></td>
                </tr>
                <tr>
                    <td class="px-2 py-2 text-gray-500 font-semibold">parent phone</td>
                    <td class="px-2 py-2"><?php echo $result['father_mobile_number'].' '.'/'.' '.$result['mother_mobile_number'];?></td>
                </tr>
                <tr>
                    <td class="px-2 py-2 text-gray-500 font-semibold">Gender</td>
                    <td class="px-2 py-2"><?php echo $result['gender'];?></td>
                </tr>
                <tr>
                <td class="px-2 py-2 text-gray-500 font-semibold">E-mail</td>
                <td class="px-2 py-2"><?php echo $result['email'];?></td>
                </tr>
                </tr>
                <tr>
                <td class="px-2 py-2 text-gray-500 font-semibold">State</td>
                <td class="px-2 py-2"><?php echo $result['state'];?></td>
                </tr>
                <tr>
                <td class="px-2 py-2 text-gray-500 font-semibold">City</td>
                <td class="px-2 py-2"><?php echo $result['district'];?></td>
                </tr>
                <tr>
                <td class="px-2 py-2 text-gray-500 font-semibold">Address</td>
                <td class="px-2 py-2"><?php echo $result['address'];?></td>
                </tr>
            </tbody>
        </table>

            <!-- <div class="text-center my-3">
                <a class="text-xs text-indigo-500 italic hover:underline hover:text-indigo-600 font-medium" href="#">View Profile</a>
            </div> -->

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