function formValidation() {

   let fname = document.querySelector(".firstname");
   let lname= document.querySelector(".lastname");
   let email = document.querySelector(".email");
   let gender = document.querySelector(".gender");
   let uname = document.querySelector(".username");
   let password = document.querySelector(".password");
   let remail = document.querySelector(".recoverymail");
   let mobile = document.querySelector(".mobile");
   



   if (fname.value == "") {
      document.querySelector("#fname").innerHTML = "Empty Filled Not Allowed!! <br>";
      return false;
   }
  



   if (lname.value == "") {
      document.querySelector("#lname").innerHTML = "Empty filled not allowed!! <br>";
      return false;
   }
   


   if (email.value == "") {
      document.querySelector("#email").innerHTML = "Empty filled not allowed!! <br>";
      return false;
 }


   if (gender.value == "") {
      document.querySelector("#gender").innerHTML = "Empty filled not allowed!! <br>";
      return false;
   }
  


   if (uname.value == "") {
      document.querySelector("#uname").innerHTML = "Empty filled not allowed!! <br>";
      return false;
   }

    if (password.value == "") {
      document.querySelector("#password").innerHTML = "Empty filled not allowed!! <br>";
      return false;
   }


    if (remail.value == "") {
      document.querySelector("#remail").innerHTML = "Empty filled not allowed!! <br>";
      return false;
   }


    if (mobile.value == "") {
      document.querySelector("#mobile").innerHTML = "Empty filled not allowed!! <br>";
      return false;
   }

}

