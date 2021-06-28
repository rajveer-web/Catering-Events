function validateForm() {
  var x = document.forms["myForm"]["name"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
  var x = document.forms["myForm"]["email"].value;
  if (x == "") {
    alert("Email must be filled out");
    return false;
  }
  var x = document.forms["myForm"]["phone"].value;
  if (x == "") {
    alert("phone must be filled out");
    return false;
  }
  var x = document.forms["myForm"]["category"].value;
  if (x == "") {
    alert("Category must be filled out");
    return false;
  }
  var x = document.forms["myForm"]["date"].value;
  if (x == "") {
    alert("Date must be filled out");
    return false;
  }
  var x = document.forms["myForm"]["Time"].value;
  if (x == "") {
    alert("Time must be filled out");
    return false;
  }
  var x = document.forms["myForm"]["address"].value;
  if (x == "") {
    alert("Address must be filled out");
    return false;
  }
  var x = document.forms["myForm"]["city"].value;
  if (x == "") {
    alert("City must be filled out");
    return false;
  }
  var x = document.forms["myForm"]["state"].value;
  if (x == "") {
    alert("State must be filled out");
    return false;
  }
  var x = document.forms["myForm"]["zip"].value;
  if (x == "") {
    alert("Zip must be filled out");
    return false;
  }


}