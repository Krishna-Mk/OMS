<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "oms1";
session_start();
$con = mysqli_connect ($servername, $username, $password, $dbname);
// include_once ('db.php');
$query = "SELECT  * from attendance_report";
$result = mysqli_query($con,$query);
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
        <div class="flex items-center justify-end gap-11 p-3 px-10">
            <div class="bg-violet-600 p-2 text-white flex gap-3 shadow-md shadow-violet-300 hover:bg-violet-800 cursor-pointer text-center items-center justify-between">
                <i class="bi bi-table"></i>
                <h1 class="text-base font-medium">Attendance Reports</h1>
            </div>
        </div>
        <div class="flex gap-11 px-10">
        <div class="w-full h-96 overflow-y-scroll scroll-smooth">
        <table id= 'tblstudent' class="w-full text-center text-gray-500">
        <thead class="text-xs text-gray-700 uppercase bg-gray-300 sticky top-0">
            <tr>
                <th scop="col" class="py-3 px-6">id</th>
                <th scop="col" class="py-3 px-6">name</th>
                <th scop="col" class="py-3 px-6">attendance</th>
                <th scop="col" class="py-3 px-6">absent</th>
                <th scop="col" class="py-3 px-6">Reports</th>
                <th scop="col" class="py-3 px-6">Edit Report</th>
            </tr>
        </thead>
        <tbody class="mt-4 overflow-y-auto text-base">
            <!-- PHP CODE TO FETCH DATA FROM ROWS -->
            <?php
            $n = 1;
                // LOOP TILL END OF DATA
                while( $rows=$result->fetch_assoc())
                {
                    $a=$rows['attendance'];
                    if($a<75){
                        
            ?>
            <tr class="bg-red-300 border-b border-2" >

                <?php } else {?>
                    <tr class="bg-white border-b border-2" >
                        
                    <?php }?>
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                    <th scope="row" class="py-4 px-6"><?php echo $n //$rows['id'];?></th>
                    <td><?php echo $rows['name'];?></td>
                <td><?php echo $rows['attendance'];?></td>
                <td><?php echo $rows['absent'];?></td>
                <td><?php echo "<a class='btn bg-green-400 p-2 hover:bg-green-600 text-white rounded-md' href='chart.php?id={$rows['id']}'>show report</a>"; ?></td>
                <td><?php echo "<a class='btn bg-green-400 p-2 hover:bg-green-600 text-white rounded-md' href='edit_report.php?id={$rows['id']}'>Edit</a>"; ?></td>
            </tr>
            <?php
                $n ++;}
            ?>
        </tbody>
        </table>
        </div>
        </div>
       
    </main>
</div>

<!-- Script js -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
    <script type="text/javascript">
        $("body").on("click", "#btnExport", function () {
            html2canvas($('#tblstudent')[0], {
                onrendered: function (canvas) {
                    var data = canvas.toDataURL();
                    var docDefinition = {
                        content: [{
                            image: data,
                            width: 500
                        }]
                    };
                    pdfMake.createPdf(docDefinition).download("Attendance.pdf");
                }
            });
        });
    </script>

<script>
document.getElementById("show-modal").addEventListener("click", function(){
  var xhr = new XMLHttpRequest();
  xhr.open("GET", "chart.php", true);
  xhr.onreadystatechange = function() {
    if (xhr.readyState === 4 && xhr.status === 200) {
      document.getElementById("modal-content").innerHTML = xhr.responseText;
      document.getElementById("modal").style.display = "flex";
    }
  };
  xhr.send();
});

document.getElementById("close-modal").addEventListener("click", function(){
  document.getElementById("modal").style.display = "none";
});
</script>

</body>
</html>
