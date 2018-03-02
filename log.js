function validate(form){
var emailRegex = /^[A-Za-z0-9._]*\@[A-Za-z]*\.[A-Za-z]{2,5}$/; 
var  femail = form.username.value;
var  fpassword = form.password.value;

 
 if (femail == "" )
 {
  form.username.focus();
  alert("Error: Enter the email id");
  return false;
  }
  else if(!emailRegex.test(femail))
{
	form.username.focus();
  alert("Error: Enter the valid email id");
  return false;
 }
   
  else  if(fpassword == "")
  {
   form.password.focus();
   alert("Error: Enter the password");
   return false;
  }

 else if(fname != '' && lname != '' && femail != '' && fpassword != '' && cpassword != '' && fmonth != '' && fday != '' && fyear != ''){
   alert("You have successfully Signed Up!");
   }


}