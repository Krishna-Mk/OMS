<?php
session_start();
if (!isset($_SESSION['enrolment'])){      //check if user is logged in
    $username = $_SESSION['enrolment'];
}
elseif($_SESSION['usertype']='admin'){   // checks if user is admin,mentor or student 
    header("location:admin_log.php");  //if its admin he/she cannot go to other user's dashboard
}
elseif($_SESSION['usertype']='mentor'){    // if its mentor he/she cannot go to other user's dashboard
    header("location:admin_log.php");
}
elseif($_SESSION['usertype']='student'){   // if its sudent he/she cannot go to other user's dashboard
    $username = $_SESSION['enrolment'];
 }  
else{
    // header("location:student_log.php");
    $username = $_SESSION['enrolment'];
    $con2 = mysqli_connect('localhost','root','','oms1');
    $query2 = "SELECT * FROM studentlist WHERE enrollment_no=$username";
    $result2 = mysqli_query($con2,$query2);
    $row = mysqli_fetch_assoc($result2);
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.1/moment.min.js"></script>
    <title>Mentor System</title>
</head>

<body>
    
    <div class="flex items-center justify-between p-2 px-10 shadow">
        <div>
            <h1 class="text-2xl font-semibold leading-relaxed text-gray-800"><?php echo $row['firstName'] ;?><?php echo "\n"?><?php echo $row['lastName'] ;?></h1>
            <p class="text-sm font-medium text-gray-500">Welcome to Student Dashboard</p>
        </div>
        <div class="flex items-center gap-3">
            <h3 id="time"></h3>
           <a href="student_profile.php"><img src="https://randomuser.me/api/portraits/lego/5.jpg" alt="" class="rounded-full w-11 hover:w-12 cursor-pointer transition duration-75 ease-in-out border border-violet-600 p-2"></a> 
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