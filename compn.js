function compValidate(){
    var emailRegex = /^[A-Za-z0-9._]*\@[A-Za-z]*\.[A-Za-z]{2,5}$/; 
    var x = document.forms.comp.fname.value;
    var y = document.forms.comp.email.value;
    var m = document.forms.comp.device.value;
    var n = document.forms.comp.warranty.value;
    var a = document.forms.comp.manu.value;
    var b = document.forms.comp.complaint.value;
    var c = document.forms.comp.lname.value;
    var d = document.forms.comp.model.value;
    if (x == null || x == ""){
        alert("Please enter the first name");
        return false;
    }
    if (c == null || c == ""){
        alert("Please enter the last name");
        return false;
    }
    
    if (y == ""){
        alert("Please enter the mail id");
        return false;
    }
      else if(!emailRegex.test(document.comp.email.value)){
  document.comp.email.focus();
  alert("Please enter a valid mail id");
  return false;
  }
    if (m == ""){
        alert("Please specify the device");
        return false;
    }
    if (n == ""){
        alert("Please specify if the warranty period has ended or not.");
        return false;
    }
    if (a == ""){
        alert("Please specify the name of the manufacturer");
        return false;
    }
    
    if (d == null || d == ""){
        alert("Please enter the model name");
        return false;
    }
    if (b == ""){
        alert("Please describe your complaint");
        return false;
    }

}