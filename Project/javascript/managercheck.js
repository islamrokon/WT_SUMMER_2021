function validateForm() {
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var fname = document.getElementById("fname").value;
    var lname = document.getElementById("lname").value;
    var bg = document.getElementById("bg").value;
    var m = document.getElementById("Male").checked;
    var f = document.getElementById("Female").checked;
    var o = document.getElementById("Other").checked;
    var DateofBirth = document.getElementById("DateofBirth").value;
    var phone = document.getElementById("phone").value;
    var address = document.getElementById("address").value;
    var nid = document.getElementById("nid").value;
    var file = document.getElementById("file").value;
    var file1 = document.getElementById("file1").value;
    var file2 = document.getElementById("file2").value;
    var patt = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/;
    var res = patt.test(email);
    if (!res) {
      document.getElementById("erroremail").innerHTML="Email format is not correct!";
      return false;
    }
    if ( password.length < 5) {
      document.getElementById("errorpassword").innerHTML="Password format is not correct!";
      return false;
    }
    if (fname=="") {
        document.getElementById("errorfname").innerHTML="Write your first name!";
        return false;
      }
      if (lname=="") {
        document.getElementById("errorlname").innerHTML="Write your last name!";
        return false;
      }
      if (bg=="") {
        document.getElementById("errorbg").innerHTML="Write your blood group!";
        return false;
      }
      if (m==false && f==false && o==false) 
    {
        document.getElementById("errorgender").innerHTML="Select your gender!";
        return false;
    }
    if (DateofBirth=="") {
        document.getElementById("errordate").innerHTML="Write your Birth date!";
        return false;
      }
      if (phone=="") {
        document.getElementById("errorphone").innerHTML="Write your Phone number!";
        return false;
      }
      if (address=="") {
        document.getElementById("erroraddress").innerHTML="Write your address!";
        return false;
      }
      if (nid=="") {
        document.getElementById("errornid").innerHTML="Write your NID number!";
        return false;
      }
      if (file=="") {
        document.getElementById("errorfile").innerHTML="Please upload your NID image!";
        return false;
      }
      if (file1=="") {
        document.getElementById("errorfile1").innerHTML="Please upload picture!";
        return false;
      }
      if (file2=="") {
        document.getElementById("errorfile2").innerHTML="Please upload certificates!";
        return false;
      }
    
  }