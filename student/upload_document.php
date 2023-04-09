<?php
//error_reporting(0);
session_start();

if (!isset($_SESSION['enrolment'])) {
	header("location:student_log.php");
} else {
	$username = $_SESSION['enrolment'];
	$con2 = mysqli_connect('localhost', 'root', '', 'oms1');
	$query2 = "SELECT * FROM studentlist WHERE enrollment_no=$username";
	$result2 = mysqli_query($con2, $query2);
	$row = mysqli_fetch_assoc($result2);
	$eid = $row['mentor_id'];
    $query3 = "Select * from `mentorlist` where id=$eid";
    $sql = mysqli_query($con2, $query3);
    $result = mysqli_fetch_array($sql);
}


$msg = "";

// If upload button is clicked ...
if (isset($_POST['upload'])) {

	$fullname=$row['firstName'].' '.$row['lastName'];
    $enrolment=$row['enrollment_no'];
    $department=$row['course'];
    $sem=$row['sem'];

	$filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];
	$folder = "../mentor/images/std_photo/" . $filename;
	$db = mysqli_connect("localhost", "root", "", "oms1");

	//upload aadharcard photo
	$filename1 = $_FILES["uploadfile1"]["name"];
	$tempname1 = $_FILES["uploadfile1"]["tmp_name"];
	$folder1 = "../mentor/images/aadhar_card_photo/" . $filename1;

	//upload SSC Result Photo
	$filename2 = $_FILES["uploadfile2"]["name"];
	$tempname2 = $_FILES["uploadfile2"]["tmp_name"];
	$folder2 = "../mentor/images/SSC_result_photo/" . $filename2;

	//upload HSC Result Photo
	$filename3 = $_FILES["uploadfile3"]["name"];
	$tempname3 = $_FILES["uploadfile3"]["tmp_name"];
	$folder3 = "../mentor/images/HSC_result_photo/" . $filename3;

	//upload  Vac certi Photo
	$filename4 = $_FILES["uploadfile4"]["name"];
	$tempname4 = $_FILES["uploadfile4"]["tmp_name"];
	$folder4 = "../mentor/images/vac_certi_photo/" . $filename4;

	//upload Caste certi Photo
	$filename5 = $_FILES["uploadfile5"]["name"];
	$tempname5 = $_FILES["uploadfile5"]["tmp_name"];
	$folder5 = "../mentor/images/caste_certi_photo/" . $filename5;
	//$sql = "INSERT INTO document_report (caste_certificate) VALUES ('$filename5')";
	$sql = "INSERT INTO document_report (fullname,enrolment,department,sem,student_photo,aadharcard_photo,ssc_result,hsc_result,vaccine_certificate,caste_certificate,mentor_id) VALUES ('$fullname','$enrolment','$department','$sem','$filename','$filename1','$filename2','$filename3','$filename4','$filename5','$eid')";

	if (mysqli_query($db, $sql)) {
		move_uploaded_file($tempname5, $folder5);
		move_uploaded_file($tempname4, $folder4);
		move_uploaded_file($tempname3, $folder3);
		move_uploaded_file($tempname2, $folder2);
		move_uploaded_file($tempname1, $folder1);
		move_uploaded_file($tempname, $folder);
		echo "<script>alert('Image uploaded successfully!') </script>";
	} else {
		echo "<script>alert('Failed to upload image!') </script>";
	}
}
?>

