<?php
$con = mysqli_connect("localhost", "root", "", "oms1");
$s = mysqli_query($con, "select * from mentorlist");
session_start();
?>
<?php
if (isset($_SESSION['status'])) {
    echo "<h4>" . $_SESSION['status'] . "</h4>";
    unset($_SESSION['status']);
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
        @include 'a_nav.php';
        ?>
        <main class="flex-1">
            <!-- head -->
            <?php
            @include 'head.php';
            ?>
            <div class="items-center p-2">
                <form action="assign.php" method="POST" class="items-center p-2">
                    <label for="" class="bg-violet-600 text-white p-2 mr-2 rounded-md text-base"> Select mentor : </label>
                    <select name="mentor" class="p-2 rounded-lg border-violet-500 border cursor-pointer">
                        <?php
                        while ($r = mysqli_fetch_array($s)) {
                        ?>
                            <option class="hover:bg-violet-600 hover:text-white" value="<?php echo $r['id']; ?> "><?php echo $r['fullname']; ?></option>
                        <?php
                        }
                        ?>
                    </select>
            </div>
            <div class="flex justify-between p-2">
                <label id="list" for="" class="bg-violet-600 text-white p-2 mr-2 rounded-md text-base"> Select Students : </label>
            </div>

            <div class="flex items-center justify-between p-5 px-10 shadow">
                <div class="w-full h-72 overflow-y-scroll scroll-smooth">
                    <table class="w-full text-base text-center cursor-pointer">
                        <thead class="text-black uppercase bg-gray-300 sticky top-0">
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
                            $con = mysqli_connect("localhost", "root", "", "oms1");

                            $squery = "select * from studentlist";
                            $query_run = mysqli_query($con, $squery);

                            if (mysqli_num_rows($query_run) > 0) {
                                foreach ($query_run as $s) {
                            ?>
                                    <tr class="bg-white border-b result">
                                        <td><input class="w-4 h-4 text-purple-600 bg-gray-100 border-gray-300 rounded-xl focus:ring-purple-500 dark:focus:ring-purple-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" type="checkbox" name="assignlist[]" value="<?= $s['id']; ?>" /></td>
                                        <td><?php echo $n++ ?></td>
                                        <td><?php echo $s['firstName'] . ' ' . $s['lastName'] ?></td>
                                        <td><?php echo $s['enrollment_no'] ?></td>
                                        <td><?php echo $s['institute'] ?></td>
                                        <td><?php echo $s['course'] ?></td>
                                        <td><?php echo $s['email'] ?></td>
                                    </tr>
                            <?php
                                }
                            } else {
                                echo "No record found";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
                <div class="flex mt-3 px-3 justify-center">
                <button name="submit" class="bg-green-600 p-2 text-white flex gap-3 shadow-md shadow-violet-300 hover:bg-green-800 cursor-pointer text-center "> Assign Mentor </button>
                </div>
                </form>
            </div>
    </div>
</body>


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