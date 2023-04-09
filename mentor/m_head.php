<?php
$con = mysqli_connect("localhost","root","","oms1");
session_start();
if (!isset($_SESSION['mentor_id'])){
    header("location:student_log.php");
}
else{
    $username = $_SESSION['mentor_id'];
    $sql="SELECT * FROM `mentorlist` where mentor_id='".$username."'";
    $query = mysqli_query($con , $sql);
    $info = mysqli_fetch_assoc($query);
    }
// Important part need to be installed in all pages 
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./images/logo icon.png" type="image/x-icon">
    <!-- <link rel="stylesheet" href="output.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.1/moment.min.js"></script>
    <title>Mentor System</title>
</head>

<body>
    
    <div class="flex items-center justify-between p-2 px-10 shadow">
        <div>
            <h1 class="text-2xl font-semibold leading-relaxed text-gray-800"><?php echo $info['fullname']; ?></h1>
            <p class="text-sm font-medium text-gray-500">Welcome to Mentor Dashboard</p>
        </div>
        <div class="flex items-center gap-3">
            <h3 id="time"></h3>
            <a href="mentorprofile.php"> <img src="https://randomuser.me/api/portraits/lego/5.jpg" alt="" class="rounded-full w-11 hover:w-12 cursor-pointer transition duration-75 ease-in-out border border-violet-600 p-2"></a>
        </div>
    </div>


    <script>
      function realtime() {
  
  let time = moment().format('h:mm:ss a');
  document.getElementById('time').innerHTML = time;
  
  setInterval(() => {
    time = moment().format('h:mm:ss a');
    document.getElementById('time').innerHTML = time;
  }, 1000)
}

realtime();
    </script>
</body>