<?php
error_reporting(0);
/* Database connection start */
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "oms1";
$con = mysqli_connect($servername, $username, $password, $dbname);
$name = $_POST['name'];
$attendance = $_POST['attendance'];
$absent = $_POST['absent'];
$query = "INSERT  INTO attendance_report (name , attendance , absent) VALUES ('$name','$attendance','$absent')";
$result = mysqli_query($con, $query);
if ($result) {
    // // echo "<script type=text/javascript>alert('Attendance updated Sucessfully')</script>";
    // echo '<div id="toast-msg" class="fixed top-20 right-6 px-4 py-2 m-2 rounded-lg bg-green-500 text-white animate-pulse duration-75">Attendance updated successfully</div>';
    $success = "Attendance updated <p>You will be redirected in <span id='counter'>5</span> second(s).</p>
                                                        <script type='text/javascript'>
                                                        function countdown() {
                                                            var i = document.getElementById('counter');
                                                            if (parseInt(i.innerHTML)<=0) {
                                                                location.href = 'form.php';
                                                            }
                                                            i.innerHTML = parseInt(i.innerHTML)-1;
                                                        }
                                                        setInterval(function(){ countdown(); },100);
                                                        </script>";
    echo $success;                                                    
    // echo '<script> alert($success)</script>';
    header("refresh:5;url=form.php");
} else {
    echo '<div id="error-msg" class="fixed top-20 right-6 px-4 py-2 m-2 rounded-lg bg-red-500 text-white">attendance updated</div>';
}
?>

<script>
    var sucessmsg = document.getElementById("toast-msg");
    var errormsg = document.getElementById("error-msg");
    if (sucessmsg) {
        setTimeout(function() {
            sucessmsg.style.display = "none"
        }, 3000);
    }
    if (errormsg) {
        setTimeout(function() {
            errormsg.style.display = "none"
        }, 3000);
    }
</script>