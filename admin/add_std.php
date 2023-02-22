<!DOCTYPE html>
<html lang="en">

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
    @include 'a_nav.php';
    ?>
    <main class="flex-1">
        <!-- head -->
        <?php
        @include 'head.php';
        ?>
        <!-- Mentor form -->
        <div class="flex items-center justify-end gap-11 p-3 px-10">
            <div class="bg-violet-600 p-2 text-white flex gap-3 shadow-md shadow-violet-300 hover:bg-violet-800 cursor-pointer text-center justify-between">
                <i class="bi bi-person-fill"></i>
                <h1 class="text-base font-medium">Add Students</h1>
            </div>
        </div>
        <div class="flex items-center justify-center p-7 mx-10 rounded-lg shadow-lg bg-white max-w-md">
            <form action="" method="post">
                <div class="grid grid-cols-2 gap-4">
                    <div class="form-group mb-6">
                        <input type="text" name="fname" id="" class="block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="First Name" required>
                    </div>
                    <div class="form-group mb-6">
                        <input type="text" name="lname" id="" class="block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Last Name" required>
                    </div>
                </div>
                <div class="form-group mb-6">
                    <input type="email" name="email" id="" class="block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="abc@gmail.com" required>
                </div>
                <div class="form-group mb-6">
                    <input type="number" name="enroll" id="" class="block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Enrollment" required>
                </div>
                <div class="form-group mb-6">
                    <input type="text" name="depart" id="" class="block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Department" required>
                </div>
                <!-- <div class="form-group mb-6 flex">
                    <label for="photo" class="p-2"> Photo</label>
                    <input type="file" name="photo" id="" class="block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Photo" required>
                </div> -->
                <div class="form-group mb-6 bg-violet-600 text-white shadow-md shadow-gray-600 rounded-lg hover:bg-violet-800">
                    <input type="submit" name="submit" id="" class="block w-full px-3 py-1.5 text-base font-normal text-white border border-none rounded transition ease-in-out m-0 cursor-pointer">
                </div>
            </form>
        </div>
    </main>
</div>
<!-- component -->

</body>
</html>

<!-- Color pallet 
        indigo-600 : primary
        violet-500 : secondary
        indigo-400
        trueGray-50
    -->