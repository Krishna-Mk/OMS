<?php

include 'connect.php';
error_reporting(0);
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
            <div class="flex items-center justify-end gap-11 p-3 px-10">
                <!-- <form method="post" class="bg-violet-500 rounded-md">
                <input type="text" id="search-input"  name="search-input" placeholder="search" autocomplete="off" class="p-2 border-2 form-control">
                <button type="submit"><i class="bi bi-search  text-white p-2 cursor-pointer"></i></button>
            </form> -->
                <form method="post" class="bg-violet-500 rounded-md">
                    <input type="text" id="search-input" onkeyup="myFunction()" name="search-input" placeholder="search" class="p-2 border-2 form-control" autocomplete="off">
                    <button type="submit" class="btn btn-primary"><i class="bi bi-search  text-white p-2 cursor-pointer"></i></button>
                </form>
                <div class="bg-violet-600 p-2 text-white flex gap-3 shadow-md shadow-violet-300 hover:bg-violet-800 cursor-pointer text-center justify-between">
                    <i class="bi bi-person-fill"></i>
                    <h1 class="text-base font-medium">View Students</h1>
                </div>
            </div>

            <!-- Manage mentor -->
            <div class="flex items-center justify-between p-5 px-10 shadow">
                <div class="w-full h-96 overflow-y-scroll scroll-smooth">
                    <table id="myTable" class="w-full text-sm text-center cursor-pointer">
                        <thead class="text-base uppercase bg-gray-300 sticky top-0">
                            <tr class="">
                                <th scop="col" class="py-3 px-6">id</th>
                                <th scop="col" class="py-3 px-6">First Name</th>
                                <th scop="col" class="py-3 px-6">Last Name</th>
                                <th scop="col" class="py-3 px-6">Enrolment</th>
                                <th scop="col" class="py-3 px-6">Course</th>
                                <th scop="col" class="py-3 px-6">Sem</th>
                                <th scop="col" class="py-3 px-6">Email</th>
                            </tr>
                        </thead>
                        <tbody class="text-base mt-4 overflow-y-auto h-auto">

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
                                <td>' . $row['firstName'] . '</td>
                                <td>' . $row['lastName'] . '</td>
                                <td>' . $row['enrollment_no'] . '</td>
                                <td>' . $row['course'] . '</td> 
                                <td>' . $row['sem'] .'</td>
                                <td>' . $row['email'] . '</td> 
                                </tr>';
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