<?php
session_start();
$con=new mysqli('localhost','root','','oms1');

if(!$con){
    die(mysqli_error($con)); 
}

?>

<?php
$id = $_GET['id'];
$sql = "SELECT * FROM leave_requests WHERE id = $id";
$result = mysqli_query($con, $sql);
$leave_request = mysqli_fetch_assoc($result);

// handle the approval or rejection of the leave request
if (isset($_POST['approve'])) {
    $sql = "UPDATE leave_requests SET status = 'approved' WHERE id = $id";
    mysqli_query($con, $sql);
    header("Location: leave_req.php");
}

if (isset($_POST['reject'])) {
    $sql = "UPDATE leave_requests SET status = 'rejected' WHERE id = $id";
    mysqli_query($con, $sql);
    header("Location: leave_req.php");
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
<div class="w-full min-h-screen font-sans text-gray-900 bg-gray-50 flex">
    <?php
    @include 'm_nav.php';
    ?>
    <main class="flex-1">
        <!-- head -->
        <?php
        @include 'm_head.php';
        ?>

<div class="items-center p-2 text-center bg-violet-500 text-white rounded-md mt-2 px-4">
    <h1> Full Details of Leave</h1>
    <h2> Decision is your's </h2>
</div>

<!-- leave request details -->
<div class="flex items-center justify-center gap-11 p-2 px-10">
    <div class="text-centre mt-3 shadow-md p-4 bg-gray-300 rounded-md w-80">
    <p>Name : <?php echo $leave_request['name']; ?></p>
    <p>Enrolment No : <?php echo $leave_request['enrolment']; ?></p>
    <p>Department : <?php echo $leave_request['department']; ?></p>
    <p>Sem : <?php echo $leave_request['sem']; ?></p>
    <p>Leave Type : <?php echo $leave_request['leave_type']; ?></p>
    <p>Start Date : <?php echo $leave_request['start_date']; ?></p>
    <p>End Date : <?php echo $leave_request['end_date']; ?></p>
    <p>Status : <?php echo $leave_request['status']; ?></p>
    </div>
</div>

<!-- !-- approval form -->
<div class="flex items-center gap-11 p-2 px-10 justify-center">
<div class="shadow-md rounded-md border-violet-500 border-2">
<div class="p-5 text-center">
<h2>Approval Process</h2>
<div class="flex justify-between pt-4">
<form action="" method="post">
    <input type="submit" name="approve" value="approve" class="px-4 py-1 text-sm text-center text-white bg-green-500 rounded-full hover:bg-green-700 hover:text-white cursor-pointer">
    <input type="submit" name="reject" value="reject" class="px-4 py-1 text-sm text-center text-white bg-red-500 rounded-full hover:bg-red-700 hover:text-white cursor-pointer">
</form>
</div>
</div>
</div>
</div>
