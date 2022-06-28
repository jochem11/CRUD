function validateForm() {
  let x = document.forms["signup"]["naam"].value;
  let y = document.forms["signup"]["wachtwoord"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  } else if (y == "") {
    alert("Password must be filled out");
    return false;
  } else {
    alert("Email must be filled out");
    return false;
  }
}
