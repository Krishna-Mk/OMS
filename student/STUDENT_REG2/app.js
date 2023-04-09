const form = document.getElementById("form");
const email = document.getElementById("email");
const firstName = document.getElementById("firstName");
const lastName = document.getElementById("lastName");
const father_name = document.getElementById("father_name");
const mother_name = document.getElementById("mother_name");
const father_mobile_number = document.getElementById("father_mobile_number");
const mother_mobile_number = document.getElementById("mother_mobile_number");
const mobile_number = document.getElementById("mobile_number");
const institute = document.getElementById("institute");
const course = document.getElementById("course");
const sem = document.getElementById("sem");
const date_of_birth = document.getElementById("date_of_birth");
const district = document.getElementById("district");
const state = document.getElementById("state");
const address = document.getElementById("address");


form.addEventListener("submit", (event)=>{
  event.preventDefault();
  
  inspect();
  
});


function inspect(){
  //The the values from the inputs
  const emailValue = email.value.trim();
  const firstNameValue = firstName.value.trim();
  const lastNameValue = lastName.value.trim();
  const father_nameValue = father_name.value.trim();
  const mother_nameValue = mother_name.value.trim();
  const father_mobile_numberValue = father_mobile_number.value.trim();
  const mother_mobile_numberValue = mother_mobile_number.value.trim();
  const mobile_numberValue = mobile_number.value.trim();
  const instituteValue = institute.value.trim();
  const courseValue = course.value.trim();
  const semValue = sem.value.trim();
  const date_of_birthValue = date_of_birth.value.trim();
  const districtValue = district.value.trim();
  const stateValue = state.value.trim();
  const addressValue = address.value.trim();

  //to chek the firstname is not blank
  if (firstNameValue == ""){
    //display error
    //add error class
    setErrorFor(firstName, "First name can't be blank");
    
    
  } else  {
    //add success class
    setSuccessFor(firstName);
    
    
  }
  //to chek the lastname is not blank
  if (lastNameValue == ""){
    //display error
    //add error class
    setErrorFor(lastName, "First name can't be blank");
    
    
  } else  {
    //add success class
    setSuccessFor(lastName);
    
    
  }
  //to chek the father_name is not blank
  if (father_nameValue == ""){
    //display error
    //add error class
    setErrorFor(father_name, "First name can't be blank");
    
    
  } else  {
    //add success class
    setSuccessFor(father_name);
    
    
  }
  //to chek the mother_name is not blank
  if (mother_nameValue == ""){
    //display error
    //add error class
    setErrorFor(mother_name, "First name can't be blank");
    
    
  } else  {
    //add success class
    setSuccessFor(mother_name);
    
    
  }
  // ...........................
    
    if (father_mobile_numberValue == ""){
      //display error
      //add error class
      setErrorFor(father_mobile_number, "First name can't be blank");
      
      
    } else  {
      //add success class
      setSuccessFor(father_mobile_number);
      
      
    }
    
    
     // ...........................
    
     if (mother_mobile_numberValue == ""){
      //display error
      //add error class
      setErrorFor(mother_mobile_number, "First name can't be blank");
      
      
    } else  {
      //add success class
      setSuccessFor(mother_mobile_number);
      
      
    }
         // ...........................
    
         if (mobile_numberValue == ""){
          //display error
          //add error class
          setErrorFor(mobile_number, "First name can't be blank");
          
          
        } else  {
          //add success class
          setSuccessFor(mobile_number);
          
          
        }
    // ...........................
    

    // ...........................
    
    if (instituteValue == ""){
      //display error
      //add error class
      setErrorFor(institute, "First name can't be blank");
      
      
    } else  {
      //add success class
      setSuccessFor(institute);
      
      
    }

    // ...........................
    
    if (courseValue == ""){
      //display error
      //add error class
      setErrorFor(course, "First name can't be blank");
      
      
    } else  {
      //add success class
      setSuccessFor(course);
      
      
    }
// ...........................
    
    if (semValue == ""){
      //display error
      //add error class
      setErrorFor(sem, "First name can't be blank");
      
      
    } else  {
      //add success class
      setSuccessFor(sem);
      
      
    }
    // ...........................
    
    if (date_of_birthValue == ""){
      //display error
      //add error class
      setErrorFor(date_of_birth, "First name can't be blank");
      
      
    } else  {
      //add success class
      setSuccessFor(date_of_birth);
      
      
    }

    // ...........................
    
    if (districtValue == ""){
      //display error
      //add error class
      setErrorFor(district, "First name can't be blank");
      
      
    } else  {
      //add success class
      setSuccessFor(district);
      
      
    }

    if (stateValue == ""){
      //display error
      //add error class
      setErrorFor(state, "First name can't be blank");
      
      
    } else  {
      //add success class
      setSuccessFor(state);
      
      
    }

    if (addressValue == ""){
      //display error
      //add error class
      setErrorFor(address, "First name can't be blank");
      
      
    } else  {
      //add success class
      setSuccessFor(address);
      
      
    }

  if (emailValue == ""){
    
    setErrorFor(email, "Email can't be blank");
    
    
  }else if (!emailverification(emailValue)) {
    setErrorFor(email, "Email is not valid");
    
  } else {
    setSuccessFor(email);
  }
  
  
  
  if (firstNameValue === "" || emailValue === "" .
  length <  7 || (!emailverification(emailValue) ) ) {
    //display error
    //add error class
    isValid = false;
    
    
  } else  {
    //add success class
    isValid = true;
  
 
  }
  
  if (isValid){
    alert("Form Submittion Completed");
  }
  
  
 
 
  
  
  
  

}



function setErrorFor (input, message) {
  const formControl = input.parentElement //.form-control
  const small = formControl.querySelector("small");
  
  
  
  //add error message inside small 
  small.innerText = message;
  
  //add error class
  
  formControl.className = "form-control error";
                                          
                                          
}

function setSuccessFor(input, message) {
  
  const formControl = input.parentElement //.form-control
  
  formControl.className = "form-control success";
  
}


function emailverification(email) {
  return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}