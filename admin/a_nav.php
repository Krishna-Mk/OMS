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
    <aside class="py-6 px-4 border-r w-64 h-screen border-gray-200">
        <img src="../images/logo.png" alt="" class="w-36">
        <div class="mt-2">
            <hr class="border-spacing-0 border-gray-600">
        </div>
        <ul class="flex flex-col gap-y-4 pt-5">
            <li>
                <a href="../admin/a_dashboard.php" class="hover:text-indigo-600 text-base group">
                    <span class="absolute w-1.5 h-8 bg-indigo-600 rounded-r-full left-0 scale-y-0 -translate-x-full group-hover:scale-y-100 group-hover:translate-x-0 ease-in-out duration-150">
                    </span><i class="bi bi-house mr-2"></i>
                     <span> Dashboard</span>
            </li>
            <li> 
                <!-- <a href="#" class="hover:text-indigo-600 text-base group m-btn">
                <span class="absolute w-1.5 h-8 bg-indigo-600 rounded-r-full left-0 scale-y-0 -translate-x-full group-hover:scale-y-100 group-hover:translate-x-0 ease-in-out duration-150">
                </span><i class="bi bi-people-fill mr-2"></i>
                <span> Mentors</span></a> -->
                <button class="bg-violet-800 rounded px-2 py-2 text-white"><span><i class="bi bi-people-fill mr-2 w-72"></i></span> Mentors</button>
                <ul class="ml-8 mt-4 space-y-3">
                    <li class="hover:bg-violet-500 hover:text-white"><a href="../admin/add_mentor.php" class="p-2">Add Mentor</a></li>
                    <li class="hover:bg-violet-500 hover:text-white"><a href="../admin/view_ment.php" class="p-2">View Mentor</a></li>
                    <li class="hover:bg-violet-500 hover:text-white"><a href="../admin/manage_ment.php" class="p-2">Manage mentor</a></li>
                    <li class="hover:bg-violet-500 hover:text-white"><a href="../admin/assign_ment.php"class="p-2">Assign Mentor</a></li>
                    <li class="hover:bg-violet-500 hover:text-white"><a href="../admin/studentlist.php"class="p-2">Students List</a></li>
                </ul>
            </li>
            <li> 
                <!-- <a href="#" class="hover:text-indigo-600 text-base group s-btn">
                <span class="absolute w-1.5 h-8 bg-indigo-600 rounded-r-full left-0 scale-y-0 -translate-x-full group-hover:scale-y-100 group-hover:translate-x-0 ease-in-out duration-150">
                </span><i class="bi bi-person-fill mr-2"></i>
                <span> Students</span></a>  -->
                
                <button class="bg-violet-800 rounded px-2 py-2 text-white"><span><i class="bi bi-people-fill mr-2 w-72"></i></span> Students</button>
                <ul class="ml-8 mt-4 space-y-3">
                    <li class="hover:bg-violet-500 hover:text-white"><a href="../admin/add_std.php"class="p-2">Add Students</a></li>
                    <li class="hover:bg-violet-500 hover:text-white"><a href="../admin/manage_std.php"class="p-2">Manage Students</a></li>
                    <li class="hover:bg-violet-500 hover:text-white"><a href="../admin/view_student.php"class="p-2">View Students</a></li>
                </ul>
            </li>
            <li>
                <button class="bg-violet-800 rounded px-2 py-2 text-white"><span><i class="bi bi-file-earmark-arrow-down mr-2"></i></span> Report </button>
                <ul class="ml-8 mt-4 space-y-3">
                    <li class="hover:bg-violet-500 hover:text-white"><a href="../admin/mentoring_report.php"class="p-2">Mentoring History</a></li>
                </ul>
            </li>
            

            <li>
                <a href="./accounce.php" class="hover:text-indigo-600 text-base group"><span class="absolute w-1.5 h-8 bg-indigo-600 rounded-r-full left-0 scale-y-0 -translate-x-full group-hover:scale-y-100 group-hover:translate-x-0 ease-in-out duration-150"></span><i class="bi bi-megaphone mr-2"></i> <span> Announcements</span></a>
            </li>

            <li>
                <a href="./logout.php" class="hover:text-indigo-600 text-base group"><span class="absolute w-1.5 h-8 bg-indigo-600 rounded-r-full left-0 scale-y-0 -translate-x-full group-hover:scale-y-100 group-hover:translate-x-0 ease-in-out duration-150"></span><i class="bi bi-box-arrow-right mr-2"></i> <span> Logout</span></a>
            </li>
        </ul>
    </aside>
<!-- component -->
</body>
</html>

<!-- Color pallet 
        indigo-600 : primary
        violet-500 : secondary
        indigo-400
        trueGray-50
    -->