<!DOCTYPE html>
<html>

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

		<body>
			<div id="content" class="p-2 px-4">
				<form method="POST" action="" enctype="multipart/form-data">
					<div class="text-center bg-violet-600 text-white p-2">
						<h1 class="">Upload your documents here</h1>
						<h3 class="">Please upload all documents with the filename as your Enrollment</h3>
					</div>

					<div class="mt-3">
						<div class="form-group mb-6">
							<input type="text" name="fullname" id="" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" value="<?php echo $row['firstName'];?><?php echo $row['lastName'];?>" disabled>
						</div>

						<div class="form-group mb-6">
							<input type="number" name="enrolment" id="" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" value="<?php echo $row['enrollment_no'];?>"  disabled>
						</div>

						<div class="form-group mb-6">
							<input type="text" name="department" id="" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" value="<?php echo $row['course'];?>" disabled>
						</div>

						<div class="form-group mb-6">
							<input type="number" name="sem" id="" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" value="<?php echo $row['sem'];?>" disabled>
						</div>

						<div class="flex-wrap grid-cols-4 grid gap-4">

							<div class="form-group border-violet-600 border-2 p-2 w-60 text-center space-y-3">
								<!-- for student photo -->
								<label for="">Upload your photo</label>
								<input class="block w-full text-sm text-slate-500
									file:mr-4 file:py-2 file:px-4
									file:rounded-full file:border-0
									file:text-sm file:font-semibold
									file:bg-violet-50 file:text-violet-700
									hover:file:bg-violet-100" type="file" name="uploadfile" value="" required />
							</div>

							<!-- for aadhar card -->
							<div class="form-group border-violet-600 border-2 p-2 w-60 text-center space-y-3">
								<label for="">Upload your Aadhar Card photo</label>
								<input class="block w-full text-sm text-slate-500
									file:mr-4 file:py-2 file:px-4
									file:rounded-full file:border-0
									file:text-sm file:font-semibold
									file:bg-violet-50 file:text-violet-700
									hover:file:bg-violet-100" type="file" name="uploadfile1" value="" required />
							</div>

							<!-- for SSC Result Photo -->
							<div class="form-group border-violet-600 border-2 p-2 w-60 text-center space-y-3">
								<label for="">Upload your SSC Result Photo</label>
								<input class="block w-full text-sm text-slate-500
									file:mr-4 file:py-2 file:px-4
									file:rounded-full file:border-0
									file:text-sm file:font-semibold
									file:bg-violet-50 file:text-violet-700
									hover:file:bg-violet-100" type="file" name="uploadfile2" value="" required />
							</div>

							<!-- for HSC Result Photo-->
							<div class="form-group border-violet-600 border-2 p-2 w-60 text-center space-y-3">
								<label for="">Upload your HSC Result Photo</label>
								<input class="block w-full text-sm text-slate-500
									file:mr-4 file:py-2 file:px-4
									file:rounded-full file:border-0
									file:text-sm file:font-semibold
									file:bg-violet-50 file:text-violet-700
									hover:file:bg-violet-100" type="file" name="uploadfile3" value="" required />
							</div>

							<!-- for Vac certi Photo-->
							<div class="form-group border-violet-600 border-2 p-2 w-60 text-center space-y-3">
								<label for="">Upload your Vaccine Certificate Photo</label>
								<input class="block w-full text-sm text-slate-500
									file:mr-4 file:py-2 file:px-4
									file:rounded-full file:border-0
									file:text-sm file:font-semibold
									file:bg-violet-50 file:text-violet-700
									hover:file:bg-violet-100" type="file" name="uploadfile4" value="" required />
							</div>

							<!-- for caste certi Photo-->
							<div class="form-group border-violet-600 border-2 p-2 w-60 text-center space-y-3">
								<label for="">Upload your Caste Certificate Photo</label>
								<input class="block w-full text-sm text-slate-500
									file:mr-4 file:py-2 file:px-4
									file:rounded-full file:border-0
									file:text-sm file:font-semibold
									file:bg-violet-50 file:text-violet-700
									hover:file:bg-violet-100" type="file" name="uploadfile5" value="" />
							</div>
						</div>

						<div class="form-group text-center mt-2">
							<button class="btn mt-2 bg-violet-600 hover:bg-violet-500 text-white p-2 rounded-md" type="submit" name="upload">UPLOAD</button>
						</div>
				</form>
			</div>

		</body>

</html>