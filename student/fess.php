<?php
//error_reporting(0);
//include('config.php');
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
    $eid = $row['mentor_id'];
    $query3 = "Select * from `mentorlist` where id=$eid";
    $sql = mysqli_query($con2, $query3);
    $result = mysqli_fetch_array($sql);
}
// Important part need to be installed in all pages 

$msg = "";
if(isset($_POST['upload']))
    { 

        $fullname=$row['firstName'].' '.$row['lastName'];
        $enrolment=$row['enrollment_no'];
        $department=$row['course'];
        $sem=$row['sem'];
        $filename = $_FILES["uploadfile1"]["name"];
        $tempname = $_FILES["uploadfile1"]["tmp_name"];
        $folder = "../mentor/images/fees_report/" . $filename;
        $db = mysqli_connect("localhost", "root", "", "oms1");
        // Get all the submitted data from the form
        $sql2 = "INSERT INTO fees_report (fullname,enrolment,department,sem,filename,mentor_id) VALUES ('$fullname','$enrolment','$department','$sem','$filename','$eid')";
        // Execute query
       
        // Now let's move the uploaded image into the folder: image
        if (mysqli_query($db, $sql2)) 
        {
            move_uploaded_file($tempname, $folder);
            echo "<script type='text/javascript'>
            alert('Data uploaded Successfully')
            </script>";;
        } 
        else {
            echo "<h3> Failed to Upload! </h3>";
        }
      

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
    @include 'std_nav.php';
    ?>
    <main class="flex-1">
        <!-- head -->
        <?php
        @include 'head.php';
        ?>
        <!-- Mentor form -->
        <div class="flex items-center justify-end gap-11 p-3 px-10">
            <div class="bg-violet-600 p-2 text-white flex gap-3 shadow-md shadow-violet-300 hover:bg-violet-800 cursor-pointer text-center justify-between">
                <i class="bi bi-card-text"></i>
                <h1 class="text-base font-medium">Fees Upload</h1>
            </div>
        </div>
        <div class="flex items-center justify-center p-6 ml-60 rounded-lg shadow-lg bg-white max-w-md">
            <form method="post" action="" enctype="multipart/form-data">
         
                <div class="form-group mb-6">
                    <input type="text" name="fullname" id="" class="block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" value="<?php echo $row['firstName'];?><?php echo $row['lastName'];?>" disabled> 
                </div>
                <div class="form-group mb-6">
                    <input type="text" name="enrolment" id="" class="block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"  value="<?php echo $row['enrollment_no'];?>"  disabled>
                </div>
                <div class="form-group mb-6">
                    <input type="text" name="department" id="" class="block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" value="<?php echo $row['course'];?>" disabled>
                </div>
                <div class="form-group mb-6">
                    <input type="text" name="sem" id="" class="block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" value="<?php echo $row['sem'];?>" disabled>
                </div>
                <div class="form-group space-y-3">
				    <label for="">Upload your Fees Recepit</label>
				    <input class="block w-full text-sm text-slate-500
									file:mr-4 file:py-2 file:px-4
									file:rounded-full file:border-0
									file:text-sm file:font-semibold
									file:bg-violet-50 file:text-violet-700
									hover:file:bg-violet-100" type="file" name="uploadfile1" value="" required />
			    </div><br>
                <!-- <div class="form-group mb-6 bg-violet-600 text-white shadow-md shadow-gray-600 rounded-lg hover:bg-violet-800">
                    <input type="submit" name="upload" id="" class="block w-full px-3 py-1.5 text-base font-normal text-white border border-none rounded transition ease-in-out m-0 cursor-pointer">
                </div> -->
                <div class="form-group">
				    <button class="btn mt-2 bg-violet-600 hover:bg-violet-500 text-white p-2 rounded-md" type="submit" name="upload">UPLOAD</button>
			    </div>
            </form>
        </div>
    </main>
</div>
<!-- component -->

</body>
</html>
