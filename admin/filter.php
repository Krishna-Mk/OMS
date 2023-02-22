<?php
//error_reporting(0);
//include 'connect.php';

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

    <script type="text/javascript">
		$(document).ready(function(){
			$("#employee_div").load("allrecord.php");
			$("#course_dropdown").change(function(){
				var selected=$(this).val();
				$("#sem_div").load("sem.php",{selected_sem: selected});
			});
			$("#refresh").click(function(){
				$("#employee_div").load("allrecord.php");
			});

		});
	</script>
</head>
<body>
<!-- admin navbar page -->
<div class="w-full min-h-screen font-sans text-gray-900 bg-gray-50 flex">
    <?php
    @include 'a_nav.php';
    ?>
    <main class="flex-1">
        <!-- head -->
        <?php
        @include 'head.php';
        ?>
        <!-- Mentor form -->
        <div class="flex items-center gap-11 p-2 px-10">
            <form method="post" class="flex items-center gap-11 p-3 px-10">
                <div class="">
                    <label for="price" class="control-label col-sm-3 col-sm-offset-2" >course: </label>
                    <select name="course" class="form-control" id="course_dropdown">
					<option>---Select---</option>
						<?php
							require('config.php');
							$db = new db;
							$result=$db->getcourse();
							while($row=mysqli_fetch_array($result)){
								echo "<option value=".$row['course_id'].">".$row['course_name']."</option>";	
							}
							$db->closeCon();
						?>
				    </select>
                    <!-- <select name="" id="" class="p-2 rounded-lg border-violet-500 border cursor-pointer">
                    <Option selected>Course</Option>
                    <option value="BCA">BCA</option>
                    <option value="IMCA">IMCA</option>
                    <option value="Bsc.IT">Bsc.IT</option>
                    </select> -->
                </div>
                <div class="col-sm-2" id="sem_div">
                </div>
                


                <div class="row"><br></div>
                    <div class="row" id='employee_div'>    
                </div>
                <div class="flex gap-3">
                <div class="flex gap-2 bg-violet-500 text-white p-2 rounded-lg">
                    <i class="bi bi-funnel"></i>
                    <button type="submit">Apply</button>
                </div>
                </form>
            </div>
        </div>    
        <div class="flex items-center justify-between gap-11 p-3 px-10">
            <!-- <div class="bg-violet-500 rounded-md">
                <input type="text" placeholder="search" class="p-2 border-2">
                <i class="bi bi-search  text-white p-2 cursor-pointer"></i>
           </div> -->
           <form method="post" class="bg-violet-500 rounded-md">
                <input type="text" id="search-input" onkeyup="myFunction()" name="search-input" placeholder="search" class="p-2 border-2 form-control" autocomplete="off">
                <button type="submit" class="btn btn-primary"><i class="bi bi-search  text-white p-2 cursor-pointer"></i></button>
            </form>

            <div class="bg-violet-600 p-2 text-white flex gap-3 shadow-md shadow-violet-300 hover:bg-violet-800 cursor-pointer text-center">
                <i class="bi bi-person-fill"></i>
                <h1 class="text-base font-medium">Manage Students</h1>
            </div>
        </div>

    </main>
</div>
<!-- component -->
<!-- <script>
        function myFunction() {
            // Declare variables
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("search-input");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");

            // Loop through all table rows, and hide those who don't match the search query
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script> -->


</body>
</html>