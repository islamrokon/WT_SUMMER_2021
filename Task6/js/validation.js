function validateForm() {
    var fname = document.getElementById("fname").value;
    var email = document.getElementById("email").value;
    var m = document.getElementById("male").checked;
    var f = document.getElementById("female").checked;
    var o = document.getElementById("other").checked;
    var s = document.getElementById("value1").checked;
    var d = document.getElementById("value2").checked;
    var r = document.getElementById("value3").checked;
    var file = document.getElementById("file").value;
    var error1=error2=error3=error4=error5=error6=error7="";
    var flag=0;
    var patt = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/;
    var res = patt.test(email);
    
    if (fname == "" ) {
        error1="Please fill out first name";
        flag=1;
    }
   if(!res)
    {
        error2="Email format is not correct";
        flag=1;
    }
    if(password.value.length<8){
        error3="Password format is not correct";
        flag=1;
      
      


    }
    if(comment.value.length<10){
        error4="Comment format is not correct";
        
      flag=1;
  
  
      }
      if(m==false && f==false && o==false)
    {
        error5="Please select atleast one gender option";
      
     flag=1;
    }
    if (s==false && d==false && r==false) 
    {
        error6=" Please select atleast one hobby option";
      
      flag=1;
    }
    if (file == "") {
        error7="Please upload a file";
        flag=1;
    }
    if(flag==1){
        document.getElementById("errorfname").innerHTML=error1;
        document.getElementById("errormail").innerHTML=error2;
        document.getElementById("errorpassword").innerHTML=error3;
        document.getElementById("errorcomment").innerHTML=error4;
        document.getElementById("errorgender").innerHTML=error5;
        document.getElementById("errorchkbox").innerHTML=error6;
        document.getElementById("errorfile").innerHTML=error7
        return false;

    }
  }