<?php
session_start();
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
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Mentor System</title>
</head>
<body>
<header class="text-gray-600 body-font shadow-md shadow-gray-500/40">  
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
        <a href="../index.php">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
        </svg>
        </a>
        <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center">
            <h1 href="" class="text-center text-indigo-600 hover:text-violet-500 hover:cursor-pointer font-bold text-2xl">Welcome back Mentor </h1>
        </nav>
    </div>
</header>
<section class="text-gray-600 body-font">
    <div class="container py-24 mx-auto">
        <div class="flex flex-col sm:flex-row sm:items-center items-start mx-auto justify-around">
            <section>
                <img src="../images/image 1-2.png" alt="" class="h-72 animate-[bounce_9s_ease-in-out_infinite]">
            </section>
            <form class="bg-gray-100 rounded-lg flex flex-col p-8 shadow-md shadow-gray-500/40" method="POST" action="mentor_check.php">
                <h2 class="text-gray-900 text-lg font-medium title-font mb-5 text-center">Login</h2>
                <?php include('../mentor/message.php')?>
                <div class=" mb-4 mt-6">
                    <label for="E-id" class="leading-7 text-sm text-gray-600">Enter Your ID</label>
                    <input type="text" id="e-id" name="mentor_id" class="w-full bg-white rounded border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" required>
                </div>
                <div class="mb-4">
                    <label for="pass" class="leading-7 text-sm text-gray-600">Enter Your Password</label>
                    <input type="password" id="pass" name="password" class="w-full bg-white rounded border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" required>
                   <!-- <center><a href="./resetpass/forget.php">Reset Password</a></center> -->
                </div>
                <button type="submit" name="login" class=" text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-700 rounded text-lg">Login</button>
            </form>
            </div>
        </div>
</section>


</body>
</html>

<!-- Color pallet 
        indigo-600 : primary
        violet-500 : secondary
        indigo-400
        trueGray-50
    -->