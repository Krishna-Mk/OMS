<?php
session_start();
$con=new mysqli('localhost','root','','oms1');

if(!$con){
    die(mysqli_error($con)); 
}

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
</head>
<?php
$mid = $_SESSION['mentor_id'];
$sql1 = "SELECT * FROM mentorlist WHERE mentor_id = '$mid'";
$query1 = mysqli_query($con,$sql1);
$mentor = mysqli_fetch_assoc($query1);
$id = $mentor['id'];
$sql = "SELECT * FROM leave_requests WHERE mentor_id = '$id'";
$result = mysqli_query($con, $sql);

?>


<div class="w-full min-h-screen font-sans text-gray-900 bg-gray-50 flex">
    <?php
    @include 'm_nav.php';
    ?>
    <main class="flex-1">
        <!-- head -->
        <?php
        @include 'm_head.php';
        ?>
        <div class="text-center pt-3 text-violet-600 text-2xl">
            <h2>Leave Section</h2>
        </div>
        <div>
            <!-- Table -->
            <div class="flex items-center justify-between p-5 px-2 shadow">
                <div class="w-full h-96 overflow-y-scroll scroll-smooth">
                    <table class="w-full text-center cursor-pointer">
                        <thead class="text-xs uppercase bg-gray-300 sticky top-0">
                            <tr class="">
                                <th scop="col" class="py-3 px-6">Name</th>
                                <th scop="col" class="py-3 px-6">Enrollment</th>
                                <th scop="col" class="py-3 px-6">Department</th>
                                <th scop="col" class="py-3 px-6">Semester</th>
                                <th scop="col" class="py-3 px-6">Start Date</th>
                                <th scop="col" class="py-3 px-6">End Date</th>
                                <th scop="col" class="py-3 px-6">Leave reason</th>  
                                <th scop="col" class="py-3 px-6">Status</th>
                                <th scop="col" class="py-3 px-6">Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-base mt-4 overflow-y-auto h-auto">
                            
                        <?php while ($leave_request = mysqli_fetch_assoc($result)) { ?>
                        <tr class="bg-white border-b border-2">
                            <td><?php echo $leave_request['name']; ?></td>
                            <td><?php echo $leave_request['enrolment']; ?></td>
                            <td><?php echo $leave_request['department']; ?></td>
                            <td><?php echo $leave_request['sem']; ?></td>
                            <td><?php echo $leave_request['start_date']; ?></td>
                            <td><?php echo $leave_request['end_date']; ?></td>
                            <td><?php echo $leave_request['leave_type']; ?></td>
                            <td><?php echo $leave_request['status']; ?></td>
                            <td class="py-4 px-1">
                                <a class="px-4 py-1 text-sm text-center text-white bg-blue-500 rounded-full hover:bg-blue-700 hover:text-white" href="leave_approval.php?id=<?php echo $leave_request['id'];?>"> View Details</a>
                            </td>
                        </tr>
                        <?php } ?>


                                <!-- <td class="py-4 px-6 flex gap-2">
                                    <button><h3 class="px-4 py-1 text-sm text-green-500 text-center border border-green-500 rounded-full hover:bg-green-700 hover:text-white">Approve</h3></button>
                                    <button><h3 class="px-4 py-1 text-sm text-red-500 text-center border border-red-500 rounded-full hover:bg-red-700 hover:text-white">Reject</h3></button>
                                </td> -->
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
</div>