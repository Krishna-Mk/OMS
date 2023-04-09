<?php
include_once('db2.php');
error_reporting(0);
session_start();
$mid = $_SESSION['mentor_id'];
$id = "SELECT id FROM `mentorlist` WHERE mentor_id='$mid'";
$query = mysqli_query($con, $id);
$info = $query -> fetch_assoc();
$mid2 =$info['id'];

$res = mysqli_query($con , "Select * from `studentlist`  WHERE mentor_id='$mid2'");
$Id = $_POST['id'];
$email = $_POST['email'];
$title = $_POST['title'];
$date = $_POST['date'];
$link = $_POST['link'];
$message2 = $_POST['message'];
if (isset($_POST['submit'])){
    $sql = "INSERT INTO meeting (mentor , title , message , date) VALUES ('$mid','$title','$message2','$date')"; 
    $query0 = mysqli_query($con,$sql);
    $emails = $_POST["send_to_all"];
    foreach ($emails as $email){
        $to = $email;
        $subject =$title;
        $message = $message2." ".$link." (".$date.")";
        $header = "From : Keyur";
        $m = mail($to,$subject,$message,$header);
    }
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
<body>
<!-- admin navbar page -->
<div class="w-full min-h-screen font-sans text-gray-900 bg-gray-50 flex">
    <?php
    @include 'm_nav.php';
    ?>
    <main class="flex-1">
        <!-- head -->
        <?php
        @include 'm_head.php';
        ?>
        <div class="flex items-center gap-11 p-2 px-10">
            <h1 class="bg-violet-500 text-white p-2" id = "list">Students List</h1>
        </div>
<form action="#" method = "post">
    <div class="flex items-start p-2 px-10">
    <div class="w-full h-96 overflow-y-scroll scroll-smooth">
<table class="w-full text-center cursor-pointer">
<thead class="uppercase bg-gray-300 sticky top-0">
    <tr>
        <td>Select Students </td>
        <td>Id</td>
        <td>Name</td>
        <td>Enrollment</td>
        <td>Department</td>
        <td>Sem</td>
        <td>Email</td>
    </tr>
</thead>
<tbody class="mt-4 overflow-y-auto text-base">
    <?php
    $n=1;
    while ($row = mysqli_fetch_assoc($res)){
        ?>
        <tr class="bg-white border-b border-2">
        <th scope="row" class="py-4"><input class="bg-violet-700" type="checkbox" name = "send_to_all[]" value = "<?php echo $row['email'] ?>"></th>
        <td><?php echo $n?></td>
        <td><?php echo $row['firstName']?></td>
        <td><?php echo $row['enrollment_no']?></td>
        <td><?php echo $row['course']?></td>
        <td><?php echo $row['sem']?></td>
        <td><?php echo $row['email']?></td>
    </tr>
    
        <?php
    $n++;}
    ?>
</tbody>
</table>
    </div>
</div>

<div class="p-5">
  <div class="mb-6">
    <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
    <input type="text" id="title" name="title" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Title" required>
  </div>
  <div class="mb-6">
    <label label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your message</label>
    <textarea id="message" name="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Leave a message..."></textarea>
  </div>
  <div class="flex gap-6">
  <div class="mb-6">
      <input type='date' id='mydate' class="shadow-sm p-2 cursor-pointer border border-black rounded-md"></input>
    </div>
    <div class=" mb-6">
     <input type="submit" name = "submit" value = "submit" class="rounded-md shadow-sm p-2 bg-violet-600 hover:bg-violet-800 text-white cursor-pointer">
    </div>
    <div class=" mb-6">
        <input type="button" onclick='selects()' value="Select All" class="rounded-md shadow-sm p-2 bg-violet-600 hover:bg-violet-800 text-white cursor-pointer"/>  
    </div>
    <div class=" mb-6">
        <input type="button" onclick='deSelect()' value="Deselect All" class="rounded-md shadow-sm p-2 bg-violet-600 hover:bg-violet-800 text-white cursor-pointer" /> 
    </div>
  </div>
</div>
</form>


<!-- 
Title : <input id = "title" type="text" name = "title" required><br><br>
MESSAGE <br>
  <textarea name= "message" cols="30" rows="10" placeholder = "Your message " id = "message" required> 
  </textarea><br><br>

  <input type='date' id='mydate'></input> <br><br>

<input type="submit" name = "submit" value = "submit">

<input type="button" onclick='selects()' value="Select All"/>  


<input type="button" onclick='deSelect()' value="Deselect All" />  -->
<!-- Validtion for Selection  -->
<script type="text/javascript">  
            function selects(){  
                var ele=document.getElementsByName('send_to_all[]');  
                for(var i=0; i<ele.length; i++){  
                    if(ele[i].type=='checkbox')  
                        ele[i].checked=true;  
                }  
            }  
            function deSelect(){  
                var ele=document.getElementsByName('send_to_all[]');  
                for(var i=0; i<ele.length; i++){  
                    if(ele[i].type=='checkbox')  
                        ele[i].checked=false;  
                      
                }  
            }             
</script>
  <!--validation for not seleting previous date  -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script>
$(document).ready(function(){

	var dtToday = new Date();

	var month = dtToday.getMonth() + 1;
	var day = dtToday.getDate();
	var year = dtToday.getFullYear();
	if(month < 10)
		month = '0' + month.toString();
	if(day < 10)
		day = '0' + day.toString();
	var maxDate = year + '-' + month + '-' + day;
	
	$('#mydate').attr('min', maxDate);

})
// Checkbox validation
$(document).ready(function(){
    $("form").submit(function(){
		if ($('input:send_to_all[]').filter(':checked').length < 1){
        alert("Check at least one check box!");
		return false;
		}
    });
});
</script>
