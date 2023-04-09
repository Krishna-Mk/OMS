<?php
session_start();
if (!isset($_SESSION['mentor_id'])) {
    header("location:student_log.php");
} else {
    $username = $_SESSION['mentor_id'];
}
// Important part need to be installed in all pages 
?>
<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "oms1";

$conn = mysqli_connect($host, $user, $password, $db);
$mentorid1 = $username;
$sql = "SELECT * from mentorlist WHERE mentor_id='$mentorid1'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
if (isset($_POST['update'])) {
    if ($row['password'] == $_POST['old_password']) {
        $newpassword = $_POST['new_password'];
        $sql2 = "UPDATE mentorlist set password = '$newpassword' WHERE mentor_id = '$mentorid1'";
        $result2 = mysqli_query($conn, $sql2);
        echo "<script>alert('Password Updated') </script>";
    } else {
        echo "<script>alert('wrong password') </script>";
    }
}
?>
<html>

<body>
    <!--  <form method="post" action="#">
        Old password:
        <input type="text"  name="old_password" ><br><br>
        New password :
        <input type="text" name="new_password"> <br> <br>
        <input type="submit" name="update">
    </form> -->
    <div class="w-full min-h-screen font-sans text-gray-900 bg-gray-50 flex">
        <?php
        @include 'm_nav.php';
        ?>
        <main class="flex-1">
            <!-- head -->
            <?php
            @include 'm_head.php';
            ?>
            <div class="flex p-2 mt-5 justify-center py-2 px-4 sm:px-6 lg:px-8">
                <div class="w-full max-w-md space-y-8 p-3 shadow-lg shadow-gray-400 rounded-md">
                    <div>
                        <img class="mx-auto h-16 w-auto" src="../images/logo.png" alt="Your Company">
                        <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900">Forgot your password?</h2>
                        <p class="mt-2 text-center text-sm text-gray-600">
                            Or
                            <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">Connect with your Admin</a>
                        </p>
                    </div>
                    <form class="mt-8 space-y-6" method="post" action="#">
                        <input type="hidden" name="remember" value="true">
                        <div class="-space-y-px rounded-md shadow-sm">
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                                    Old Paasword
                                </label>
                                <input type="text"  name="old_password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Username">
                            </div>

                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                                    New Password
                                </label>
                                <input type="text" name="new_password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Username">
                            </div>

                            <div class="mt-5" style="margin-top: 20;">
                                <button type="submit" name="update" class="group relative flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                                    <svg class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M10 1a4.5 4.5 0 00-4.5 4.5V9H5a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2h-.5V5.5A4.5 4.5 0 0010 1zm3 8V5.5a3 3 0 10-6 0V9h6z" clip-rule="evenodd" />
                                    </svg>
                                </span>
                                Forgot Password
                                </button>
                            </div>
                    </form>
                </div>
            </div>

</html>