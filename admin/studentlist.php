<?php
error_reporting(0);
include 'connect.php';

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
    @include 'a_nav.php';
    ?>
    <main class="flex-1">
        <!-- head -->
        <?php
        @include 'head.php';
        ?>
        <!-- Mentor form -->
        <!-- <div class="flex items-center gap-11 p-2 px-10">
            <form action="" class="flex items-center gap-11 p-3 px-10">
                <div class="">
                    <select name="" id="" class="p-2 rounded-lg border-violet-500 border cursor-pointer">
                    <Option selected>Course</Option>
                    <option value="BCA">BCA</option>
                    <option value="IMCA">IMCA</option>
                    <option value="Bsc.IT">Bsc.IT</option>
                    </select>
                </div>
                <div class="">
                    <select name="" id="" class="p-2 rounded-lg border-violet-500 border cursor-pointer">
                    <Option selected>Semester</Option>
                    <option value="1">sem 1</option>
                    <option value="2">sem 2</option>
                    <option value="3">sem 3</option>
                    <option value="4">sem 4</option>
                    <option value="5">sem 5</option>
                    <option value="6">sem 6</option>
                    <option value="7">sem 7</option>
                    <option value="8">sem 8</option>
                    </select>
                </div>
                <div class="">
                    <select name="" id="" class="p-2 rounded-lg border-violet-500 border cursor-pointer">
                    <Option selected>Mentor</Option>
                    <option value="ment">Nishil</option>
                    <option value="ment">Keyur</option>
                    <option value="ment">Krishana</option>
                    <option value="ment">Sagar</option>
                    </select>
                </div>
                <div class="flex gap-3">
                <div class="flex gap-2 bg-violet-500 text-white p-2 rounded-lg">
                    <i class="bi bi-funnel"></i>
                    <button type="submit">Apply</button>
                </div>
                </form>
            </div>
        </div>     -->
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

        <!-- Manage mentor -->
        <div class="flex items-center justify-between p-5 px-10 shadow">
            <div class="w-full h-96 overflow-y-scroll scroll-smooth">
                <table id="myTable" class="w-full text-sm text-center text-gray-500 cursor-pointer">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-300 sticky top-0">
                            <tr class="">
                                <!-- <th scop="col" class="py-3 px-6">Profile</th> -->
                                <th scop="col" class="py-3 px-6">Sr no.</th>
                                <th scop="col" class="py-3 px-6">Name</th>
                                <th scop="col" class="py-3 px-6">Enrollment</th>
                                <th scop="col" class="py-3 px-6">Department</th>
                                <th scop="col" class="py-3 px-6">Course</th>
                                <th scop="col" class="py-3 px-6">Mentor</th>
                                <th scop="col" class="py-3 px-6">Semester</th>
                            </tr>
                        </thead>
                        <tbody class="text-base mt-4 overflow-y-auto h-auto">
                            
                        <?php
                            // $n = 1;
                            // $sql="Select * from `studentlist`";
                            // $result=mysqli_query($con,$sql);
                            // if($result){
                            //     while($row=mysqli_fetch_assoc($result)){
                            //         $id=$row['id'];
                            //         $fullname=$row['firstName'];
                            //         $lastname=$row['lastName'];
                            //         $enrol=$row['enrollment_no'];
                            //         $course=$row['course'];
                            //         $mentor_id=$row['mentor_id'];
                            //         $sem=$row['sem'];

                            //         echo '<tr class="bg-white border-b" >
                            //         <th scope="row" class="py-4 px-6" >'.$n.'</th>
                            //         <td>'.$fullname.' '.$lastname.'</td>
                            //         <td>'.$enrol.'</td>
                            //         <td>'.$course.'</td>
                            //         <td>'.$mentor_id.'</td> 
                            //         <td>'.$sem.'</td>   
                            //         <td class="py-4 px-6"><h3 class="px-4 py-1 text-sm text-center text-white bg-blue-500 rounded-full hover:bg-blue-700 hover:text-white"><a href="mentor_profile.php?viewid='.$id.'">View</a></h3></td>
                            //         <td class="py-4 px-6"><h3 class="px-4 py-1 text-sm text-center text-white bg-green-500 rounded-full hover:bg-green-700 hover:text-white"><a href="update.php?updateid='.$id.'">Edit</a></h3></td>
                            //         <td class="py-4 px-6"><h3 class="px-4 py-1 text-sm text-center text-white bg-red-500 rounded-full hover:bg-red-700 hover:text-white"><a href="delete.php?deleteid='.$id.'">Delete</a></h3></td>
                            //         </tr>';

                            //     $n ++;}
                            // }
                        ?>

                        <?php
                            $searchInput = $_POST['search-input'];

                            // Retrieve the data from the database based on the search input
                            $n = 1;
                            $sql = "SELECT * FROM studentlist WHERE enrollment_no LIKE '%$searchInput%'";
                            $result = mysqli_query($con, $sql);

                            // Display the retrieved data
                            while ($row = mysqli_fetch_assoc($result)) {

                                echo '<tr class="bg-white border-b result">
                                <th scope="row" class="py-4 px-6" >' . $n . '</th>
                                <td>' . $row['firstName'] . $row['lastName'] .'</td>
                                <td>' . $row['enrollment_no'] . '</td>
                                <td>' . $row['institute'] . '</td>
                                <td>' . $row['course'] . '</td> 
                                <td>'?> <?php if(empty($row['mentor_id'])){
                                    echo 'Pending';
                                } else {
                                    $m = $row ['mentor_id'];
                                    $sql2 = " SELECT * FROM mentorlist WHERE id = $m";
                                    $result2 = mysqli_query($con , $sql2);
                                    $info = mysqli_fetch_assoc($result2);
                                    echo $info['fullname'];
                                } ?><?php echo '</td>
                                <td>' . $row['sem'];
                                $n++;
                            }

                            // Close the database connection
                            mysqli_close($con);
                        ?>

                          

                        </tbody>
                    </table>
                </div>
            </div>
    </main>
</div>
<!-- component -->
<script>
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
    </script>


</body>
</html>

<!-- Color pallet 
        indigo-600 : primary
        violet-500 : secondary
        indigo-400
        trueGray-50
    -->