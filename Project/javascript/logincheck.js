function validateForm() {
  var email = document.getElementById("email").value;
  var password = document.getElementById("password").value;
  var patt = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/;
  var res = patt.test(email);
  if(email==""){
    alert("You are not a valid user");
  }
  if(password==""){
    alert("You are not a valid user");
  }
  if (!res) {
    document.getElementById("erroremail").innerHTML="Email format is not correct!";
    return false;
  }
  if ( password.length < 6) {
    document.getElementById("mytext1").innerHTML="Password format is not correct!";
    return false;
  }

}
