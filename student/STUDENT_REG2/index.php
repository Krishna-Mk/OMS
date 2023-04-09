<!DOCTYPE html>
<html> 
  <head>
    <title>Registration Page</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <script src="https://kit.fontawesome.com/ab2155e76b.js" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
      </style>
  </head>
  <body>
    <div class="container">
      <div class="header justify-between"> 
      <a href="../std_dashboard.php" class="justify-start text-white"><i class="fas fa-arrow-alt-circle-left"></i></a>
        <h2>Enter your Information</h2>
        <h2>Click Back button for home page</h2>
      </div>  

      <form action="connect.php" method="post" class="form" id="form">
      
        <div class="form-control ">
          <label>Email</label>
          <input id="email" name="email" type= "email" placeholder="name@domain.com" required>
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Error Message</small>
        </div>

        <div class="form-control">
          <label for="enrollment_no">Enrollment No </label>
          <input type="number" class="form-control" id="enrollment_no" name="enrollment_no" placeholder="Enter your Enrollment No" required/>
          <i class="fas fa-check-circle"></i>
          <i class="fas fa-exclamation-circle"></i>
          <small>Error Message</small>
        </div>

        <div class="form-control">
            <label for="firstName">First Name</label>
            <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Enter your first name" pattern="[A-Za-z].{3,20}" required/>
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Error Message</small>
        </div>

        <div class="form-control">
          <label for="lastName">Last Name</label>
          <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Enter your last name" pattern="[A-Za-z].{1,50}" required/>
          <i class="fas fa-check-circle"></i>
          <i class="fas fa-exclamation-circle"></i>
          <small>Error Message</small>    
        </div>

        <div class="form-control">
          <label for="father_name">Fathers name</label>
          <input type="text" class="form-control" id="father_name" name="father_name" placeholder="Enter your fathers full name" pattern="[A-Za-z].{3,50}" required/>
          <i class="fas fa-check-circle"></i>
          <i class="fas fa-exclamation-circle"></i>
          <small>Error Message</small> 
        </div>
        
        <div class="form-control">
          <label for="mother_name">Mothers name</label>
          <input type="text" class="form-control" id="mother_name" name="mother_name" placeholder="Enter your mothers full name" pattern="[A-Za-z].{3,50}" required/>
          <i class="fas fa-check-circle"></i>
          <i class="fas fa-exclamation-circle"></i>
          <small>Error Message</small>
        </div>
          
        <div class="form-control">
          <label for="father_mobile_number">Fathers mobile number</label>
          <input type="tel" class="form-control" id="father_mobile_number" name="father_mobile_number" pattern="[0-9]{10}" maxlength="10" placeholder="Enter your fathers mobile number"required/>
          <i class="fas fa-check-circle"></i>
          <i class="fas fa-exclamation-circle"></i>
          <small>Error Message</small>
        </div>
          
        <div class="form-control">
          <label for="mother_mobile_number">Mothers mobile number</label>
          <input type="tel" class="form-control" id="mother_mobile_number" name="mother_mobile_number" pattern="[7-9]{1}[0-9]{9}" maxlength="10" placeholder="enter your mothers mobile number" required/>
          <i class="fas fa-check-circle"></i>
          <i class="fas fa-exclamation-circle"></i>
          <small>Error Message</small>
        </div>

        <div class="form-controol">
          <label for="gender">Gender : </label>
          <label for="male" class="radio-inline"><br>
            <input type="radio" name="gender" value="M" id="male" required /> Male </label>

          <label for="female" class="radio-inline"><br>
            <input type="radio" name="gender" value="F" id="female"/>Female</label>

          <label for="others" class="radio-inline"><br>
            <input type="radio" name="gender"value="O" id="others"/>Others</label>      
        </div><br>

        <div class="form-control">
          <label for="institute">Institute</label>
          <input type="text" class="form-control" id="institute" name="institute" placeholder="Enter your Institutions name" pattern="[A-Za-z].{3,10}" required/>
          <i class="fas fa-check-circle"></i>
          <i class="fas fa-exclamation-circle"></i>
          <small>Error Message</small>
        </div>

        <div class="form-control">
          <label for="course"> Course</label>
          <input type="text" class="form-control" id="course" name="course" placeholder="Enter the name of course you are enrolled in " pattern="[A-Za-z].{3,100}" required/>
          <i class="fas fa-check-circle"></i>
          <i class="fas fa-exclamation-circle"></i>
          <small>Error Message</small>
        </div>

        <div class="form-control">
          <label for="sem"> Sem</label>
          <input type="number" class="form-control" id="sem" name="sem" placeholder="Enter the semister you are in" required/>
          <i class="fas fa-check-circle"></i>
          <i class="fas fa-exclamation-circle"></i>
          <small>Error Message</small>
        </div>

        <div class="form-control">
          <label for="date_of_birth"> Date of birth</label>
          <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" required />
          <i class="fas fa-check-circle"></i>
          <i class="fas fa-exclamation-circle"></i>
          <small>Error Message</small>
        </div>
          
        <div class="form-control">
          <label for="district"> District</label>
          <input type="text" class="form-control" id="district" name="district" placeholder="Enter the name of the district you live in " pattern="[A-Za-z].{3,10}" required/>
          <i class="fas fa-check-circle"></i>
          <i class="fas fa-exclamation-circle"></i> 
          <small>Error Message</small>
        </div>

        <div class="form-control">
          <label for="state"> State</label>
          <input type="text" class="form-control" id="state" name="state" placeholder="Enter the name of the state you  live in " pattern="[A-Za-z].{3,50}" required/>
          <i class="fas fa-check-circle"></i>
          <i class="fas fa-exclamation-circle"></i>
          <small>Error Message</small>
        </div>

        <div class="form-control">           
          <label for="mobile_number">Phone Number</label>
          <input type="tel" class="form-control" id="mobile_number" name="mobile_number" pattern="[7-9]{1}[0-9]{9}" placeholder="Enter your mobile number" maxlength="10" required/>
          <i class="fas fa-check-circle"></i>
          <i class="fas fa-exclamation-circle"></i>
          <small>Error Message</small>
        </div>

        <div class="form-control">
          <label for="address"> Address</label>
          <input type="text" class="form-control" id="address" name="address" placeholder="Enter your address" required/>
          <i class="fas fa-check-circle"></i>
          <i class="fas fa-exclamation-circle"></i>
          <small>Error Message</small>
        </div>

        <div class="w-fit p-2 items-center">
          <button class="bg-violet-600 text-white p-2 items-center">Submit</button>
        </div>

      </form>

    </div>

    <!-- <script src="app.js"></script> -->
  </body>
</html>
