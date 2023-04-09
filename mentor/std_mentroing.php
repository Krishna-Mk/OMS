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
 <div class="w-full min-h-screen font-sans text-gray-900 bg-gray-50 flex">
    <?php
    @include 'm_nav.php';
    ?>
    <main class="flex-1">
        <table id="tblstudent" class="w-full">
        <div class="border-2 border-black m-2" id="tblstudent">
        <form method="post" class="" class="">
        <div class="flex justify-between gap-7 p-2 px-10">
                <div>
                    <img src="../images/logo.png" alt="" class="w-48">
                </div>
                <div class="items-center text-end gap-3">
                    <a href="">PARUL UNIVERSITY</a>
                    <P>WAGHODIA, VADODARA</P>
                    <P>MENTOR'S OBSERVATION: STUDENT MENTORING</P>
                </div>
            </div>
            <hr class="border-black p-2">
            <!-- Form start -->
            <div class="flex p-2 gap-5 text-center justify-center">
                <div>
                    <label for="name">Enrollment No</label>
                    <input type="text" class="border-black border">
                </div>
                <div>
                    <label for="m_name">Name of Mentee</label>
                    <input type="text" class="border-black border">
                </div>
                <div>
                    <label for="Institute">Institute</label>
                    <input type="text" class="border-black border">
                </div>
                <div>
                    <label for="Course">Course</label>
                    <input type="text" class="border-black border">
                </div>
                <div>
                    <label for="mentor">Name of the Mentor</label>
                    <input type="text" class="border-black border">
                </div>
            </div>
            <!-- Date of mentoring -->
            <div class="flex p-2 gap-5 text-center justify-center mt-2">
                <div>
                    <label for="DOM">Date of Mentoring :</label>
                </div>
                <div>
                    <label for="DOM" class="border-black p-2">M1 -</label>
                    <input type="Date" class="border-black border">
                </div>
                <div>
                    <label for="DOM" class="border-black p-2">M2 -</label>
                    <input type="Date" class="border-black border">
                </div>
                <div>
                    <label for="DOM" class="border-black p-2">M3 -</label>
                    <input type="Date" class="border-black border">
                </div>
                <div>
                    <label for="DOM" class="border-black p-2">M4 -</label>
                    <input type="Date" class="border-black border">
                </div>
            </div>

            <!-- Form start  -->
            <hr class="border-black p-2">
            <div class="justify-center text-center bg-gray-500 text-white">
            <h2>Academic Category of student (A - Advance Learner, B - mediocre Learner, C - Slow Learner)</h2>
            </div>
            <div class="flex p-2 gap-20 text-center justify-center">
                <div>
                    <label for="M1">M1</label>
                    <input type="text" class="border-black border">
                </div>
                <div>
                    <label for="M2">M2</label>
                    <input type="text" class="border-black border">
                </div>
                <div>
                    <label for="M3">M3</label>
                    <input type="text" class="border-black border">
                </div>
                <div>
                    <label for="M4">M4</label>
                    <input type="text" class="border-black border">
                </div>
            </div>
            <!-- Form End -->

            <!-- Form start  -->
            <hr class="border-black p-2">
            <div class="justify-center text-center bg-gray-500 text-white">
            <h2>Personality Attributes (Discipline,Attitude,Morality,Enthusiasm etc..)</th>
                     </tr></h2>
            </div>
            <div class="flex p-2 gap-20 text-center justify-center">
                <div>
                    <label for="M1">M1</label>
                    <input type="text" class="border-black border">
                </div>
                <div>
                    <label for="M2">M2</label>
                    <input type="text" class="border-black border">
                </div>
                <div>
                    <label for="M3">M3</label>
                    <input type="text" class="border-black border">
                </div>
                <div>
                    <label for="M4">M4</label>
                    <input type="text" class="border-black border">
                </div>
            </div>
            <!-- Form End -->

            <!-- Form start  -->
            <hr class="border-black p-2">
            <div class="justify-center text-center bg-gray-500 text-white">
            <h2>Students Grievances (Psychological,Academic, Individual, Physical etc...)</h2>
            </div>
            <div class="flex p-2 gap-20 text-center justify-center">
                <div>
                    <label for="M1">M1</label>
                    <input type="text" class="border-black border">
                </div>
                <div>
                    <label for="M2">M2</label>
                    <input type="text" class="border-black border">
                </div>
                <div>
                    <label for="M3">M3</label>
                    <input type="text" class="border-black border">
                </div>
                <div>
                    <label for="M4">M4</label>
                    <input type="text" class="border-black border">
                </div>
            </div>
            <!-- Form End -->

            <!-- Form start  -->
            <hr class="border-black p-2">
            <div class="justify-center text-center bg-gray-500 text-white">
            <h2>Interest in Co-curricular / Extra-curricular activities</h2>
            </div>
            <div class="flex p-2 gap-20 text-center justify-center">
                <div>
                    <label for="M1">M1</label>
                    <input type="text" class="border-black border">
                </div>
                <div>
                    <label for="M2">M2</label>
                    <input type="text" class="border-black border">
                </div>
                <div>
                    <label for="M3">M3</label>
                    <input type="text" class="border-black border">
                </div>
                <div>
                    <label for="M4">M4</label>
                    <input type="text" class="border-black border">
                </div>
            </div>
            <!-- Form End -->

            <!-- Form start  -->
            <hr class="border-black p-2">
            <div class="justify-center text-center bg-gray-500 text-white">
            <h2>Attendance</h2>
            </div>
            <div class="flex p-2 gap-20 text-center justify-center">
                <div>
                    <label for="M1">M1</label>
                    <input type="text" class="border-black border">
                </div>
                <div>
                    <label for="M2">M2</label>
                    <input type="text" class="border-black border">
                </div>
                <div>
                    <label for="M3">M3</label>
                    <input type="text" class="border-black border">
                </div>
                <div>
                    <label for="M4">M4</label>
                    <input type="text" class="border-black border">
                </div>
            </div>
            <!-- Form End -->

            <!-- Form start  -->
            <hr class="border-black p-2">
            <div class="justify-center text-center bg-gray-500 text-white">
            <h2>Difficulties in Subjects</h2>
            </div>
            <div class="flex p-2 gap-20 text-center justify-center">
                <div>
                    <label for="M1">M1</label>
                    <input type="text" class="border-black border">
                </div>
                <div>
                    <label for="M2">M2</label>
                    <input type="text" class="border-black border">
                </div>
                <div>
                    <label for="M3">M3</label>
                    <input type="text" class="border-black border">
                </div>
                <div>
                    <label for="M4">M4</label>
                    <input type="text" class="border-black border">
                </div>
            </div>
            <!-- Form End -->

            <!-- Form start  -->
            <hr class="border-black p-2">
            <div class="justify-center text-center bg-gray-500 text-white">
            <h2>Study Perfomance (Assignments / Tutorial/Lab/Power point presentation)</h2>
            </div>
            <div class="flex p-2 gap-20 text-center justify-center">
                <div>
                    <label for="M1">M1</label>
                    <input type="text" class="border-black border">
                </div>
                <div>
                    <label for="M2">M2</label>
                    <input type="text" class="border-black border">
                </div>
                <div>
                    <label for="M3">M3</label>
                    <input type="text" class="border-black border">
                </div>
                <div>
                    <label for="M4">M4</label>
                    <input type="text" class="border-black border">
                </div>
            </div>
            <!-- Form End -->

            <!-- Form start  -->
            <hr class="border-black p-2">
            <div class="justify-center text-center bg-gray-500 text-white">
            <h2>Perfomance in Exams</h2>
            </div>
            <div class="flex p-2 gap-20 text-center justify-center">
                <div>
                    <label for="M1">M1</label>
                    <input type="text" class="border-black border">
                </div>
                <div>
                    <label for="M2">M2</label>
                    <input type="text" class="border-black border">
                </div>
                <div>
                    <label for="M3">M3</label>
                    <input type="text" class="border-black border">
                </div>
                <div>
                    <label for="M4">M4</label>
                    <input type="text" class="border-black border">
                </div>
            </div>
            <!-- Form End -->

            <!-- Form start  -->
            <hr class="border-black p-2">
            <div class="justify-center text-center bg-gray-500 text-white">
            <h2>Communication Problem</h2>
            </div>
            <div class="flex p-2 gap-20 text-center justify-center">
                <div>
                    <label for="M1">M1</label>
                    <input type="text" class="border-black border">
                </div>
                <div>
                    <label for="M2">M2</label>
                    <input type="text" class="border-black border">
                </div>
                <div>
                    <label for="M3">M3</label>
                    <input type="text" class="border-black border">
                </div>
                <div>
                    <label for="M4">M4</label>
                    <input type="text" class="border-black border">
                </div>
            </div>
            <!-- Form End -->

            <!-- Form start  -->
            <hr class="border-black p-2">
            <div class="justify-center text-center bg-gray-500 text-white">
            <h2>Suggestions to the mentee</h2>
            </div>
            <div class="flex p-2 gap-20 text-center justify-center">
                <div>
                    <label for="M1">M1</label>
                    <input type="text" class="border-black border">
                </div>
                <div>
                    <label for="M2">M2</label>
                    <input type="text" class="border-black border">
                </div>
                <div>
                    <label for="M3">M3</label>
                    <input type="text" class="border-black border">
                </div>
                <div>
                    <label for="M4">M4</label>
                    <input type="text" class="border-black border">
                </div>
            </div>
            <!-- Form End -->
            </form>
        </div>
        </table>
        <div class="text-center">
        <button type="button" id="btnExport" value="Export" class="bg-violet-600 p-3 mb-2 rounded-lg first-letter text-white"> Export </button>
        </div>
    </main>
 </div>

         <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
         <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
         <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
         <script type="text/javascript">
             $("body").on("click", "#btnExport", function() {
                 html2canvas($('#tblstudent')[0], {
                     onrendered: function(canvas) {
                         var data = canvas.toDataURL();
                         var docDefinition = {
                             content: [{
                                 image: data,
                                 width : 500
                             }]
                         };
                         pdfMake.createPdf(docDefinition).download("Table.pdf");
                     }
                 });
             });
         </script>
 </body>
