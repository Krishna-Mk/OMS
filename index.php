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
    <!-- header for home page -->
<header class="text-gray-600 body-font shadow-md shadow-gray-500/40">  
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
        <a href="#">
            <img src="./images/logo.png" alt="logo" class="h-12">
        </a>
        <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center">
            <h1 href="" class="text-center text-indigo-600 hover:text-violet-500 hover:cursor-pointer font-bold text-2xl">Welcome to Mentor System</h1>
        </nav>
    </div>
</header>

<!-- hero section -->
<section class="text-gray-600 body-font">
    <div class="container py-24 mx-auto">
        <div class="flex flex-col sm:flex-row sm:items-center items-start mx-auto justify-around">
            <section>
                <img src="./images/image 1-5.png" alt="" class="h-96 animate-[bounce_9s_ease-in-out_infinite]">
            </section>
            <div class="bg-gray-100 rounded-lg flex flex-col p-8 shadow-md shadow-gray-500/40">
            <section class="flex flex-col gap-1">
                <a href="./admin/admin_log.php"><button class="flex-shrink-0 text-white bg-red-500 border-0 py-2 px-14 focus:outline-none hover:bg-red-400 rounded-xl text-lg mt-10"> Admin Login</button></a>
                <a href="./mentor/mentor_log.php"><button class="flex-shrink-0 text-white bg-sky-600 border-0 py-2 px-14 focus:outline-none hover:bg-sky-500 rounded-xl text-lg mt-10"> Mentor Login</button></a>
                <a href="./student/student_log.php"><button class="flex-shrink-0 text-white bg-violet-600 border-0 py-2 px-14 focus:outline-none hover:bg-violet-500 rounded-xl text-lg mt-10"> Student Login</button></a>
            </section>
            </div>
            </div>
        </div>
</section>

<!-- Call pages -->

</body>
</html>

<!-- Color pallet 
        indigo-600 : primary
        violet-500 : secondary
        indigo-400
        trueGray-50
    -->