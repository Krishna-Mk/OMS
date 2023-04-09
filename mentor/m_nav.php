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
                <a href="../mentor/m_dashboard.php" class="hover:text-indigo-600 text-base group">
                    <span class="absolute w-1.5 h-8 bg-indigo-600 rounded-r-full left-0 scale-y-0 -translate-x-full group-hover:scale-y-100 group-hover:translate-x-0 ease-in-out duration-150">
                    </span><i class="bi bi-house mr-2"></i>
                     <span> Dashboard</span>
            </li>
            <li> 
                <!-- <a href="#" class="hover:text-indigo-600 text-base group m-btn">
                <span class="absolute w-1.5 h-8 bg-indigo-600 rounded-r-full left-0 scale-y-0 -translate-x-full group-hover:scale-y-100 group-hover:translate-x-0 ease-in-out duration-150">
                </span><i class="bi bi-people-fill mr-2"></i>
                <span> Mentors</span></a> -->
                <button class="bg-violet-800 rounded px-2 py-2 text-white"><span><i class="bi bi-people-fill mr-2 w-72"></i></span> Students</button>
                <ul class="ml-8 mt-4 space-y-3">
                    <li class="hover:bg-violet-500 hover:text-white px-2 py-1 rounded"><a href="./view_std.php" class="p-2">View Students</a></li>
                    <li class="hover:bg-violet-500 hover:text-white px-2 py-1 rounded"><a href="./create_meet.php" class="p-2">Create a meeting</a></li>
                    <li class="hover:bg-violet-500 hover:text-white px-2 py-1 rounded"><a href="./form.php" class="p-2"> Manage Attendance</a></li>
                    <li class="hover:bg-violet-500 hover:text-white px-2 py-1 rounded"><a href="./leave_req.php" class="p-2">Leave Requests</a></li>
                </ul>
            </li>
            <li> 
                <button class="bg-violet-800 rounded px-2 py-2 text-white" id="menu-btn"> <span><i class="bi bi-file-earmark-arrow-down mr-2"></i></span> Reports <span class="bi bi-chevron-double-down pl-3"></span></button>
                <div class="bg-white shadow-md border border-violet-600 space-y-3 text-black flex-col rounded mt-1 p-2 m-5 hidden  w-48 ease-in-out duration-150" id="dropdown">
                    <a href="./pdf.php" class="px-2 py-1 hover:bg-violet-500 hover:text-white rounded">Attendance Reports</a>
                    <a href="./std_mentroing.php" class="px-2 py-1 hover:bg-violet-500 hover:text-white rounded">Students Mentoring Reports</a>
                    <a href="./fees_rep.php" class="px-2 py-1 hover:bg-violet-500 hover:text-white rounded">Fees Reports</a> 
                    <a href="./doc_report.php" class="px-2 py-1 hover:bg-violet-500 hover:text-white rounded">Document Reports</a>
                </div>
            </li>
            <li>
                <a href="../mentor/chat_app/Group_chat.php" class="hover:text-indigo-600 text-base group"><span class="absolute w-1.5 h-8 bg-indigo-600 rounded-r-full left-0 scale-y-0 -translate-x-full group-hover:scale-y-100 group-hover:translate-x-0 ease-in-out duration-150"></span><i class="bi bi-chat-dots mr-2"></i> <span> Chat</span></a>
            </li>
            <li>
                <a href="./logout.php" class="hover:text-indigo-600 text-base group"><span class="absolute w-1.5 h-8 bg-indigo-600 rounded-r-full left-0 scale-y-0 -translate-x-full group-hover:scale-y-100 group-hover:translate-x-0 ease-in-out duration-150"></span><i class="bi bi-box-arrow-right mr-2"></i> <span> Logout</span></a>
            </li>
        </ul>
    </aside>
<!-- component -->

<script>
    window.addEventListener('DOMContentLoaded',() => {
        const menuBtn = document.querySelector('#menu-btn')
        const dropdown = document.querySelector('#dropdown')
        
        menuBtn.addEventListener('click',() => {
            // if(dropdown.classList.contains
            // ('hidden')){
            //     dropdown.classList.remove
            //     ('hidden');
            //     dropdown.classList.add('flex');
            // }else{
            //     dropdown.classList.remove('flex')
            //     dropdown.classList.add('hidden')
            // }
            dropdown.classList.toggle('hidden')
            dropdown.classList.toggle('flex')
        })
    });
</script>
</body>
</html>

<!-- Color pallet 
        indigo-600 : primary
        violet-500 : secondary
        indigo-400
        trueGray-50
    -->