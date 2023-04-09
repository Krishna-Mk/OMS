<?php

$con =  mysqli_connect('localhost', 'root', '', 'oms1');
session_start();
if (!isset($_SESSION['enrolment'])) {
    header("location:student_log.php");
} else {
    $username = $_SESSION['enrolment'];
    $query2 = "SELECT * FROM studentlist WHERE enrollment_no=$username";
    $result2 = mysqli_query($con, $query2);
    $row = mysqli_fetch_assoc($result2);
    $eid = $row['mentor_id'];
    $query3 = "Select * from `mentorlist` where id=$eid";
    $sql = mysqli_query($con, $query3);
    $result = mysqli_fetch_array($sql);
}

?>

<?php
if (isset($_POST['submit'])) {
    // get the form data
    // $name = mysqli_real_escape_string($con, $_POST['name']);
    // $enrolment = mysqli_real_escape_string($con, $_POST['enrolment']);
    // $department = mysqli_real_escape_string($con, $_POST['department']);
    // $sem = mysqli_real_escape_string($con, $_POST['sem']);
    $fullname=$row['firstName'].' '.$row['lastName'];
    $enrolment=$row['enrollment_no'];
    $department=$row['course'];
    $sem=$row['sem'];
    $leave_type = $_POST['leave_type'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];

    // insert the leave request into the database
    $sql = "INSERT INTO leave_requests (name,enrolment,department,sem, leave_type, start_date, end_date ,mentor_id) VALUES ('$fullname','$enrolment','$department','$sem', '$leave_type', '$start_date', '$end_date','$eid')";
    $result0 = mysqli_query($con, $sql);
    if($result0)
    {
      echo '<script>alert("Data Uploaded Successfully")</script>';
    }
    else{
      echo '<script>alert(" Fail to upload")</script>';
      echo $sem;
    }
    // redirect to the leave request listing page
    //header('Location:leave_form.php');

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
  @include 'std_nav.php';
  ?>
  <main class="flex-1">
    <!-- head -->
    <?php
    @include 'head.php';
    ?>


    <!-- leave request form -->
    <div class="flex items-start justify-center gap-11 p-2 px-10">

    <form class="w-full max-w-lg shadow-md p-3" action="#" method="post">
  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
        Full Name
      </label>
      <input  name="name" id="name" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-first-name" type="text" value="<?php echo $row['firstName'];?><?php echo $row['lastName'];?>" disabled>
    </div>
    <div class="w-full md:w-1/2 px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
        Enrollment No
      </label>
      <input name="enrolment" id="enrolment" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="number" value="<?php echo $row['enrollment_no'];?>"  disabled>
    </div>
  </div>
  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
        Department
      </label>
      <input  name="department" id="department" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-first-name" type="text" value="<?php echo $row['course'];?>" disabled>
    </div>
    <div class="w-full md:w-1/2 px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
        Semester
      </label>
      <input name="sem" id="sem" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="number" value="<?php echo $row['sem'];?>" disabled>
    </div>
  </div>
  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
        Leave Reason
      </label>
      <input name="leave_type" id="leave_type" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="Text" placeholder="Leave Reason">
    </div>
  </div>
  <div class="flex flex-wrap -mx-3 mb-2 gap-10">
    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
        Start Date
      </label>
      <input name="start_date" id="start_date" class="p-3 appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="Date" placeholder="">
    </div>
    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
        End Date
      </label>
      <input name="end_date" id="end_date" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-zip" type="Date" placeholder="">
    </div>
  </div>
  <div class="flex flex-wrap -mx-3 mb-2">
  <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
  <input type="submit" name="submit" value="Submit Leave Request" class="shadow-md bg-purple-600 hover:bg-purple-800 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded-md cursor-pointer">
  </input>
  </div>
  </div>
</form>
    </div>
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
                            </tr>
                        </thead>
                        <tbody class="text-base mt-4 overflow-y-auto h-auto">
                        <?php
                        $n = 1;
                        $sql = "SELECT * FROM leave_requests where enrolment= $username";
                        $result0 = mysqli_query($con , $sql);
                        while ($leave_request = mysqli_fetch_assoc($result0)) { ?>
                        <tr class="bg-white border-b border-2">
                            <td><?php echo $leave_request['name']; ?></td>
                            <td><?php echo $leave_request['enrolment']; ?></td>
                            <td><?php echo $leave_request['department']; ?></td>
                            <td><?php echo $leave_request['sem']; ?></td>
                            <td><?php echo $leave_request['start_date']; ?></td>
                            <td><?php echo $leave_request['end_date']; ?></td>
                            <td><?php echo $leave_request['leave_type']; ?></td>
                            <td><?php echo $leave_request['status']; ?></td>
                        </tr>
                        <?php } ?>


                                <!-- <td class="py-4 px-6 flex gap-2">
                                    <button><h3 class="px-4 py-1 text-sm text-green-500 text-center border border-green-500 rounded-full hover:bg-green-700 hover:text-white">Approve</h3></button>
                                    <button><h3 class="px-4 py-1 text-sm text-red-500 text-center border border-red-500 rounded-full hover:bg-red-700 hover:text-white">Reject</h3></button>
                                </td> -->
                            </tr>
                        </tbody>
                    </table>
  </main>
</div>