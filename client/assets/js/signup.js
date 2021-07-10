 
 function checkForm(form)
  {
    re = /^\w+$/;
    if(!re.test(form.username.value)) {
      alert("Error: Username must contain only letters, numbers and underscores!");
      form.username.focus();
      return false;
    }
    else if(form.password.value != conform_Password.value) {
        alert("Error: Password not match!");
        form.password.focus();
        return false;
      }
    else if(form.password.value == form.username.value || form.password.value == form.fname.value form.password.value == form.lname.value) {
        alert("Error: Password must be different from Username!, First name! and Last name!");
        form.password.focus();
        return false;
      }
    else{
    return true;
  }
  
}