<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "oms1";
$con = mysqli_connect ($servername, $username, $password, $dbname); 
// include_once ('db.php');
$id = $_GET['id'];
$query = "SELECT  * from attendance_report where id = $id";
$result = mysqli_query($con,$query);
$chart = mysqli_fetch_assoc($result);
$name = $chart['name'];
// $name = ['name'];
$attendance=$chart['attendance'];
$absent=$chart['absent'];     
?>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./images/logo icon.png" type="image/x-icon">
    <!-- <link rel="stylesheet" href="output.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.0/jspdf.umd.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Mentor System</title>
  </head>
  <body>
  <div class="w-full min-h-screen font-sans text-gray-900 bg-gray-50 flex">
    <?php
    @include 'm_nav.php';
    ?>
    <main class="flex-1">
        <!-- head -->
        <?php
        @include 'm_head.php';
        ?>
        <div class="flex items-center justify-center p-3 px-10">
            <a href="" class="bg-violet-700 text-white p-2 rounded-md shadow-md hover:bg-violet-600"><i class="bi bi-pie-chart mr-2"></i> <?php echo $name ?></a>
          </div>
          <section class="pie-chart">
  <div class="flex items-center justify-center gap-11 p-3 px-10">
    <div class="chart" style="padding: 15px">
      <canvas id="pie-chart" width="500" height="500"></canvas>
    </div>
  </div>
</section>
        </div>
    </main>
  </div>
  </body>
</html>
<script>
  const pieElement = document.getElementById('pie-chart').getContext('2d');

const pieChart = new Chart(pieElement, {
  type: 'pie',
  data: {
    labels: ['absent', 'present'],
    datasets: [{
      data: [ <?php echo $absent; ?>, <?php echo $attendance; ?>],
      backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(54, 162, 235, 0.2)'
      ],
      borderColor: [
        'rgba(255, 99, 132, 1)',
        'rgba(54, 162, 235, 1)'
      ],
      borderWidth: 1
    }]
  },
  options: {
    responsive: false
  },
});

</script>