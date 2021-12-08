function formValid() {
  let fval = document.forms["formOne"]["fullname"].value;
  if (fval == "") {
    alert("Your Full Name must be entered!");
    return false;
  }
}
function formValid() {
  let fval = document.forms["formOne"]["studentphone"].value;
  if (fval == "") {
    alert("Student Phone Number must be entered!");
    return false;
  }
}

function formValid() {
  let fval = document.forms["formOne"]["parentphone"].value;
  if (fval == "") {
    alert("Parent phone number must be entered!");
    return false;
  }
}
